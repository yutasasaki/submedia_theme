<?php
function my_custom_featured_image_output($html, $post_id, $post_thumbnail_id, $size, $attr)
{
  // 管理画面でないことを確認し、投稿タイプが 'post' であり、かつ単一投稿ページであることを確認
  if (!is_admin() && is_singular('post') && in_the_loop() && is_main_query()) {
    // 現在のテンプレートファイルが single.php であることを確認
    if (is_single() && basename(get_page_template()) === 'single.php') {
      $pr_tag = '<p class="pr_content">本コンテンツは当メディアが独自の基準に基づき制作していますが、一部提携先から送客手数料を受領しています。</p>';
      return $pr_tag . $html; // PRタグをアイキャッチの前に追加
    }
  }
  return $html; // 管理画面または単一投稿ページでない場合は元のHTMLをそのまま返す
}
add_filter('post_thumbnail_html', 'my_custom_featured_image_output', 10, 5);
