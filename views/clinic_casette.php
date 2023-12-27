
  <!-- wp:heading {"level":3} -->
  <h3 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh15" style="font-size:1.2em"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->clinic_name); ?></span></span></h3>
  <!-- /wp:heading -->
  <?php include(get_stylesheet_directory() . '/views/components/gallery.php'); ?>
  <section style="padding: 20px; border: 1.5px solid #d8d8d8; border-radius: 0.5rem; margin-top:20px;">
    <?php include(get_stylesheet_directory() . '/views/components/catchcopy.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/doctor.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/review.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/access.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/business_hour.php'); ?>
    <?php #include(get_stylesheet_directory() . '/views/components/map.php'); ?>
    <?php include(get_stylesheet_directory() . '/views/components/cta.php'); ?>
  </section>