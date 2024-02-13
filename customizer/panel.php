<?php
function submedia_customize_register($wp_customize)
{
  // パネルの追加
  $wp_customize->add_panel('submedia_settings', array(
    'title' => __('🦷 サブメディア設定', 'submedia_theme'),
    'description' => 'サブディレクトリメディアの設定を行います。', // オプション: パネルの説明
    'priority' => 2, // オプション: パネルの表示順序
  ));
}
add_action('customize_register', 'submedia_customize_register');
