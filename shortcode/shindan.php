<?php
function show_shindan_shortcode($atts)
{
  // ショートコード属性を解析
  $atts = shortcode_atts(array(
    'type' => 'default'
  ), $atts);

  // 出力バッファリング開始
  ob_start();

  // typeに応じて異なるviewファイルを読み込む
  switch ($atts['type']) {
    case 'prototype':
      include(get_stylesheet_directory() . '/views/shindan/prototype.php');
      break;
    case 'leon':
      include(get_stylesheet_directory() . '/views/shindan/leon.php');
      break;
    case 'whitening':
      include(get_stylesheet_directory() . '/views/shindan/whitening.php');
      break;
    case 'ohmyteeth':
      include(get_stylesheet_directory() . '/views/shindan/ohmyteeth.php');
      break;
    default:
      include(get_stylesheet_directory() . '/views/shindan/default.php');
      break;
  }

  return ob_get_clean(); // バッファの内容を取得し、バッファを消去
}
add_shortcode('show_shindan', 'show_shindan_shortcode');
