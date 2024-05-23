<?php
function my_custom_featured_image_output($html, $post_id, $post_thumbnail_id, $size, $attr)
{
  $pr_tag = '<p class="pr_content">本コンテンツは当メディアが独自の基準に基づき制作していますが、一部提携先から送客手数料を受領しています。</p>';
  return $pr_tag . $html; // PRタグをアイキャッチの前に追加
}
add_filter('post_thumbnail_html', 'my_custom_featured_image_output', 10, 5);
