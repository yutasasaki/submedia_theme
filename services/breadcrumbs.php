<?php
if (!function_exists('breadcrumb')) {
  function breadcrumb()
  {
    if ( is_home() || is_admin() ) return; // トップページ、管理画面では表示しない
    $str = '<nav id="breadcrumb" class="breadcrumb"><ul itemscope itemtype="http://schema.org/BreadcrumbList">';

    /*下記を追加する*/
    $str .= '<li><a href="https://' . $_SERVER['HTTP_HOST'] . '">ホーム</a></li>';

    $str .= sng_bc_item(get_bloginfo('name'), home_url(), "1"); // ホームのパンくずは共通して表示
    if ( is_category() ) {
      $str .= sng_get_bc_category();
    } elseif ( is_tag() ) {
      $str .= '<li><i class="fa fa-tag"></i> タグ</li>';
    } elseif ( is_date() ) {
      $str .= sng_get_bc_date();
    } elseif ( is_author() ) {
      $str .= '<li>著者</li>';
    } elseif ( is_page() ) {
      $str .= sng_get_bc_page();
    } elseif ( is_single() ) {
      $str .= sng_get_bc_single();
      $str .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
      $str .= '<a href="' . esc_url( get_permalink() ) . '" itemprop="item">';
      $str .= '<span itemprop="name">' . get_the_title() . '</span>';
      $str .= '</a>';
      $str .= '<meta itemprop="position" content="適切な位置情報" />';
      $str .= '</li>';
    } else {
      $str .= '<li>'.wp_title('', false).'</li>';
    }
    $str .= '</ul></nav>';
    echo $str;
  }
}