<?php if (!empty($clinic_data->review1) || !empty($clinic_data->review2) || !empty($clinic_data->review3)) : ?>
  <!-- wp:heading {"level":4} -->
  <h4 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh18 sm-hh18" style="font-size:1.2em"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->clinic_name); ?>の歯列矯正の口コミ評判</span></span></h4>
  <!-- /wp:heading -->

  <?php include(get_stylesheet_directory() . '/views/components/default/reviews.php'); ?>
<?php endif; ?>