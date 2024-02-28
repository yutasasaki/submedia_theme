<?php
require_once get_stylesheet_directory() . '/models/clinic_data.php';
require_once get_stylesheet_directory() . '/models/clinic_pr_data.php';

function show_clinic_db_shortcode($atts) {
// ショートコード属性を解析
$atts = shortcode_atts(array(
'table_id' => '', // TablePressテーブルのID
'pr_table_id' => '', // PRがある場合のテーブルID
'place_id' => '', // 検索したいPlaceId
'view' => 'default',
), $atts);

// PlaceIdを取得
$searched_place_id = $atts['place_id'];

// デフォルト値はtable_idに設定する
if($atts['pr_table_id'] == ''){
  $atts['pr_table_id'] = $atts['table_id'];
}

$table = [];
if ($atts['table_id'] !== '') {
  $table = TablePress::$model_table->load($atts['table_id']);
  if (is_wp_error($table)) {
    return '';
  }
}

// PlaceIdに対応する行を探索
$target_row = null;
foreach ($table['data'] as $row) {
  if (isset($row[66]) && $row[66] == $searched_place_id) {
    $target_row = $row;
    break;
  }
}

if (
  $target_row === null
) {
  return '';
}
// 変数の定義
$clinic_data = new ClinicData($target_row);
$clinic_data->place_id = $target_row[66] ?? ''; // PlaceIDを設定

 // ビューファイルの読み込み
ob_start(); // 出力バッファリング開始
include(get_stylesheet_directory() . '/views/clinic_casette/'.$atts['view'].'.php');
return ob_get_clean(); // バッファの内容を取得し、バッファを消去
}
add_shortcode('show_clinic_db', 'show_clinic_db_shortcode');