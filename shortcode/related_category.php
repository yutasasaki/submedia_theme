<?php
function related_categories_shortcode($atts)
{
    // ショートコードの属性を解析
    $attributes = shortcode_atts(array(
        'area' => '同じ地域',
        'slug' => '', // 親カテゴリのスラッグを指定
    ), $atts);

    // スラッグが指定されていない場合はエラーを返す
    if (empty($attributes['slug'])) {
        return '親カテゴリのスラッグが指定されていません。';
    }

    // 親カテゴリのタームを取得
    $parent_term = get_term_by('slug', $attributes['slug'], 'related_category');
    if (!$parent_term) {
        return '指定されたスラッグに対応するカテゴリが見つかりません。';
    }

    // 子カテゴリを取得
    $args = array(
        'taxonomy' => 'related_category',
        'parent'   => $parent_term->term_id,
        'orderby'  => 'term_order',
        'order'    => 'ASC',
        'hide_empty' => false, // 空のタームも含めて取得
    );

    $categories = get_terms($args);

    // 子カテゴリが見つからない場合の処理
    if (empty($categories)) {
        return '子カテゴリが見つかりません。';
    }

    // 出力用HTMLを構築
    $output = '<div class="sm_category_wrapper">
    <div class="sm_category_header">
        <p><strong>' . esc_html($attributes['area']) . '周辺のおすすめの矯正歯科</strong>はこちら</p>
        <img class="caret-circle-down" src="' . esc_url(get_stylesheet_directory_uri() . '/images/icon/circle_down.png') . '">
    </div>
    <div class="sm_categories" style="display:none;">';

    foreach ($categories as $category) {
        // 記事がない場合はカテゴリリンクを使用
        $link = get_term_link($category);

        $output .= '<a class="sm_category" href="' . esc_url($link) . '">
        <span class="text-wrapper">' . esc_html($category->name) . '</span>
        <img class="caret-circle-down" src="' . esc_url(get_stylesheet_directory_uri() . '/images/icon/circle_right.png') . '">
        </a>';
    }

    $output .= '</div></div>';

    return $output;
}
add_shortcode('related_categories', 'related_categories_shortcode');