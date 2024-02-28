<?php
function parent_categories_shortcode() {
$args = array(
  'parent' => '0',
  'orderby' => 'term_order',
  'order' => 'ASC',
  'exclude' => '1',
  //'include' => '4,8,12'
);
$categories = get_categories($args);
$output = '
<div class="sm_category_wrapper">
<h2 class="sm_category_header">全国にあるおすすめのクリニックはこちら</h2>
<div class="sm_categories">';
  foreach ($categories as $category) {
  $output .= '

<a class="inline-block" href="' . get_category_link($category->term_id) . '">
  <button class="sm_category">
    <span class="text-wrapper">'. $category->name . '</span>
    <img class="caret-circle-right" src="'. esc_url(get_theme_mod('sm_intro_image_1', get_stylesheet_directory_uri() . '/images/icon/circle_right.png')) . '">
  </button>
</a>';
  }  
  $output .= '</div>
  </div>';

return $output;
}
add_shortcode('parent_categories', 'parent_categories_shortcode');

function sibling_categories_shortcode($atts)
{
  // ショートコードの属性を解析
  $attributes = shortcode_atts(array(
    'area' => '同じ地域', // デフォルト値は空文字列
  ), $atts);
  // 現在のカテゴリIDを取得
  $current_category = get_queried_object();
  $parent_id = $current_category->category_parent;
  $area_keyword = $attributes['area'];

  $args = array(
    'parent' => $parent_id, // 親カテゴリIDを使用
    'orderby' => 'term_order',
    'order' => 'ASC',
  );

  $categories = get_categories($args);
  $output = '<div class="sm_category_wrapper">
<h2 class="sm_category_header">'.$area_keyword.'のおすすめクリニックはこちら</h2>
<div class="sm_categories">';

  foreach ($categories as $category) {
    // 現在のカテゴリをリストから除外
    if ($category->term_id != $current_category->term_id) {
      $output .= '<a class="inline-block" href="' . get_category_link($category->term_id) . '">
  <button class="sm_category">
    <span class="text-wrapper">' . $category->name . '</span>
    <img class="caret-circle-right" src="' . esc_url(get_theme_mod('sm_intro_image_1', get_stylesheet_directory_uri() . '/images/icon/circle_right.png')) . '">
  </button>
</a>';
    }
  }

  $output .= '</div>
</div>';

  return $output;
}

add_shortcode('sibling_categories', 'sibling_categories_shortcode');
