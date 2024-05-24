<?php
// OGP用のメタタグを出力する関数
function add_ogp_meta_tags() {
  if (is_single() || is_page()) { // 投稿ページや固定ページの場合
    global $post;
    setup_postdata($post);

    // OGPの基本情報
    echo '<meta property="og:title" content="' . esc_attr(get_the_title()) . '" />' . "\n";
    echo '<meta property="og:description" content="' . esc_attr(get_the_excerpt()) . '" />' . "\n";
    echo '<meta property="og:url" content="' . esc_url(get_permalink()) . '" />' . "\n";
    echo '<meta property="og:type" content="article" />' . "\n";

    // OGP用の画像
    if (has_post_thumbnail()) {
      echo '<meta property="og:image" content="' . esc_url(get_the_post_thumbnail_url()) . '" />' . "\n";
    } else {
      echo '<meta property="og:image" content="/images/ogp.webp" />' . "\n"; // デフォルトの画像URLを指定
    }

    wp_reset_postdata();
  }
}
// wp_headアクションにフックを追加
add_action('wp_head', 'add_ogp_meta_tags');
