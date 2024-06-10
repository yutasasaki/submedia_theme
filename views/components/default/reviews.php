<?php if (!empty($clinic_data->review1)) : ?>
  <!-- wp:sgb/say {"balloonBackgroundColor":"#fff","balloonBorderColor":"#555;","avatarBorderColor":"#555;"} -->
  <div class="wp-block-sgb-say">
    <div class="sgb-block-say sgb-block-say--left">
      <div class="sgb-block-say-avatar"><img src="<?php echo esc_html(get_theme_mod('sm_review_icon', '')); ?>" width="80" height="80" style="border-color:#777;" />
        <div class="sgb-block-say-avatar__name"></div>
      </div>
      <div class="sgb-block-say-text">
        <div class="sgb-block-say-text__content" style="color:#555;border-color:#555;background-color:#fff">
          <!-- wp:paragraph -->
          <p><?php echo esc_html($clinic_data->review1); ?></p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"align":"right"} -->
          <p class="has-text-align-right"><span class="small">参照元 : <a href="<?php echo esc_html($clinic_data->review1_link); ?>" rel="nofollow noreferrer"><?php echo esc_html($clinic_data->review1_source); ?></a></span></p>
          <!-- /wp:paragraph --><span class="sgb-block-say-text__before" style="border-right-color:#555;"></span><span class="sgb-block-say-text__after" style="border-right-color:#FFF;"></span>
        </div>
      </div>
    </div>
  </div>
  <!-- /wp:sgb/say -->


<?php endif; ?>
<?php if (!empty($clinic_data->review2)) : ?>
  <!-- wp:sgb/say {"balloonBackgroundColor":"#fff","balloonBorderColor":"#555;","avatarBorderColor":"#555;"} -->
  <div class="wp-block-sgb-say">
    <div class="sgb-block-say sgb-block-say--left">
      <div class="sgb-block-say-avatar"><img src="<?php echo esc_html(get_theme_mod('sm_review_icon', '')); ?>" width="80" height="80" style="border-color:#777;" />
        <div class="sgb-block-say-avatar__name"></div>
      </div>
      <div class="sgb-block-say-text">
        <div class="sgb-block-say-text__content" style="color:#555;border-color:#555;background-color:#fff">
          <!-- wp:paragraph -->
          <p><?php echo esc_html($clinic_data->review2); ?></p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"align":"right"} -->
          <p class="has-text-align-right"><span class="small">参照元 : <a href="<?php echo esc_html($clinic_data->review2_link); ?>" rel="nofollow noreferrer"><?php echo esc_html($clinic_data->review2_source); ?></a></span></p>
          <!-- /wp:paragraph --><span class="sgb-block-say-text__before" style="border-right-color:#555;"></span><span class="sgb-block-say-text__after" style="border-right-color:#FFF"></span>
        </div>
      </div>
    </div>
  </div>
  <!-- /wp:sgb/say -->
<?php endif; ?>
