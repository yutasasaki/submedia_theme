<?php
require_once get_stylesheet_directory() . '/models/clinic_data.php';

function show_clinic_db_shortcode($atts) {
// ショートコード属性を解析
$atts = shortcode_atts(array(
'table_id' => '', // TablePressテーブルのID
'place_id' => '', // 検索したいPlaceId
'view' => 'default',
), $atts);

// PlaceIdを取得
$searched_place_id = $atts['place_id'];

// TablePressテーブルのデータを取得
$table = TablePress::$model_table->load($atts['table_id']);
if (is_wp_error($table)) {
return '指定されたテーブルが見つかりません。';
}

// PlaceIdに対応する行を探索
$found_row = null;
foreach ($table['data'] as $row) {
if (isset($row[66]) && $row[66] == $searched_place_id) {
$found_row = $row;
break;
}
}

if ($found_row === null) {
return '指定されたPlaceIdに対応する行が見つかりません。';
}

// 変数の定義
$clinic_data = new ClinicData($found_row);
$clinic_data->place_id = $found_row[66] ?? ''; // PlaceIDを設定

// ビューファイルの読み込み
ob_start(); // 出力バッファリング開始
include(get_stylesheet_directory() . '/views/clinic_casette/'.$atts['view'].'.php');
return ob_get_clean(); // バッファの内容を取得し、バッファを消去
}
add_shortcode('show_clinic_db', 'show_clinic_db_shortcode');