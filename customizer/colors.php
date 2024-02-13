<?php
function submedia_colors_customizer($wp_customize)
{
  $wp_customize->add_section('submedia_article_colors', array(
    'title' => __('🎨 記事配色設定', 'submedia_theme'),
    'description' => __('サイトテーマの配色設定を行います。色設定タブからもテーマ配色が適用されますが、一部セクションで追加のサイトテーマ色を使用することがあるため、こちらも併せて設定ください。'),
    'panel' => 'submedia_settings', // このセクションをデザイン設定パネルに割り当てる
    'priority' => 2,
  ));

  // メインカラーの設定を追加
  $wp_customize->add_setting('submedia_main_color_setting', array(
    'default' => '#ff0000',
    'sanitize_callback' => 'sanitize_hex_color',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'submedia_main_color_setting', array(
    'label' => __('メインカラー', 'submedia_theme'),
    'section' => 'submedia_article_colors',
    'settings' => 'submedia_main_color_setting',
  )));


  $wp_customize->add_setting('submedia_light_color_setting', array(
    'default' => '#ff5e5e',
    'sanitize_callback' => 'sanitize_hex_color',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'submedia_light_color', array(
    'label' => __('薄めのメインカラー', 'submedia_theme'),
    'section' => 'submedia_article_colors',
    'settings' => 'submedia_light_color_setting',
  )));


  $wp_customize->add_setting('submedia_main_text_color_setting', array(
    'default' => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'submedia_main_text_color', array(
    'label' => __('メインカラー上のテキスト色', 'submedia_theme'),
    'section' => 'submedia_article_colors',
    'settings' => 'submedia_main_text_color_setting',
  )));



  $wp_customize->add_setting('submedia_light_text_color_setting', array(
    'default' => '#555',
    'sanitize_callback' => 'sanitize_hex_color',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'submedia_light_text_color', array(
    'label' => __('薄めのメインカラー上のテキスト色', 'submedia_theme'),
    'section' => 'submedia_article_colors',
    'settings' => 'submedia_light_text_color_setting',
  )));

}
add_action('customize_register', 'submedia_colors_customizer');
