<?php
function insert_toc($content)
{
  if (is_singular('post')) {
    $content = generate_toc($content);
  }
  return $content;
}
// 優先度を 9999 に設定
add_filter('the_content', 'insert_toc', 9999);

function generate_toc($content)
{
  // h2およびh3タグを検索する正規表現パターン
  $pattern = '/<h([23])([^>]*)>(.*?)<\/h[23]>/is';
  preg_match_all($pattern, $content, $matches);

  if (empty($matches[0])) {
    return $content; // h2およびh3タグがない場合はそのまま返す
  }

  $toc = '<div class="toc closed"><h2>目次 <img class="caret-circle-down" src="' . esc_url(get_stylesheet_directory_uri() . '/images/icon/circle_down.png') . '"></h2><ul>';
  foreach ($matches[0] as $key => $full_tag) {
    $tag = $matches[1][$key];
    $attributes = $matches[2][$key];
    $innerHTML = $matches[3][$key];
    $title = strip_tags($innerHTML); // タイトルからHTMLタグを除去

    // IDが既に振ってあるか確認
    if (preg_match('/id="([^"]+)"/', $attributes, $id_matches)) {
      $anchor = $id_matches[1];
    } else {
      // IDがない場合は自動生成
      $anchor = 'toc-' . $key;
      $new_tag = preg_replace('/<h' . $tag . '/', '<h' . $tag . ' id="' . $anchor . '"', $full_tag, 1);
      $content = str_replace($full_tag, $new_tag, $content);
    }

    $toc .= '<li class="toc-' . $tag . '"><a href="#' . $anchor . '">' . $title . '</a></li>';
  }
  $toc .= '</ul></div>';

  // 最初のh2タグの手前に目次を挿入
  $content = preg_replace('/<h2/i', $toc . '<h2', $content, 1);

  return $content;
}
