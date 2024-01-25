<?php if (!empty($clinic_data->review1) || !empty($clinic_data->review2) || !empty($clinic_data->review3)) : ?>

<!-- wp:sgb/headings {"headingText":"<?php echo esc_html($clinic_data->clinic_name); ?>の歯列矯正の口コミ評判","headingStyle":"hh hh1","headingTag":"h4","headingIconName":"","headingTextColor":"","headingBgColor1":"","headingBorderColor1":"","headingTextAlign":"center"} -->
    <h4 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh1 sgb-heading__inner--center" style="font-size:1.2em;text-align:center"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->clinic_name); ?>の歯列矯正の口コミ評判</span></span></h4>
    <!-- /wp:sgb/headings -->

<?php if (!empty($clinic_data->review1)) : ?>
<!-- wp:sgb/say {"balloonBackgroundColor":"#fff","balloonBorderColor":"#009EF3","avatarBorderColor":"#009EF3"} -->
<div class="wp-block-sgb-say">
  <div class="sgb-block-say sgb-block-say--left">
    <div class="sgb-block-say-avatar"><img src="https://www.gravatar.com/avatar/?d=mm" width="80" height="80"
        style="border-color:#009EF3" />
      <div class="sgb-block-say-avatar__name"></div>
    </div>
    <div class="sgb-block-say-text">
      <div class="sgb-block-say-text__content" style="color:#333;border-color:#009EF3;background-color:#fff">
        <!-- wp:paragraph -->
        <p><?php echo esc_html($clinic_data->review1); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"align":"right"} -->
        <p class="has-text-align-right"><span class="small">参照元 : <a
              href="<?php echo esc_html($clinic_data->review1_link); ?>"
              rel="noreferrer"><?php echo esc_html($clinic_data->review1_source); ?></a></span></p>
        <!-- /wp:paragraph --><span class="sgb-block-say-text__before" style="border-right-color:#009EF3"></span><span
          class="sgb-block-say-text__after" style="border-right-color:#FFF;"></span>
      </div>
    </div>
  </div>
</div>
<!-- /wp:sgb/say -->


<?php endif; ?>
<?php if (!empty($clinic_data->review2)) : ?>
<!-- wp:sgb/say {"balloonBackgroundColor":"#fff","balloonBorderColor":"#009EF3","avatarBorderColor":"#009EF3"} -->
<div class="wp-block-sgb-say">
  <div class="sgb-block-say sgb-block-say--left">
    <div class="sgb-block-say-avatar"><img src="https://www.gravatar.com/avatar/?d=mm" width="80" height="80"
        style="border-color:#009EF3" />
      <div class="sgb-block-say-avatar__name"></div>
    </div>
    <div class="sgb-block-say-text">
      <div class="sgb-block-say-text__content" style="color:#333;border-color:#009EF3;background-color:#fff">
        <!-- wp:paragraph -->
        <p><?php echo esc_html($clinic_data->review2); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"align":"right"} -->
        <p class="has-text-align-right"><span class="small">参照元 : <a
              href="<?php echo esc_html($clinic_data->review2_link); ?>"
              rel="noreferrer"><?php echo esc_html($clinic_data->review2_source); ?></a></span></p>
        <!-- /wp:paragraph --><span class="sgb-block-say-text__before" style="border-right-color:#009EF3"></span><span
          class="sgb-block-say-text__after" style="border-right-color:#FFF"></span>
      </div>
    </div>
  </div>
</div>
<!-- /wp:sgb/say -->
<?php endif; ?>
<?php endif; ?>