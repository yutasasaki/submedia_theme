<?php
function fetch_html_from_api($request) {
    // APIのURLを設定
    $api_url = 'https://kyosei-guide.co.jp/a/api/clinic/index/'.$request["slug"] ?? ''; // APIのURLに適宜置き換えてください
    // cURLを使用してAPIからデータを取得
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    if ($response) {
        return $response;
    } else {
        return 'APIからデータを取得できませんでした。'; // エラーメッセージを返す
    }
}
add_shortcode('fetch_api_html', 'fetch_html_from_api');
