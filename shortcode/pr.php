<?php
function my_custom_content_output($content)
{
  // 管理画面でないことを確認し、投稿タイプが 'post' であり、かつ単一投稿ページであることを確認
  if (!is_admin() && is_singular('post')) {
    $pr_tag = '<p class="pr_content">本コンテンツは当メディアが独自の基準に基づき制作していますが、一部提携先から送客手数料を受領しています。</p>';
    return $pr_tag . $content; // PRタグをコンテンツの前に追加
  }
  return $content; // 管理画面または単一投稿ページでない場合はコンテンツをそのまま返す
}
add_filter('the_content', 'my_custom_content_output');
