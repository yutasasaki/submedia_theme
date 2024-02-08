<?php
function submedia_colors_customizer($wp_customize)
{
  $wp_customize->add_section('submedia_article_colors', array(
    'title' => __('記事色設定', 'submedia_theme'),
    'priority' => 31,
  ));

  // メインカラーの設定を追加
  $wp_customize->add_setting('submedia_main_color', array(
    'default' => '#ff0000',
    'sanitize_callback' => 'sanitize_hex_color',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'submedia_main_color', array(
    'label' => __('メインカラー', 'submedia_theme'),
    'section' => 'submedia_article_colors',
    'settings' => 'submedia_main_color',
  )));
}
add_action('customize_register', 'submedia_colors_customizer');
