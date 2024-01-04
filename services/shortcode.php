<?php
  /**
   * shortcodes
   */
  $custom_shortcode_dir = 'shortcode/';
  $custom_shortcode_files = array(
    'intro_area.php',
  );
  foreach ($custom_shortcode_files as $custom_shortcode_file) {
    locate_template($custom_shortcode_dir . $custom_shortcode_file,true);
  }
  
?>