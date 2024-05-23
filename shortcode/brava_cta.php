<?php
function show_brava_cta_shortcode($atts)
{
  // ビューファイルの読み込み、$clinics配列を渡す
  ob_start(); // 出力バッファリング開始
  include(get_stylesheet_directory() . '/views/components/cta/brava.php');
  return ob_get_clean(); // バッファの内容を取得し、バッファを消去
}
add_shortcode('show_brava_cta', 'show_brava_cta_shortcode');
