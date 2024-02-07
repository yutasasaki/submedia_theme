<?php
function show_compare_shortcode($atts)
{
  // ショートコード属性を解析
  $atts = shortcode_atts(array(
    'table_id' => '', // TablePressテーブルのID
    'place_id' => '', // 検索したいPlaceId（カンマ区切り文字列）
  ), $atts);

  // PlaceIdをカンマで分割して配列に変換
  $searched_place_ids = explode(',', $atts['place_id']);

  // TablePressテーブルのデータを取得
  $table = TablePress::$model_table->load($atts['table_id']);
  if (is_wp_error($table)) {
    return '指定されたテーブルが見つかりません。';
  }

  // すべての見つかった行を格納する配列
  $clinics = [];

  // 各PlaceIdに対して処理
  foreach ($searched_place_ids as $searched_place_id) {
    // PlaceIdに対応する行を探索
    foreach ($table['data'] as $row) {
      if (isset($row[66]) && trim($row[66]) == trim($searched_place_id)) {
        // ClinicDataインスタンスを作成し、配列に追加
        $clinics[] = new ClinicData($row);
        break;
      }
    }
  }

  if (empty($clinics)) {
    return '指定されたPlaceIdに対応する行が見つかりません。';
  }

  // ビューファイルの読み込み、$clinics配列を渡す
  ob_start(); // 出力バッファリング開始
  include(get_stylesheet_directory() . '/views/clinic_casette/compare_table.php');
  return ob_get_clean(); // バッファの内容を取得し、バッファを消去
}
add_shortcode('show_compare_table', 'show_compare_shortcode');
