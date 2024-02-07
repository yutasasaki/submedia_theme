<?php
  // mapのAPIキー変数定義
  define('GOOGLE_MAPS_API_KEY', 'AIzaSyBrMdDdJgrvcRWAKv-1FL6Ac1lsZP4MxnU');


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
  'custom_cta.php',
  'splide.php',
  'breadcrumbs.php',
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
  'intro.php',
  'colors.php',
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
  'compare_table.php',
  'clinic_info.php',
);
foreach ($custom_shortcode_files as $custom_shortcode_file) {
  locate_template($custom_shortcode_dir . $custom_shortcode_file, true);
}
?>
