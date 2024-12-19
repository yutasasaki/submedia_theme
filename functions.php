<?php

function ns_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'ns_enqueue_styles' );
/**
 * services
 */
// ディレクトリ定義
$custom_functions_dir = 'services/';
// 呼び出すfunctionを指定
$custom_functions_files = array(
// 'plugins.php',
// 'acf-json.php',
  'css_loader.php',
  'js_loader.php',
  'custom_cta.php',
  'splide.php',
  'breadcrumbs.php',
  'rest_api.php',
  'cloudfront.php',
  'ogp.php',
  // 'toc.php',
  'swell_toc.php',
);
foreach ($custom_functions_files as $custom_functions_file) {
  locate_template($custom_functions_dir . $custom_functions_file, true);
}


/**
 * customizer
 */
$customizer_dir = 'customizer/';
// 呼び出すfunctionを指定
$customizer_files = array(
  'panel.php',
  'system.php',
  'intro.php',
  'clinic.php',
  'colors.php',
  'cta.php',
);
foreach ($customizer_files as $customizer_file) {
  locate_template($customizer_dir . $customizer_file, true);
}

/**
 * shortcodes
 */
$custom_shortcode_dir = 'shortcode/';
$custom_shortcode_files = array(
  'intro.php',
  'outro.php',
  'carousel.php',
  'shindan.php',
  'kansyui.php',
  'compare_table.php',
  'clinic_info.php',
  'clinic_info_api.php',
  'clinic_info_json.php',
  'category.php',
  'related_category.php',
  'blogcard_js.php',
);
foreach ($custom_shortcode_files as $custom_shortcode_file) {
  locate_template($custom_shortcode_dir . $custom_shortcode_file, true);
}

function custom_disable_fixed_headers_and_apply_styles() {
    //現在のURLのパスを取得
    $current_url = $_SERVER['REQUEST_URI'];

   //ディレクトリorthodontics以下のorthodonticsを除くページにのみ適用
    if (preg_match('~^/orthodontics/(.+)$~', $current_url)) {
        echo '<style>
            /* 追従ヘッダーを無効化 */
            .l-header.-series.-series-right,
            .l-fixHeader__inner.l-container,
            .l-fixHeader.-series.-series-right {
                position: static !important;
                top: auto !important;
                box-shadow: none !important;
            }

            /* fix_headerの追加スタイル */
            .fix_header {
                margin: 0 !important;
                position: relative !important;
            }

            /* l-fixHeader__inner l-containerの非表示 */
            .l-fixHeader__inner.l-container {
                display: none !important;
            }
        </style>';
    }
}
add_action('wp_head', 'custom_disable_fixed_headers_and_apply_styles');




?>
