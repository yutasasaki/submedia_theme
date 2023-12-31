<?php
function show_intro_area_shortcode($atts) {
    // ショートコード属性を解析
    $atts = shortcode_atts(array(
        'area' => '', // 地域名
    ), $atts);
    

    // ビューファイルの読み込み
    ob_start(); // 出力バッファリング開始
    include(get_stylesheet_directory() . '/views/intro/intro_area.php');
    return ob_get_clean(); // バッファの内容を取得し、バッファを消去
}
add_shortcode('show_intro_area', 'show_intro_area_shortcode');
