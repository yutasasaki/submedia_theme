<?php
function fetch_api_clinic($request)
{
  // キャッシュキーを生成
  $cacheKey = 'clinic_' . md5($request["slug"]);
  $cacheExpiration = 7 * 24 * 60 * 60; // 7日間

  // キャッシュが存在する場合は、それを返す
  $cachedResponse = get_transient($cacheKey);
  if ($cachedResponse) {
    return '<section id="dc_response"><div id="dc_response_' . $request["slug"] . '" >' . $cachedResponse . '</div></section>';
  }


  // 初期のローディングメッセージを返す
  $output = '<section id="dc_response"><div id="dc_response_' . $request["slug"] . '">読み込み中...</div></section>';

  // APIのURLを設定
  $api_url = 'https://kyosei-guide.co.jp/a/api/clinic/index/' . $request["slug"] ?? '';

  // cURLを使用してAPIからデータを取得
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $api_url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, false);
  $response = curl_exec($ch);
  curl_close($ch);


  if ($response) {
    // 成功した場合、レスポンスをキャッシュに保存
    set_transient($cacheKey, $response, $cacheExpiration);
    $output .= '<div id="dc_response_' . $request["slug"] . '" >' . $response . '</div>';
  } else {
    $output .= '<div id="dc_response_' . $request["slug"] . '" >APIからデータを取得できませんでした。</div>';
  }

  return $output;
}
add_shortcode('api_clinic', 'fetch_api_clinic');

function fetch_api_prefecture($request)
{
  // キャッシュキーを生成
  $cacheKey = 'prefecture_' . md5($request["slug"] . $request['is_reservable']);
  $cacheExpiration = 7 * 24 * 60 * 60; // 7日間

  // キャッシュが存在する場合は、それを返す
  $cachedResponse = get_transient($cacheKey);
  if ($cachedResponse) {
    return '<section id="dc_response"><div id="dc_response_' . $request["slug"] . '" >' . $cachedResponse . '</div></section>';
  }

  $is_reservable = $request['is_reservable'] ?? false;

  // 初期のローディングメッセージを返す
  $output = '<section id="dc_response"><div id="dc_response_' . $request["slug"] . '">読み込み中...</div></section>';

  // APIのURLを設定
  $api_url = 'https://kyosei-guide.co.jp/a/api/prefecture/' . $request["slug"] ?? '' . '?is_reservable=' . $is_reservable;

  // cURLを使用してAPIからデータを取得
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $api_url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, false);
  $response = curl_exec($ch);
  curl_close($ch);

  if ($response) {
    // 成功した場合、レスポンスをキャッシュに保存
    set_transient($cacheKey, $response, $cacheExpiration);
    $output .= '<div id="dc_response_' . $request["slug"] . '" >' . $response . '</div>';
  } else {
    $output .= '<div id="dc_response_' . $request["slug"] . '" >APIからデータを取得できませんでした。</div>';
  }

  return $output;
}
add_shortcode('api_prefecture', 'fetch_api_prefecture');