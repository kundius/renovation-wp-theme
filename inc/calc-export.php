<?php

/**
 * Серверная генерация XLSX прайс-листа (без внешних библиотек).
 * Данные приходят с фронта (выбор пользователя) в виде JSON.
 */

function calc_export_xml_escape($value)
{
  return htmlspecialchars((string) $value, ENT_XML1 | ENT_QUOTES, 'UTF-8');
}

function calc_export_cell($col, $row, $value)
{
  $ref = $col . $row;

  if ($value === null || $value === '') {
    return '';
  }

  if (is_numeric($value)) {
    return '<c r="' . $ref . '"><v>' . $value . '</v></c>';
  }

  return '<c r="' . $ref . '" t="inlineStr"><is><t xml:space="preserve">' . calc_export_xml_escape($value) . '</t></is></c>';
}

function calc_export_row_xml($row_index, $cells)
{
  $cols = ['A', 'B', 'C', 'D'];
  $xml = '<row r="' . $row_index . '">';

  foreach ($cells as $i => $val) {
    $xml .= calc_export_cell($cols[$i], $row_index, $val);
  }

  $xml .= '</row>';

  return $xml;
}

function calc_export_build_xlsx($payload)
{
  $rows_xml = '';
  $r = 1;

  $rows_xml .= calc_export_row_xml($r++, $payload['header']);

  if (!empty($payload['sections'])) {
    foreach ($payload['sections'] as $section) {
      $rows_xml .= calc_export_row_xml($r++, [$section['name'], '', '', '']);

      foreach ($section['items'] as $item) {
        $rows_xml .= calc_export_row_xml($r++, [
          $item['name'],
          $item['quantity'],
          $item['units'],
          $item['price'],
        ]);
      }
    }
  }

  $rows_xml .= calc_export_row_xml($r++, ['Итого', '', '', $payload['total']]);

  $sheet = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'
    . '<worksheet xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main">'
    . '<sheetData>' . $rows_xml . '</sheetData>'
    . '</worksheet>';

  $content_types = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'
    . '<Types xmlns="http://schemas.openxmlformats.org/package/2006/content-types">'
    . '<Default Extension="rels" ContentType="application/vnd.openxmlformats-package.relationships+xml"/>'
    . '<Default Extension="xml" ContentType="application/xml"/>'
    . '<Override PartName="/xl/workbook.xml" ContentType="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet.main+xml"/>'
    . '<Override PartName="/xl/worksheets/sheet1.xml" ContentType="application/vnd.openxmlformats-officedocument.spreadsheetml.worksheet+xml"/>'
    . '</Types>';

  $rels = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'
    . '<Relationships xmlns="http://schemas.openxmlformats.org/package/2006/relationships">'
    . '<Relationship Id="rId1" Type="http://schemas.openxmlformats.org/officeDocument/2006/relationships/officeDocument" Target="xl/workbook.xml"/>'
    . '</Relationships>';

  $workbook = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'
    . '<workbook xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships">'
    . '<sheets><sheet name="Прайс" sheetId="1" r:id="rId1"/></sheets>'
    . '</workbook>';

  $workbook_rels = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'
    . '<Relationships xmlns="http://schemas.openxmlformats.org/package/2006/relationships">'
    . '<Relationship Id="rId1" Type="http://schemas.openxmlformats.org/officeDocument/2006/relationships/worksheet" Target="worksheets/sheet1.xml"/>'
    . '</Relationships>';

  $zip = new ZipArchive();
  $tmp = tempnam(sys_get_temp_dir(), 'xlsx_');

  if ($zip->open($tmp, ZipArchive::CREATE) !== true) {
    return false;
  }

  $zip->addFromString('[Content_Types].xml', $content_types);
  $zip->addFromString('_rels/.rels', $rels);
  $zip->addFromString('xl/workbook.xml', $workbook);
  $zip->addFromString('xl/_rels/workbook.xml.rels', $workbook_rels);
  $zip->addFromString('xl/worksheets/sheet1.xml', $sheet);
  $zip->close();

  $content = file_get_contents($tmp);
  unlink($tmp);

  return $content;
}

function calc_export_price_callback()
{
  if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'calc_export_price')) {
    wp_die('Неверный запрос');
  }

  $payload = [];
  if (!empty($_POST['data'])) {
    $payload = json_decode(wp_unslash($_POST['data']), true);
  }

  if (!is_array($payload) || empty($payload['header'])) {
    wp_die('Нет данных для выгрузки');
  }

  $xlsx = calc_export_build_xlsx($payload);

  if ($xlsx === false) {
    wp_die('Ошибка формирования файла');
  }

  while (ob_get_level()) {
    ob_end_clean();
  }

  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  header('Content-Disposition: attachment; filename="pricelist.xlsx"');
  header('Content-Length: ' . strlen($xlsx));
  header('Cache-Control: no-store, no-cache, must-revalidate');
  header('Pragma: no-cache');

  echo $xlsx;
  exit;
}

add_action('wp_ajax_calc_export_price', 'calc_export_price_callback');
add_action('wp_ajax_nopriv_calc_export_price', 'calc_export_price_callback');
