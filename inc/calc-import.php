<?php

/**
 * Серверный импорт прайс-листа (XLSX/CSV) в complex-поле Carbon
 * calc_price_matrix (theme option).
 *
 * Файл выбирается в поле price_import, грузится во временное хранилище,
 * а запись в calc_price_matrix происходит при сохранении опций темы
 * (хук carbon_fields_theme_options_container_saved), чтобы сохранение
 * страницы не откатывало импорт.
 */

add_action('wp_ajax_calc_import_price', 'calc_import_price_callback');
add_action('carbon_fields_theme_options_container_saved', 'calc_import_apply_on_save');
add_action('admin_notices', 'calc_import_admin_notice');

function calc_import_price_callback()
{
  if (! current_user_can('manage_options')) {
    wp_send_json_error(['error' => 'Недостаточно прав']);
  }

  if (empty($_POST['nonce']) || ! wp_verify_nonce($_POST['nonce'], 'calc_import_price')) {
    wp_send_json_error(['error' => 'Ошибка проверки nonce']);
  }

  if (empty($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
    wp_send_json_error(['error' => 'Файл не загружен']);
  }

  $tmp  = $_FILES['file']['tmp_name'];
  $name = $_FILES['file']['name'];
  $ext  = strtolower(pathinfo($name, PATHINFO_EXTENSION));

  if ($ext === 'csv') {
    $rows = calc_import_parse_csv($tmp);
  } elseif ($ext === 'xlsx') {
    $rows = calc_import_parse_xlsx($tmp);
  } else {
    wp_send_json_error(['error' => 'Неподдерживаемый формат: ' . $ext]);
    return;
  }

  if (is_wp_error($rows)) {
    wp_send_json_error(['error' => $rows->get_error_message()]);
    return;
  }

  $count = 0;
  foreach ($rows as $r) {
    if (
      empty($r['house_type']) && empty($r['rooms']) && empty($r['repair_type']) &&
      empty($r['repair_price']) && empty($r['materials_price'])
    ) {
      continue;
    }
    $count++;
  }

  set_transient('calc_import_pending_' . get_current_user_id(), $rows, DAY_IN_SECONDS);

  wp_send_json_success(['count' => $count]);
}

function calc_import_apply_on_save()
{
  $key  = 'calc_import_pending_' . get_current_user_id();
  $rows = get_transient($key);

  if (empty($rows) || ! is_array($rows)) {
    return;
  }

  $groups = [];
  foreach ($rows as $r) {
    if (
      empty($r['house_type']) && empty($r['rooms']) && empty($r['repair_type']) &&
      empty($r['repair_price']) && empty($r['materials_price'])
    ) {
      continue;
    }
    $groups[] = [
      '_type'           => '_',
      'house_type'      => $r['house_type'],
      'rooms'           => $r['rooms'],
      'repair_type'     => $r['repair_type'],
      'repair_price'    => $r['repair_price'],
      'materials_price' => $r['materials_price'],
    ];
  }

  carbon_set_theme_option('calc_price_matrix', $groups);
  delete_transient($key);
  set_transient('calc_import_notice_' . get_current_user_id(), count($groups), 30);
}

function calc_import_admin_notice()
{
  $key = 'calc_import_notice_' . get_current_user_id();
  $c   = get_transient($key);
  if ($c === false) {
    return;
  }
  echo '<div class="notice notice-success is-dismissible"><p>'
    . 'Импорт прайса: обновлено строк в таблице цен: <b>' . intval($c) . '</b>. '
    . 'Обновите страницу, чтобы увидеть таблицу.</p></div>';
  delete_transient($key);
}

function calc_import_clean_num($v)
{
  $v = trim((string) $v);
  $v = preg_replace('/[\s\x{00A0}]/u', '', $v);
  $v = str_replace(',', '.', $v);
  $v = preg_replace('/[^\d.]/', '', $v);
  return $v;
}

function calc_import_rows_to_assoc($rows)
{
  $out = [];
  foreach ($rows as $r) {
    $out[] = [
      'house_type'      => isset($r[0]) ? trim($r[0]) : '',
      'rooms'           => isset($r[1]) ? trim($r[1]) : '',
      'repair_type'     => isset($r[2]) ? trim($r[2]) : '',
      'repair_price'    => calc_import_clean_num(isset($r[3]) ? $r[3] : ''),
      'materials_price' => calc_import_clean_num(isset($r[4]) ? $r[4] : ''),
    ];
  }
  return $out;
}

function calc_import_parse_csv($path)
{
  $handle = fopen($path, 'r');
  if (! $handle) {
    return new WP_Error('csv', 'Не удалось открыть CSV');
  }

  $first = fgets($handle);
  rewind($handle);
  $delim = (strpos($first, ';') !== false) ? ';' : ',';

  $rows = [];
  while (($data = fgetcsv($handle, 0, $delim)) !== false) {
    $rows[] = $data;
  }
  fclose($handle);

  if (empty($rows)) {
    return [];
  }

  return calc_import_rows_to_assoc($rows);
}

function calc_import_parse_xlsx($path)
{
  if (! class_exists('ZipArchive')) {
    return new WP_Error('zip', 'На сервере недоступен ZipArchive');
  }

  $zip = new ZipArchive();
  if ($zip->open($path) !== true) {
    return new WP_Error('zip', 'Не удалось открыть XLSX');
  }

  $ns = 'http://schemas.openxmlformats.org/spreadsheetml/2006/main';

  $shared = [];
  $ss = $zip->getFromName('xl/sharedStrings.xml');
  if ($ss !== false) {
    $doc = new DOMDocument();
    if (@$doc->loadXML($ss)) {
      $x = new DOMXPath($doc);
      $x->registerNamespace('m', $ns);
      $nodes = $x->query('//m:si');
      if ($nodes) {
        foreach ($nodes as $si) {
          $shared[] = preg_replace('/\s+/', ' ', trim($si->textContent));
        }
      }
    }
  }

  $sheet = $zip->getFromName('xl/worksheets/sheet1.xml');
  if ($sheet === false) {
    for ($i = 1; $i <= 10; $i++) {
      $s = $zip->getFromName('xl/worksheets/sheet' . $i . '.xml');
      if ($s !== false) {
        $sheet = $s;
        break;
      }
    }
  }
  $zip->close();

  if ($sheet === false) {
    return new WP_Error('sheet', 'Не найден лист в XLSX');
  }

  $doc = new DOMDocument();
  if (! @$doc->loadXML($sheet)) {
    return new WP_Error('sheet', 'Не удалось разобрать лист XLSX');
  }
  $x = new DOMXPath($doc);
  $x->registerNamespace('m', $ns);

  $grid = [];
  $row_nodes = $x->query('//m:sheetData/m:row');
  if ($row_nodes) {
    foreach ($row_nodes as $row) {
      $cells = $x->query('m:c', $row);
      if (! $cells) {
        continue;
      }
      foreach ($cells as $c) {
        $r = $c->getAttribute('r');
        if (! preg_match('/^([A-Z]+)(\d+)$/', $r, $m)) {
          continue;
        }
        $col = $m[1];
        $rn  = (int) $m[2];
        $t   = $c->getAttribute('t');

        $vNode = $x->query('m:v', $c)->item(0);
        $v     = $vNode ? $vNode->textContent : '';

        if ($t === 's') {
          $idx = (int) $v;
          $val = isset($shared[$idx]) ? $shared[$idx] : '';
        } elseif ($t === 'inlineStr') {
          $is  = $x->query('m:is', $c)->item(0);
          $val = $is ? $is->textContent : '';
        } else {
          $val = $v;
        }

        $grid[$rn][$col] = $val;
      }
    }
  }

  ksort($grid);

  $data  = [];
  $first = true;
  foreach ($grid as $cols) {
    if ($first) {
      $first = false;
      continue; // заголовок
    }
    $data[] = [
      isset($cols['A']) ? $cols['A'] : '',
      isset($cols['B']) ? $cols['B'] : '',
      isset($cols['C']) ? $cols['C'] : '',
      isset($cols['D']) ? $cols['D'] : '',
      isset($cols['E']) ? $cols['E'] : '',
    ];
  }

  return calc_import_rows_to_assoc($data);
}
