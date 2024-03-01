<?php
function my_custom_featured_image_output($html, $post_id, $post_thumbnail_id, $size, $attr)
{
  $pr_tag = '<p style="margin: 0; text-align: right;padding:0 10px 10px 0;" class="text-right text-xs text-gray">PR</p>';
  return $pr_tag . $html; // PRタグをアイキャッチの前に追加
}
add_filter('post_thumbnail_html', 'my_custom_featured_image_output', 10, 5);
