<?php
function submedia_system_register($wp_customize) {
// セクションの追加
$wp_customize->add_section('submedia_system', array(
  'title' => __('⚙️ システム設定', 'submedia_theme'),
  'description' => __('各種APIキーなどの設定を行います'),
  'panel' => 'submedia_settings',
  'priority' => 0,
));


$wp_customize->add_setting('google_place_api_key', array(
'default' => '',
));

// テキストフィールドのコントロールを追加
$wp_customize->add_control('google_place_api_key_control', array(
'label' => __('Google Places APIキー', 'submedia_theme'),
'section' => 'submedia_system',
'settings' => 'google_place_api_key',
'description' => __('地図の表示に必要なgoogle placeのapiキーを設定ください'),
'type' => 'text',
));

}
add_action('customize_register', 'submedia_system_register');