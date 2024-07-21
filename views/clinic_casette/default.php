<section id="clinic_<?php echo esc_html($clinic_data->clinic_name_romaji); ?>" class="p-4 rounded-lg">
  <h3>
    <a href="#clinic_<?php echo esc_html($clinic_data->clinic_name_romaji); ?>">
      <?php echo esc_html($clinic_data->clinic_name); ?>
      <?php if (!empty($atts['pr'] ?? '')) : ?>
        <span class="pr_label">【<?php echo esc_html($atts['pr'] ?? ''); ?>】</span>
      <?php endif; ?>
    </a>
  </h3>

  <?php include(get_stylesheet_directory() . '/views/components/default/screenshot.php'); ?>
  <div style="padding: 20px; border: 1.5px solid #d8d8d8; border-radius: 0.5rem; margin-top:20px; background-color: #fff;">
    <?php include(get_stylesheet_directory() . '/views/components/default/gallery.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/default/catchcopy.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/default/doctor.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/default/review.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/default/access.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/default/business_hour.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/default/price.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/default/payment_method.php'); ?>
    <?php #include(get_stylesheet_directory() . '/views/components/default/map.php'); 
    ?>
    <div class="my-4">
    <?php if (!empty($clinic_data->is_kireilign)) : ?>
      <?php include(get_stylesheet_directory() . '/views/components/default/cta_kireilign.php'); ?>
    <?php endif; ?>
    <?php if (!empty($clinic_data->cta)) : ?>
      <?php include(get_stylesheet_directory() . '/views/components/default/cta.php'); ?>
    <?php endif; ?>
    <?php if (empty($clinic_data->is_kireilign) && empty($clinic_data->cta)) : ?>
      <?php include(get_stylesheet_directory() . '/views/components/default/cta_clinic_website.php'); ?>
    <?php endif; ?>
    <?php #include(get_stylesheet_directory() . '/views/components/default/structured_markup.php'); 
    ?>
    </div>
  </div>
</section>