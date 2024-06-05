<?php

function parent_categories_shortcode()
{
  $args = array(
    'parent'   => '0',
    'orderby'  => 'term_order',
    'order'    => 'ASC',
    'exclude'  => '1', // 必要に応じて除外するカテゴリのIDを指定
  );
  $categories = get_categories($args);
  $output = '<div class="sm_category_wrapper">
  <div class="sm_category_header closed">
    <h3><strong>全国にあるおすすめの矯正歯科</strong>はこちら</h3>
    <img class="caret-circle-down" src="'. esc_url(get_stylesheet_directory_uri() . '/images/icon/circle_down.png') .'">
  </div>
<div class="sm_categories">';

  foreach ($categories as $category) {
    // カテゴリの最新記事を取得
    $posts = get_posts(array(
      'category'        => $category->term_id,
      'numberposts'     => 1, // 最新の1記事のみ取得
    ));

    // 最新記事があればリンクを設定、なければカテゴリページのリンクを設定
    $link = !empty($posts) ? get_permalink($posts[0]->ID) : get_category_link($category->term_id);

    $output .= '<a class="sm_category" href="' . $link . '">
    <span class="text-wrapper">' . $category->name . '</span>
    <img class="caret-circle-down" src="' . esc_url(get_stylesheet_directory_uri() . '/images/icon/circle_right.png') . '">
</a>';
  }
  $output .= '</div>
  </div>';

  return $output;
}
add_shortcode('parent_categories', 'parent_categories_shortcode');


function sibling_categories_shortcode($atts)
{
  global $post;
  // ショートコードの属性を解析
  $attributes = shortcode_atts(array(
    'area' => '同じ地域', // デフォルト値
    'exclude'  => '1', // 必要に応じて除外するカテゴリのIDを指定
  ), $atts);

  // 投稿が属するカテゴリを取得
  $categories = get_the_category($post->ID);
  if (empty($categories)) {
    // カテゴリが割り当てられていない場合は、メッセージを返す
    return 'この投稿にはカテゴリが割り当てられていません。';
  }

  // 最初のカテゴリの親IDを取得
  $parent_id = $categories[0]->category_parent;
  if ($parent_id == 0) {
    // 最初のカテゴリが親カテゴリの場合、それを使用
    $parent_id = $categories[0]->term_id;
  }

  $args = array(
    'parent' => $parent_id,
    'orderby' => 'term_order',
    'order' => 'ASC',
    // 親カテゴリ自体を除外するためには、そのIDを'exclude'に含める
    'exclude' => $parent_id,
  );

  $categories = get_categories($args);
  $output = '<div class="sm_category_wrapper">
  <div class="sm_category_header">
    <p><strong>' . $attributes['area'] . '周辺のおすすめの矯正歯科</strong>はこちら</p>
    <img class="caret-circle-down" src="' . esc_url(get_stylesheet_directory_uri() . '/images/icon/circle_down.png') . '">
    </div>
    <div class="sm_categories">';


  foreach ($categories as $category) {
    // カテゴリの最新記事を取得
    $posts = get_posts(array(
      'category' => $category->term_id,
      'numberposts' => 1, // 最新の1記事のみ取得
    ));

    // 最新記事のURLを取得
    $post_url = !empty($posts) ? get_permalink($posts[0]->ID) : get_category_link($category->term_id);

    $output .= '<a class="sm_category" href="' . $post_url . '"><span class="text-wrapper">' . $category->name . '</span><img class="caret-circle-down" src="' . esc_url(get_stylesheet_directory_uri() . '/images/icon/circle_right.png') . '"></a>';
  }

  $output .= '</div></div>';

  return $output;
}

add_shortcode('sibling_categories', 'sibling_categories_shortcode');
