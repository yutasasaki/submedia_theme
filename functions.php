<?php
  $custom_functions_dir = 'services/';
  $custom_functions_files = array(
    'style.php',
    'shortcode.php',
    'acf-json.php',
    'clinic_info.php',
  );
  foreach ($custom_functions_files as $custom_functions_file) {
    locate_template($custom_functions_dir . $custom_functions_file, true);
  }
?>