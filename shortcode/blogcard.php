<?php

require_once __DIR__ . '/../services/opengraph.php';

// ショートコードを追加
add_shortcode("blogcard", "show_blogcard");

// リンクカードを表示する関数
function show_blogcard($atts)
{
  // ショートコード引数の初期設定
  extract(shortcode_atts(array(
    'url' => "",
    'title' => "",
    'excerpt' => "",
    'nofollow' => "false"  // nofollow引数を追加
  ), $atts));

  // OGP情報を取得
  $graph = OpenGraph::fetch($url);

  // OGPタグからタイトルと画像URLを取得
  $Link_title = !empty($graph->title) ? esc_html($graph->title) : esc_html($title);
  $src = !empty($graph->image) ? esc_url($graph->image) : '';

  // OGPタグからdescriptionを取得し、指定されたexcerptがあればそれを使用
  $Link_description = !empty($graph->description) ? wp_trim_words($graph->description, 60, '…') : esc_html($excerpt);
  if (!empty($excerpt)) {
    $Link_description = esc_html($excerpt);
  }

  // 画像を背景画像として設定するHTMLを生成
  $xLink_img_style = !empty($src) ? 'style="background-image: url(' . $src . ');"' : '';

  // nofollow属性の設定
  $nofollow_attr = ($nofollow === "true") ? 'rel="nofollow"' : '';

  // リンクカードのHTMLを生成
  $sc_Linkcard = '
  <div class="dc_blogcard">
    <a href="' . esc_url($url) . '" target="_blank" ' . $nofollow_attr . '>
      <div class="blogcard_thumbnail" ' . $xLink_img_style . '></div>
      <div class="blogcard_content">
        <p class="blogcard_title">' . $Link_title . '</p>
        <p class="blogcard_excerpt">' . $Link_description . '</p>
        <div class="blogcard_link">' . esc_url($url) . '</div>
      </div>
    </a>
  </div>';

  return $sc_Linkcard;
}

// ショートコードを追加
add_shortcode("linkcard", "show_linkcard");

// リンクカードを表示する関数
function show_linkcard($atts)
{
  // ショートコード引数の初期設定
  extract(shortcode_atts(array(
    'url' => "",
    'title' => "",
    'excerpt' => "",
    'nofollow' => "false"  // nofollow引数を追加
  ), $atts));

  // OGP情報を取得
  $graph = OpenGraph::fetch($url);

  // OGPタグからタイトルと画像URLを取得
  $Link_title = !empty($graph->title) ? esc_html($graph->title) : esc_html($title);
  $src = !empty($graph->image) ? esc_url($graph->image) : '';

  // OGPタグからdescriptionを取得し、指定されたexcerptがあればそれを使用
  $Link_description = !empty($graph->description) ? wp_trim_words($graph->description, 60, '…') : esc_html($excerpt);
  if (!empty($excerpt)) {
    $Link_description = esc_html($excerpt);
  }

  // 画像を背景画像として設定するHTMLを生成
  $xLink_img_style = !empty($src) ? 'style="background-image: url(' . $src . ');"' : '';

  // nofollow属性の設定
  $nofollow_attr = ($nofollow === "true") ? 'rel="nofollow"' : '';

  // リンクカードのHTMLを生成
  $sc_Linkcard = '
  <div class="linkcard_wrapper">
    <div class="dc_linkcard">
      <p class="linkcard_label">あわせて読みたい</p>
      <a href="' . esc_url($url) . '" target="_blank" ' . $nofollow_attr . '>
        <div class="linkcard_thumbnail" ' . $xLink_img_style . '></div>
        <p class="linkcard_title">' . $Link_title . '</p>
      </a>
    </div>
  </div>';

  return $sc_Linkcard;
}
?>
