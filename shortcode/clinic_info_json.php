<?php

function show_clinic_json_shortcode($atts) {
// ショートコード属性を解析
$atts = shortcode_atts(array(
'uuid' => '', // UUID(ファイル名)
'media_id' => '1', // おすすめテキストmedia_id
'cta_url' => '', // CTAのURL
), $atts);


// jsonを読み込む
$info = json_decode(file_get_contents(WP_CONTENT_DIR . '/data/clinic/info/' . $atts['uuid'] . '.json'));
$all_recommend = json_decode(file_get_contents(WP_CONTENT_DIR . '/data/clinic/recommend/' . $atts['uuid'] . '.json'));
$recommend_media_type = 'media_' . $atts['media_id'];
$recommend = $all_recommend->$recommend_media_type ?? [];
if (!empty($atts['cta_url'])) {
  $cta_url = $atts['cta_url'];
} elseif (!empty($info->url)) {
  $cta_url = $info->url;
} else {
  $cta_url = '';
}
$clinic_data = (object) array(
    'info' => $info,
    'recommend' => $recommend,
    'cta_url' => $cta_url,
    'thumbnail' => (object) array(
      'filepath' => WP_CONTENT_DIR . '/data/clinic/thumbnail/' . $atts['uuid'] . '.webp',
      'url' => home_url('/wp-content/data/clinic/thumbnail/' . $atts['uuid'] . '.webp')
    )
  );

ob_start(); // 出力バッファリング開始
include(get_stylesheet_directory() . '/views/clinic_casette/type_json.php');
  return ob_get_clean(); // バッファの内容を取得し、バッファを消去
}
add_shortcode('show_clinic_json', 'show_clinic_json_shortcode');