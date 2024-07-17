<?php
function fetch_api_clinic($request) {
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
      // $responseを<div id="dc_response">タグで囲む
      return '<section id="dc_response"><div id="dc_response_'.$request["slug"].'" >' . $response . '</div></section>';
    } else {
      return '<section id="dc_response"><div id="dc_response'.$request["slug"].'" >APIからデータを取得できませんでした。</div></section>'; // エラーメッセージを返す
    }
}
add_shortcode('api_clinic', 'fetch_api_clinic');

function fetch_api_prefecture($request) {
    // parameter check
    $is_reservable = $request['is_reservable'] ?? false;
    // APIのURLを設定
    $api_url = 'https://kyosei-guide.co.jp/a/api/prefecture/'.$request["slug"] ?? '' . '?is_reservable='.$is_reservable; // APIのURLに適宜置き換えてください
    // cURLを使用してAPIからデータを取得
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    if ($response) {
      // $responseを<div id="dc_response" >タグで囲む
      return '<section id="dc_response"><div id="dc_response'.$request["slug"].'" >' . $response . '</div></section>';
    } else {
      return '<section id="dc_response"><div id="dc_response'.$request["slug"].'" >APIからデータを取得できませんでした。</div></section>'; // エラーメッセージを返す
    }
}
add_shortcode('api_prefecture', 'fetch_api_prefecture');