<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  // wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
  wp_enqueue_style( 'original-style', get_stylesheet_directory_uri() . '/css/style.css');

  // customizer css
  $submedia_main_color_setting =  get_theme_mod('submedia_main_color_setting', '#009EF3');
  $submedia_light_color_setting =  get_theme_mod('submedia_light_color_setting', '#b4e0fa');
  $submedia_main_text_color_setting =  get_theme_mod('submedia_main_text_color_setting', '#b4e0fa');
  $submedia_light_text_color_setting = get_theme_mod('submedia_light_text_color_setting', '#333');
  echo '<style type="text/css">
    .sm-hh18{
      border-bottom: 3px solid '. esc_attr($submedia_light_color_setting) . '!important ;
    }
    .sm-hh18:after{
      border-bottom: 3px solid '. esc_attr($submedia_main_color_setting) . '!important ;
    }
    .sm-border-main{
      border-color:' . esc_attr($submedia_light_color_setting) . '!important ;
    }
    .sm-color-main{
      color:' . esc_attr($submedia_main_text_color_setting) . '!important ;
    }
    .sm-color-sub{
      color:' . esc_attr($submedia_light_text_color_setting) . '!important ;
    }
</style>';
}
?>