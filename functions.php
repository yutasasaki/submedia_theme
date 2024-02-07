<?php
  // mapのAPIキー変数定義
  define('GOOGLE_MAPS_API_KEY', 'AIzaSyBrMdDdJgrvcRWAKv-1FL6Ac1lsZP4MxnU');
  // ディレクトリ定義
  $custom_functions_dir = 'services/';
  // 呼び出すfunctionを指定
  $custom_functions_files = array(
    'customizer.php',
  // 'plugins.php',
  // 'acf-json.php',
    'css_loader.php',
    'custom_cta.php',
    'shortcode.php',
    'clinic_info.php',
    'breadcrumbs.php',
  );
  foreach ($custom_functions_files as $custom_functions_file) {
    locate_template($custom_functions_dir . $custom_functions_file, true);
  }
?>
