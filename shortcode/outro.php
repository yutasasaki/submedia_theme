<?php 
function show_outro_shortcode($atts, $view) {
    // ショートコード属性を解析
    $atts = shortcode_atts(array(
        
    ), $atts);

    // ビューファイルの読み込み
    ob_start(); // 出力バッファリング開始
    include(get_stylesheet_directory() . '/views/outro/' . $view . '.php');
    return ob_get_clean(); // バッファの内容を取得し、バッファを消去
}

function show_outro_area_shortcode($atts) {
    return show_outro_shortcode($atts, 'area');
}
add_shortcode('show_outro_area', 'show_outro_area_shortcode');

function show_outro_kireilign_v2_shortcode($atts) {
    return show_outro_shortcode($atts, 'kireilign_v2');
}
add_shortcode('show_outro_kireilign_v2', 'show_outro_kireilign_v2_shortcode');
