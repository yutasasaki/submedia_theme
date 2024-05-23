<?php
add_shortcode("blogcard", "blogcard_shortcode");

// ブログカードを作成するショートコードを作成
function blogcard_shortcode($atts) {
  // ショートコード挿入時に引数として渡す"URL"から投稿IDを取得
  $url = $atts['url'];
  $id = url_to_postid($url);

  // 投稿IDから各種データを取得
  $title = esc_html(get_the_title($id));
  $exerpt = get_post_field('post_excerpt', $id);
  //抜粋記入欄が空欄の場合は、本文の先頭から100文字を取得
  if(empty($exerpt)) {
    $exerpt = wp_trim_words(get_post_field('post_content', $id), 100);
  }
  $img = wp_get_attachment_image_src(get_post_thumbnail_id($id));
  $img_link = esc_html($img[0]);
  $date = esc_html(get_the_date('Y.m.d', $id));

  // ブログカードとして挿入するHTMLタグを$cardに代入
  $card = '<div">
    <a href="'.$url.'">
      <div style="background: url('.$img_link.') no-repeat center/cover"></div>
      <div>
        <p>'.$title.'</p>
        <p>'.$exerpt.'</p>
        <p>'.$date.'</p>
      </div>
    </a>
  </div>';

  return $card;
}