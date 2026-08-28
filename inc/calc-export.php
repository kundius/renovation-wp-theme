<?php

/**
 * Серверная генерация XLSX прайс-листа (без внешних библиотек).
 * Данные приходят с фронта (выбор пользователя) в виде JSON.
 */

if (!defined('CALC_EXPORT_STYLE_DEFAULT')) {
  define('CALC_EXPORT_STYLE_DEFAULT', 0); // пусто
}
if (!defined('CALC_EXPORT_STYLE_HEADER_LEFT')) {
  define('CALC_EXPORT_STYLE_HEADER_LEFT', 1); // жирный + серый фон + бордер + влево
}
if (!defined('CALC_EXPORT_STYLE_HEADER_CENTER')) {
  define('CALC_EXPORT_STYLE_HEADER_CENTER', 2); // жирный + серый фон + бордер + центр
}
if (!defined('CALC_EXPORT_STYLE_BOLD_LEFT')) {
  define('CALC_EXPORT_STYLE_BOLD_LEFT', 3); // жирный + бордер + влево
}
if (!defined('CALC_EXPORT_STYLE_BOLD_CENTER')) {
  define('CALC_EXPORT_STYLE_BOLD_CENTER', 4); // жирный + бордер + центр
}
if (!defined('CALC_EXPORT_STYLE_DATA_LEFT')) {
  define('CALC_EXPORT_STYLE_DATA_LEFT', 5); // бордер + влево
}
if (!defined('CALC_EXPORT_STYLE_DATA_CENTER')) {
  define('CALC_EXPORT_STYLE_DATA_CENTER', 6); // бордер + центр
}
if (!defined('CALC_EXPORT_STYLE_TITLE')) {
  define('CALC_EXPORT_STYLE_TITLE', 7); // крупный жирный заголовок + бордер + центр
}

function calc_export_xml_escape($value)
{
  return htmlspecialchars((string) $value, ENT_XML1 | ENT_QUOTES, 'UTF-8');
}

function calc_export_cell($col, $row, $value, $style = 0)
{
  $ref = $col . $row;
  $s = $style ? ' s="' . $style . '"' : '';

  if ($value === null || $value === '') {
    return $s ? '<c r="' . $ref . '"' . $s . '/>' : '';
  }

  if (is_numeric($value)) {
    return '<c r="' . $ref . '"' . $s . '><v>' . $value . '</v></c>';
  }

  return '<c r="' . $ref . '"' . $s . ' t="inlineStr"><is><t xml:space="preserve">' . calc_export_xml_escape($value) . '</t></is></c>';
}

function calc_export_row_xml($row_index, $cells)
{
  $cols = ['A', 'B', 'C', 'D'];
  $xml = '<row r="' . $row_index . '">';

  foreach ($cells as $i => $cell) {
    $value = $cell[0];
    $style = isset($cell[1]) ? $cell[1] : 0;
    $xml .= calc_export_cell($cols[$i], $row_index, $value, $style);
  }

  $xml .= '</row>';

  return $xml;
}

