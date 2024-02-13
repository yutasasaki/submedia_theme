<?php if (!empty($clinic_data->review1) || !empty($clinic_data->review2) || !empty($clinic_data->review3)) : ?>

  <!-- wp:sgb/headings {"headingText":"<?php echo esc_html($clinic_data->clinic_name); ?>の歯列矯正の口コミ評判","headingStyle":"hh hh1","headingTag":"h4","headingIconName":"","headingTextColor":"","headingBgColor1":"","headingBorderColor1":"","headingTextAlign":"center"} -->
  <h4 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh1 sgb-heading__inner--center" style="font-size:1.2em;text-align:center"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->clinic_name); ?>の歯列矯正の口コミ評判</span></span></h4>
  <!-- /wp:sgb/headings -->
  <?php include(get_stylesheet_directory() . '/views/components/default/reviews.php'); ?>

<?php endif; ?>