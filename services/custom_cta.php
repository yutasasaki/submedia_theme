<?php
function get_domain_from_url() {
    $current_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $parsed_url = parse_url($current_url);
    $host = $parsed_url['host'];

    // ここで、$host にドメイン名が格納されます。
    // 必要に応じてさらに加工することができます。
    return $host;
}
function generate_cta_url($clinic_cta_path) {
    if (empty($clinic_cta_path)) {
        return 'https://kyosei-guide.com/a/'; // $clinic_cta_path が空の場合はトップを返す。view側で別途分岐制御
    }

    $base_url = "https://kyosei-guide.com/a/c/";
    $detail_path = "/detail?";
    // URLクエリパラメーターを配列として定義
    $url_params = array(
        'm' => get_domain_from_url(),
        'a' => 'media'
    );

    // 配列からURLエンコードされたクエリ文字列を生成
    $url_query = http_build_query($url_params);

    // URLを組み立てる
    $url = $base_url . esc_html($clinic_cta_path) . $detail_path . $url_query;

    return $url;
}

