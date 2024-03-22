<?php
function show_shindan_shortcode($atts)
{
  // ショートコード属性を解析
  $atts = shortcode_atts(array(
  ), $atts);


  // ビューファイルの読み込み、$clinics配列を渡す
  ob_start(); // 出力バッファリング開始
  include(get_stylesheet_directory() . '/views/shindan/index.php');
  return ob_get_clean(); // バッファの内容を取得し、バッファを消去
}
add_shortcode('show_shindan', 'show_shindan_shortcode');
