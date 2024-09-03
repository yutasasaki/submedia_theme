<section id="clinic_<?php echo esc_html($clinic_data->clinic_name_romaji); ?>">
  <h3>
    <a style="color:#333;" href="#clinic_<?php echo esc_html($clinic_data->clinic_name_romaji); ?>">
      <?php echo esc_html($clinic_data->clinic_name); ?>
      <?php if (!empty($atts['pr'] ?? '')) : ?>
        <span class="pr_label">【<?php echo esc_html($atts['pr'] ?? ''); ?>】</span>
      <?php endif; ?>
    </a>
  </h3>
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
</section>
<?php if ($clinic_data->json_ld) : ?>
  <?php echo ($clinic_data->json_ld); ?>
<?php endif; ?>