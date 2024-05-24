<?php
function my_custom_featured_image_output($html, $post_id, $post_thumbnail_id, $size, $attr)
{
  // 管理画面でないことを確認し、投稿タイプが 'post' であることを確認
  if (!is_admin() && get_post_type($post_id) === 'post') {
    $pr_tag = '<p class="pr_content">本コンテンツは当メディアが独自の基準に基づき制作していますが、一部提携先から送客手数料を受領しています。</p>';
    return $pr_tag . $html; // PRタグをアイキャッチの前に追加
  }
  return $html; // 管理画面または投稿タイプが 'post' でない場合は元のHTMLをそのまま返す
}
add_filter('post_thumbnail_html', 'my_custom_featured_image_output', 10, 5);
