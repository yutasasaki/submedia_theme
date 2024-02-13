<?php
function submedia_clinic_customizer($wp_customize)
{
  // 新しいセクションを追加
  $wp_customize->add_section('submedia_clinic', array(
    'title' => __('🏥 クリニックカセット設定', 'mytheme'),
    'priority' => 1,
    'panel' => 'submedia_settings',
  ));

  // 解説者アイコン
  $wp_customize->add_setting('sm_review_icon', array(
    'default'     => esc_url(get_stylesheet_directory_uri() . '/images/customize/kaisetu.webp'),
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sm_review_icon_control', array(
    'label'    => __('クリニック口コミアイコンをアップロード', 'mytheme'),
    'description' => __('クリニック口コミのアイコンを設定ください'),
    'section'  => 'submedia_clinic',
    'settings' => 'sm_review_icon',
  )));

  
}
add_action('customize_register', 'submedia_clinic_customizer');