function calc_export_build_xlsx($payload)
{
  $title = !empty($payload['title'])
    ? $payload['title']
    : 'Предварительный расчет от компании «Ремонт-Подключ»';

  $rows_xml = '';
  $r = 1;

  // Строка 1: крупный заголовок на всю ширину (объединение A1:D1), по центру
  $rows_xml .= '<row r="' . $r . '" ht="30" customHeight="1">' . calc_export_cell('A', $r, $title, CALC_EXPORT_STYLE_TITLE) . '</row>';
  $r++;

  // Строка 2: заголовки колонок (серый фон + жирный + бордер)
  $rows_xml .= calc_export_row_xml($r, [
    [$payload['header'][0], CALC_EXPORT_STYLE_HEADER_LEFT],
    [$payload['header'][1], CALC_EXPORT_STYLE_HEADER_CENTER],
    [$payload['header'][2], CALC_EXPORT_STYLE_HEADER_CENTER],
    [$payload['header'][3], CALC_EXPORT_STYLE_HEADER_CENTER],
  ]);
  $r++;

  // Данные с группировкой по категориям
  if (!empty($payload['sections'])) {
    foreach ($payload['sections'] as $section) {
      // Название группы — жирным
      $rows_xml .= calc_export_row_xml($r, [
        [$section['name'], CALC_EXPORT_STYLE_BOLD_LEFT],
        ['', CALC_EXPORT_STYLE_DATA_CENTER],
        ['', CALC_EXPORT_STYLE_DATA_CENTER],
        ['', CALC_EXPORT_STYLE_DATA_CENTER],
      ]);
      $r++;

      foreach ($section['items'] as $item) {
        $rows_xml .= calc_export_row_xml($r, [
          [$item['name'], CALC_EXPORT_STYLE_DATA_LEFT],
          [$item['quantity'], CALC_EXPORT_STYLE_DATA_CENTER],
          [$item['units'], CALC_EXPORT_STYLE_DATA_CENTER],
          [$item['price'], CALC_EXPORT_STYLE_DATA_CENTER],
        ]);
        $r++;
      }
    }
  }

  // Итог — жирным
  $rows_xml .= calc_export_row_xml($r, [
    ['Итого', CALC_EXPORT_STYLE_BOLD_LEFT],
    ['', CALC_EXPORT_STYLE_DATA_CENTER],
    ['', CALC_EXPORT_STYLE_DATA_CENTER],
    [$payload['total'], CALC_EXPORT_STYLE_BOLD_CENTER],
  ]);
  $r++;

  $sheet = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'
    . '<worksheet xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main">'
    . '<sheetViews><sheetView workbookViewId="0"/></sheetViews>'
    . '<cols>'
    . '<col min="1" max="1" width="42" customWidth="1"/>'
    . '<col min="2" max="2" width="12" customWidth="1"/>'
    . '<col min="3" max="3" width="10" customWidth="1"/>'
    . '<col min="4" max="4" width="16" customWidth="1"/>'
    . '</cols>'
    . '<sheetData>' . $rows_xml . '</sheetData>'
    . '<mergeCells count="1"><mergeCell ref="A1:D1"/></mergeCells>'
    . '</worksheet>';

  $styles = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'
    . '<styleSheet xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main">'
    . '<fonts count="3">'
    . '<font><sz val="11"/><name val="Calibri"/></font>'
    . '<font><b/><sz val="11"/><name val="Calibri"/></font>'
    . '<font><b/><sz val="16"/><name val="Calibri"/></font>'
    . '</fonts>'
    . '<fills count="3">'
    . '<fill><patternFill patternType="none"/></fill>'
    . '<fill><patternFill patternType="gray125"/></fill>'
    . '<fill><patternFill patternType="solid"><fgColor rgb="FFD9D9D9"/><bgColor indexed="64"/></patternFill></fill>'
    . '</fills>'
    . '<borders count="2">'
    . '<border><left/><right/><top/><bottom/><diagonal/></border>'
    . '<border><left style="thin"/><right style="thin"/><top style="thin"/><bottom style="thin"/><diagonal/></border>'
    . '</borders>'
    . '<cellStyleXfs count="1"><xf numFmtId="0" fontId="0" fillId="0" borderId="0"/></cellStyleXfs>'
    . '<cellXfs count="8">'
    . '<xf numFmtId="0" fontId="0" fillId="0" borderId="0" xfId="0"/>'
    . '<xf numFmtId="0" fontId="1" fillId="2" borderId="1" xfId="0" applyFont="1" applyFill="1" applyBorder="1" applyAlignment="1"><alignment horizontal="left"/></xf>'
    . '<xf numFmtId="0" fontId="1" fillId="2" borderId="1" xfId="0" applyFont="1" applyFill="1" applyBorder="1" applyAlignment="1"><alignment horizontal="center"/></xf>'
    . '<xf numFmtId="0" fontId="1" fillId="0" borderId="1" xfId="0" applyFont="1" applyBorder="1" applyAlignment="1"><alignment horizontal="left"/></xf>'
    . '<xf numFmtId="0" fontId="1" fillId="0" borderId="1" xfId="0" applyFont="1" applyBorder="1" applyAlignment="1"><alignment horizontal="center"/></xf>'
    . '<xf numFmtId="0" fontId="0" fillId="0" borderId="1" xfId="0" applyBorder="1" applyAlignment="1"><alignment horizontal="left"/></xf>'
    . '<xf numFmtId="0" fontId="0" fillId="0" borderId="1" xfId="0" applyBorder="1" applyAlignment="1"><alignment horizontal="center"/></xf>'
    . '<xf numFmtId="0" fontId="2" fillId="0" borderId="1" xfId="0" applyFont="1" applyBorder="1" applyAlignment="1"><alignment horizontal="center" vertical="center"/></xf>'
    . '</cellXfs>'
    . '<cellStyles count="1"><cellStyle name="Normal" xfId="0" builtinId="0"/></cellStyles>'
    . '</styleSheet>';

  $content_types = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'
    . '<Types xmlns="http://schemas.openxmlformats.org/package/2006/content-types">'
    . '<Default Extension="rels" ContentType="application/vnd.openxmlformats-package.relationships+xml"/>'
    . '<Default Extension="xml" ContentType="application/xml"/>'
    . '<Override PartName="/xl/workbook.xml" ContentType="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet.main+xml"/>'
    . '<Override PartName="/xl/styles.xml" ContentType="application/vnd.openxmlformats-officedocument.spreadsheetml.styles+xml"/>'
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
    . '<Relationship Id="rId2" Type="http://schemas.openxmlformats.org/officeDocument/2006/relationships/styles" Target="styles.xml"/>'
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
  $zip->addFromString('xl/styles.xml', $styles);
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
