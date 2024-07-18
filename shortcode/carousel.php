<?php
function show_carousel_check_shortcode($atts)
{
  // ショートコード属性を解析
  $atts = shortcode_atts(array(
  ), $atts);


  // ビューファイルの読み込み、$clinics配列を渡す
  ob_start(); // 出力バッファリング開始
  include(get_stylesheet_directory() . '/views/components/kireilign/carousel_check.php');
  
  return ob_get_clean(); // バッファの内容を取得し、バッファを消去
}
add_shortcode('show_carousel_check', 'show_carousel_check_shortcode');

function show_carousel_first_shortcode($atts)
{
  // ショートコード属性を解析
  $atts = shortcode_atts(array(), $atts);


  // ビューファイルの読み込み、$clinics配列を渡す
  ob_start(); // 出力バッファリング開始
  include(get_stylesheet_directory() . '/views/components/kireilign/carousel_first.php');

  return ob_get_clean(); // バッファの内容を取得し、バッファを消去
}
add_shortcode('show_carousel_first', 'show_carousel_first_shortcode');


function show_carousel_deppa_shortcode($atts)
{
  // ショートコード属性を解析
  $atts = shortcode_atts(array(), $atts);


  // ビューファイルの読み込み、$clinics配列を渡す
  ob_start(); // 出力バッファリング開始
  include(get_stylesheet_directory() . '/views/components/kireilign/carousel_deppa.php');

  return ob_get_clean(); // バッファの内容を取得し、バッファを消去
}
add_shortcode('show_carousel_deppa', 'show_carousel_deppa_shortcode');
