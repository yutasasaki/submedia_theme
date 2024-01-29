<?php
switch ($atts['compare']):
  case 'invisalign_lite':
      include(get_stylesheet_directory() . '/views/components/intro/compare_invisalign_lite.php');
      break;
  case 'invisalign_express':
      include(get_stylesheet_directory() . '/views/components/intro/compare_invisalign_express.php');
      break;
  case 'kireilign':
      include(get_stylesheet_directory() . '/views/components/intro/compare_kireilign.php');
      break;
  default:
      include(get_stylesheet_directory() . '/views/components/intro/compare_kireilign.php');
      break;
endswitch;
?>