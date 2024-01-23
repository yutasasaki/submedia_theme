<!-- wp:sgb/headings {"headingText":"<?php echo esc_html($clinic_data->clinic_name); ?>","headingStyle":"sgb-heading\u002d\u002dtype4","headingIconName":"","headingTextColor":"#fff","headingBgColor1":"#7fbae9","headingBorderColor1":"#7fbae9"} -->
<h3 class="wp-block-sgb-headings sgb-heading">
  <span class="sgb-heading__inner sgb-heading--type4"
    style="background-color:#7fbae9;border-color:#7fbae9;font-size:1.2em">
    <span class="sgb-heading__text" style="color:#fff">
    <?php if($clinic_data->is_submedia) : ?>
      <a style="color:white;text-decoration: none; cursor: default;" href="<?php echo esc_url($clinic_data->clinic_website_link); ?>">
      <?php echo esc_html($clinic_data->clinic_name); ?>
    </a>   
    <?php else : ?>
      <?php echo esc_html($clinic_data->clinic_name); ?>
    <?php endif; ?>
    </span>
  </span>
</h3>
<!-- /wp:sgb/headings -->

<?php include(get_stylesheet_directory() . '/views/components/screenshot.php'); ?>
<section style="padding: 20px; border: 1.5px solid #d8d8d8; border-radius: 0.5rem; margin-top:20px;">
  <?php include(get_stylesheet_directory() . '/views/components/gallery.php'); ?>
  <?php include(get_stylesheet_directory() . '/views/components/catchcopy.php'); ?>
  <?php include(get_stylesheet_directory() . '/views/components/doctor.php'); ?>
  <?php include(get_stylesheet_directory() . '/views/components/review.php'); ?>
  <?php include(get_stylesheet_directory() . '/views/components/access.php'); ?>
  <?php include(get_stylesheet_directory() . '/views/components/business_hour.php'); ?>
  <?php include(get_stylesheet_directory() . '/views/components/price.php'); ?>
  <?php include(get_stylesheet_directory() . '/views/components/payment_method.php'); ?>
  <?php #include(get_stylesheet_directory() . '/views/components/map.php'); ?>
  <?php if (!empty($clinic_data->cta)) : ?>
  <?php include(get_stylesheet_directory() . '/views/components/cta.php'); ?>
  <?php else : ?>
  <?php include(get_stylesheet_directory() . '/views/components/cta_clinic_website.php'); ?>
  <?php endif; ?>
  <?php #include(get_stylesheet_directory() . '/views/components/structured_markup.php'); ?>
</section>