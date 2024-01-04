<?php
function show_outro_area_shortcode($atts) {
    // ショートコード属性がある場合追加
    // $atts = shortcode_atts(array(
    //      'area' => '', // 
    // ), $atts);
    

    // ビューファイルの読み込み
    ob_start(); // 出力バッファリング開始
    include(get_stylesheet_directory() . '/views/outro/outro_area.php');
    return ob_get_clean(); // バッファの内容を取得し、バッファを消去
}
add_shortcode('show_outro_area', 'show_outro_area_shortcode');
