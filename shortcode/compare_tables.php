<?php
function show_compare_shortcode($atts)
{
  // ショートコード属性を解析
  $atts = shortcode_atts(array(
    
  ), $atts);

  // ビューファイルの読み込み
  ob_start(); // 出力バッファリング開始
  include(get_stylesheet_directory() . '/views/compare_table.php');
  return ob_get_clean(); // バッファの内容を取得し、バッファを消去
}
add_shortcode('compare_table', 'show_compare_shortcode');
