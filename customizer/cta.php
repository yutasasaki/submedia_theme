<?php
function submedia_cta_register($wp_customize) {
// セクションの追加
$wp_customize->add_section('submedia_cta', array(
  'title' => __('💰 CTA設定', 'submedia_theme'),
  'description' => __('CTAボタンのリンク先・サイト固有の広告パラメーターの設定を行います。'),
  'panel' => 'submedia_settings',
  'priority' => 3,
));

// URL設定の追加
$wp_customize->add_setting('click_cta_url_setting', array(
'default' => '',
'sanitize_callback' => 'esc_url_raw', // URLのサニタイズに esc_url_raw を使用
));

// テキストフィールドのコントロールを追加
$wp_customize->add_control('click_cta_url_field', array(
'label' => __('キレイラインCTA先URL', 'submedia_theme'),
'section' => 'submedia_cta',
'settings' => 'click_cta_url_setting',
'description' => __('キレイラインのCTA導線に対してのURLを指定ください。以下で設定したクエリパラメーターは自動的に付与されます。'),
'type' => 'url', // HTML5のurlタイプを指定して、URL入力を促す
));


// テキスト設定の追加
$wp_customize->add_setting('submedia_keyword_code_setting', array(
  'default'           => '',
  'sanitize_callback' => 'sanitize_text_field', // テキストのサニタイズに sanitize_text_field を使用
));

// テキストフィールドのコントロールを追加
$wp_customize->add_control('submedia_keyword_code_field', array(
  'label'    => __('キーワードコード', 'submedia_theme'),
  'description' => __('サブメディアでは、KL側に流入メディア名を推測させることはビジネス上好ましくないため、
通し番号にてパラメーターを管理します。主にここで扱われるのはキーワードコードです。
キーワードコードは[](https://www.notion.so/202ceafcc1a047a6aed35853ae63ee04?pvs=21) 
こちらの各サイトごとにパラメーターを記入して管理ください'),
  'section'  => 'submedia_cta',
  'settings' => 'submedia_keyword_code_setting',
  'type'     => 'text',
));

// テキスト設定の追加
$wp_customize->add_setting('submedia_agent_code_setting', array(
  'default'           => 'dc',
  'sanitize_callback' => 'sanitize_text_field', // テキストのサニタイズに sanitize_text_field を使用
));

// テキストフィールドのコントロールを追加
$wp_customize->add_control('submedia_agent_code_field', array(
  'label'    => __('エージェントコード', 'submedia_theme'),
  'section'  => 'submedia_cta',
  'settings' => 'submedia_agent_code_setting',
  'description' => __('エージェントコードを設定します。通常デンタルコネクトではdcがパラメーターとして用いられます'),
  'type'     => 'text',
));

}
add_action('customize_register', 'submedia_cta_register');