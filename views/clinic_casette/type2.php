<section id="clinic_<?php echo esc_html($clinic_data->clinic_name_romaji); ?>">
  <!-- wp:sgb/headings {"headingText":"<?php echo esc_html($clinic_data->clinic_name); ?>","headingStyle":"hh hh13","headingIconName":"","headingTextColor":"","headingBgColor1":"","headingBorderColor1":""} -->
  <h3 class="wp-block-sgb-headings sgb-heading">
    <span class="sgb-heading__inner hh hh13" style="font-size:1.2em; 
  box-shadow:0 0 0 5px <?php echo get_theme_mod('submedia_light_color_setting', '#009EF3'); ?>;
  background-color:<?php echo get_theme_mod('submedia_main_color_setting', '#009EF3'); ?>;">
      <span class="sgb-heading__text">
        <a style="color:<?php echo get_theme_mod('submedia_main_text_color_setting', '#009EF3'); ?>;text-decoration: none; cursor: pointer;" href="#clinic_<?php echo esc_html($clinic_data->clinic_name_romaji); ?>">
          <?php echo esc_html($clinic_data->clinic_name); ?>
        </a>
      </span>
    </span>
  </h3>
  <!-- /wp:sgb/headings -->
  <div style=" padding: 20px; border: 1.5px solid #d8d8d8; border-radius: 0.5rem; margin-top:20px;">
    <?php include(get_stylesheet_directory() . '/views/components/default/screenshot.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/type2/catchcopy.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/type2/doctor.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/type2/review.php'); ?>
    <?php #include(get_stylesheet_directory() . '/views/components/default/access.php'); 
    ?>
    <?php include(get_stylesheet_directory() . '/views/components/type2/business_hour.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/type2/price.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/type2/payment_method.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/default/map.php'); ?>
    <?php if (!empty($clinic_data->is_kireilign)) : ?>
      <?php include(get_stylesheet_directory() . '/views/components/default/cta_kireilign.php'); ?>
    <?php endif; ?>
    <?php if (!empty($clinic_data->cta)) : ?>
      <?php include(get_stylesheet_directory() . '/views/components/default/cta.php'); ?>
    <?php endif; ?>
    <?php if (empty($clinic_data->is_kireilign) && empty($clinic_data->cta)) : ?>
      <?php include(get_stylesheet_directory() . '/views/components/default/cta_clinic_website.php'); ?>
    <?php endif; ?>
    <?php include(get_stylesheet_directory() . '/views/components/default/structured_markup.php'); ?>
  </div>
  <?php include(get_stylesheet_directory() . '/views/components/json_ld.php'); ?>
</section>