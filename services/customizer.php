<?php
function submedia_common_customize_register($wp_customize)
{
  // 新しいセクションを追加
  $wp_customize->add_section('submedia_common', array(
    'title' => __('サブメディア共通設定', 'mytheme'),
    'priority' => 30,
  ));

  // 解説者アイコン
  $wp_customize->add_setting('sm_intro_char_icon', array(
    'default'     => esc_url(get_stylesheet_directory_uri() . '/images/customize/kaisetu.webp'),
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sm_intro_char_icon_control', array(
    'label'    => __('解説者アイコンをアップロード', 'mytheme'),
    'section'  => 'submedia_common',
    'settings' => 'sm_intro_char_icon',
  )));

  // 複数のマウスピース画像を追加
  $wp_customize->add_setting('sm_intro_image_1', array(
    'default'     => esc_url(get_stylesheet_directory_uri() . '/images/customize/mouthpieces_image.webp'),
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sm_intro_image_1_control', array(
    'label'    => __('複数のマウスピース画像をアップロード', 'mytheme'),
    'section'  => 'submedia_common',
    'settings' => 'sm_intro_image_1',
  )));

  // 悩みアイコン
  // sm_intro_nayami_icon
  $wp_customize->add_setting('sm_intro_nayami_icon', array(
    'default'     => esc_url(get_stylesheet_directory_uri() . '/images/customize/nayami.webp'),
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sm_intro_nayami_icon_control', array(
    'label'    => __('悩みアイコンをアップロード', 'mytheme'),
    'section'  => 'submedia_common',
    'settings' => 'sm_intro_nayami_icon',
  )));

  // 軽度中度チャート画像
  // get_theme_mod('sm_keido_chart'
  $wp_customize->add_setting('sm_keido_chart', array(
    'default'     => esc_url(get_stylesheet_directory_uri() . '/images/intro/chart_light_middle.webp'),
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sm_keido_chart_control', array(
    'label'    => __('軽度中度チャート画像をアップロード', 'mytheme'),
    'section'  => 'submedia_common',
    'settings' => 'sm_keido_chart',
  )));

  // 定期的な通院画像
  // get_theme_mod('sm_intro_tuuin'
  $wp_customize->add_setting('sm_intro_tuuin', array(
    'default'     => esc_url(get_stylesheet_directory_uri() . '/images/intro/doctor_check.webp'),
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sm_intro_tuuin_control', array(
    'label'    => __('定期的な通院画像をアップロード', 'mytheme'),
    'section'  => 'submedia_common',
    'settings' => 'sm_intro_tuuin',
  )));

  // 精密検査の画像
  // get_theme_mod('sm_intro_seimitsu'
  $wp_customize->add_setting('sm_intro_seimitsu', array(
    'default'     => esc_url(get_stylesheet_directory_uri() . '/images/intro/cepharo_xray.webp'),
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sm_intro_seimitsu_control', array(
    'label'    => __('精密検査の画像をアップロード', 'mytheme'),
    'section'  => 'submedia_common',
    'settings' => 'sm_intro_seimitsu',
  )));



}

add_action('customize_register', 'submedia_common_customize_register');