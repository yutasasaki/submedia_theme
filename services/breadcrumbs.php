<?php
if (!function_exists('breadcrumb')) {
  function breadcrumb() {
    if ( is_home() || is_admin() ) return; // トップページ、管理画面では表示しない
    $str = '<nav id="breadcrumb" class="breadcrumb"><ul itemscope itemtype="http://schema.org/BreadcrumbList">';
    $position = 1; // ポジションのカウンターを初期化

    /* 共通のホームのパンくず */
    $str .= sng_bc_item(get_bloginfo('name'), home_url(), $position++);
    if ( is_category() ) {
      $str .= sng_get_bc_category($position++);
    } elseif ( is_tag() ) {
      $str .= '<li><i class="fa fa-tag"></i> タグ</li>';
    } elseif ( is_date() ) {
      $str .= sng_get_bc_date($position++);
    } elseif ( is_author() ) {
      $str .= '<li>著者</li>';
    } elseif ( is_page() ) {
      $str .= sng_get_bc_page($position++);
    } elseif ( is_single() ) {
      $str .= sng_get_bc_single($position); // ここで$positionをインクリメント
      $position++;
      $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
      $str .= '<a href="' . esc_url( get_permalink() ) . '" itemprop="item">';
      $str .= '<span itemprop="name">' . get_the_title() . '</span>';
      $str .= '</a>';
      $str .= '<meta itemprop="position" content="' . $position . '" />'; // ここで正しいpositionを設定
      $str .= '</li>';
    } else {
      $str .= '<li>'.wp_title('', false).'</li>';
    }
    $str .= '</ul></nav>';
    echo $str;
  }
}
