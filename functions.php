<?php
  $custom_functions_dir = 'services/';
  $custom_functions_files = array(
    // 'plugins.php',
    // 'acf-json.php',
    'style.php',
    'custom_cta.php',
    'shortcode.php',
    'clinic_info.php',
    'breadcrumbs.php',
  );
  foreach ($custom_functions_files as $custom_functions_file) {
    locate_template($custom_functions_dir . $custom_functions_file, true);
  }
?>