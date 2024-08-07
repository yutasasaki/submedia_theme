<?php

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
  'blogcard_js.php',
);
foreach ($custom_shortcode_files as $custom_shortcode_file) {
  locate_template($custom_shortcode_dir . $custom_shortcode_file, true);
}



// function ns_enqueue_styles() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
// }

// add_action( 'wp_enqueue_scripts', 'ns_enqueue_styles' );
?>
