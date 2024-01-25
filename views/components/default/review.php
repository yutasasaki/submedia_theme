<?php if (!empty($clinic_data->review1) || !empty($clinic_data->review2) || !empty($clinic_data->review3)) : ?>
  <!-- wp:heading {"level":4} -->
  <h4 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh18" style="font-size:1.2em"><span
        class="sgb-heading__text"><?php echo esc_html($clinic_data->clinic_name); ?>の歯列矯正の口コミ評判</span></span></h4>
  <!-- /wp:heading -->

  <?php if (!empty($clinic_data->review1)) : ?>
  <div class="wp-block-sgb-say">
    <div class="sgb-block-say sgb-block-say--left">
      <div class="sgb-block-say-avatar"><img src="https://www.gravatar.com/avatar/?d=mm" width="80" height="80"
          style="border-color:#eaedf2" />
        <div class="sgb-block-say-avatar__name"></div>
      </div>
      <div class="sgb-block-say-text">
        <div class="sgb-block-say-text__content" style="color:#333;border-color:#d5d5d5;background-color:#FFF">
          <!-- wp:paragraph -->
          <p><?php echo esc_html($clinic_data->review1); ?></p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph -->
          <p></p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"align":"right"} -->
          <p class="has-text-align-right"><span class="small">参照元 : <a href="<?php echo esc_html($clinic_data->review1_link); ?>" rel="noreferrer"><?php echo esc_html($clinic_data->review1_source); ?></a></span></p>
          <!-- /wp:paragraph --><span class="sgb-block-say-text__before" style="border-right-color:#d5d5d5"></span><span
            class="sgb-block-say-text__after" style="border-right-color:#FFF"></span>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php if (!empty($clinic_data->review2)) : ?>
  <div class="wp-block-sgb-say">
    <div class="sgb-block-say sgb-block-say--left">
      <div class="sgb-block-say-avatar"><img src="https://www.gravatar.com/avatar/?d=mm" width="80" height="80"
          style="border-color:#eaedf2" />
        <div class="sgb-block-say-avatar__name"></div>
      </div>
      <div class="sgb-block-say-text">
        <div class="sgb-block-say-text__content" style="color:#333;border-color:#d5d5d5;background-color:#FFF">
          <!-- wp:paragraph -->
          <p><?php echo esc_html($clinic_data->review2); ?></p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph -->
          <p></p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"align":"right"} -->
          <p class="has-text-align-right"><span class="small">参照元 : <a href="<?php echo esc_html($clinic_data->review2_link); ?>" rel="noreferrer"><?php echo esc_html($clinic_data->review2_source); ?></a></span></p>
          <!-- /wp:paragraph --><span class="sgb-block-say-text__before" style="border-right-color:#d5d5d5"></span><span
            class="sgb-block-say-text__after" style="border-right-color:#FFF"></span>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
<?php endif; ?>