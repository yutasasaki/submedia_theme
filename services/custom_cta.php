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


function generate_click_cta_url()
{

  // ACFからcustom_ctaフィールドの値を取得
  $custom_cta = get_field('custom_cta');

  // custom_ctaが設定されている場合、その値をURLとして返す
  if (!empty($custom_cta)) {
    return esc_url($custom_cta);
  }

  $cta_url = esc_url(get_theme_mod('click_cta_url_setting'));
  if (empty($cta_url)) {
    return 'https://kyosei-guide.com/a/?'; // $cta_url が空の場合はトップを返す。view側で別途分岐制御
  }
  $url_params = array(
    // 'k' => esc_html(get_theme_mod('submedia_keyword_code_setting', '')),
    'ads' => 'a-'.esc_html(get_theme_mod('submedia_agent_code_setting', '')),
  );

  // 配列からURLエンコードされたクエリ文字列を生成
  $url_query = http_build_query($url_params);

  // URLを組み立てる
  $url = $cta_url . '?' . $url_query;

  return $url;
}

function get_custom_cta_href($original_cta)
{
  // ACFのcustom_ctaフィールドから値を取得
  $custom_cta = get_field('custom_cta');

  // custom_ctaが空でなければその値を使用し、空であればデフォルトのURLを使用
  if (!empty($custom_cta)) {
    return $custom_cta; // ACFフィールドの値がある場合
  } else {
    return $original_cta; // デフォルトのURL
  }
}
