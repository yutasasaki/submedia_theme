<?php 
function show_intro_shortcode($atts, $view) {
    // ショートコード属性を解析
    $atts = shortcode_atts(array(
        'area' => '', // 地域名
        'compare' => '', // 比較ブランド
    ), $atts);

    // ビューファイルの読み込み
    ob_start(); // 出力バッファリング開始
    include(get_stylesheet_directory() . '/views/intro/' . $view . '.php');
    return ob_get_clean(); // バッファの内容を取得し、バッファを消去
}

function show_intro_area_shortcode($atts) {
    return show_intro_shortcode($atts, 'area');
}
add_shortcode('show_intro_area', 'show_intro_area_shortcode');

function show_intro_kireilign_shortcode($atts) {
    return show_intro_shortcode($atts, 'kireilign');
}
add_shortcode('show_intro_kireilign', 'show_intro_kireilign_shortcode');

function show_intro_kireilign_v2_shortcode($atts) {
    return show_intro_shortcode($atts, 'kireilign_v2');
}
add_shortcode('show_intro_kireilign_v2', 'show_intro_kireilign_v2_shortcode');

function show_intro_kireilign_v3_shortcode($atts)
{
  return show_intro_shortcode($atts, 'kireilign_v3');
}
add_shortcode('show_intro_kireilign_v3', 'show_intro_kireilign_v3_shortcode');

function show_dentalguide_intro_shortcode($atts)
{
  return show_intro_shortcode($atts, 'dentalguide_intro');
}
add_shortcode('show_dentalguide_intro', 'show_dentalguide_intro_shortcode');

