<?php
function submedia_colors_customizer($wp_customize)
{
  // 新しいセクションを追加: 記事色設定
  $wp_customize->add_section('submedia_article_colors', array(
    'title' => __('記事色設定', 'submedia_theme'),
    'priority' => 31,
  ));

  // 色設定の追加
  // 例: メインカラー
}
add_action('customize_register', 'submedia_colors_customizer');
