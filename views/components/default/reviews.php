<?php if (!empty($clinic_data->review1)) : ?>
  <!-- wp:sgb/say {"balloonBackgroundColor":"#fff","balloonBorderColor":"#555;","avatarBorderColor":"#555;"} -->
  <div class="flex">
    <div class="rounded-full w-20 h-20"><img src="<?php echo esc_html(get_theme_mod('sm_review_icon', '')); ?>" width="80" height="80" style="border-color:#777;" />
    </div>
    <div class="sgb-block-say-text">
      <div class="sgb-block-say-text__content" style="color:#555;border-color:#555;background-color:#fff">
        <!-- wp:paragraph -->
        <p><?php echo esc_html($clinic_data->review1); ?></p>
        <!-- /wp:paragraph -->

        <?php
        $url = esc_html($clinic_data->review1_link);
        $rel = strpos($url, 'https://kyosei-guide.co.jp') !== false ? '' : 'rel="nofollow noreferrer"';
        ?>

        <!-- wp:paragraph {"align":"right"} -->
        <p class="has-text-align-right"><span class="small">参照元 : <a href="<?php echo $url; ?>" <?php echo $rel; ?>><?php echo esc_html($clinic_data->review1_source); ?></a></span></p>
        <!-- /wp:paragraph -->
      </div>
    </div>
  </div>
  <!-- /wp:sgb/say -->


<?php endif; ?>
<?php if (!empty($clinic_data->review2)) : ?>
  <div class="flex">
    <div class="rounded-full w-20 h-20"><img src="<?php echo esc_html(get_theme_mod('sm_review_icon', '')); ?>" width="80" height="80" style="border-color:#777;" />
    </div>
    <div class="sgb-block-say-text">
      <div class="sgb-block-say-text__content" style="color:#555;border-color:#555;background-color:#fff">
        <!-- wp:paragraph -->
        <p><?php echo esc_html($clinic_data->review2); ?></p>
        <!-- /wp:paragraph -->

        <?php
        $url = esc_html($clinic_data->review2_link);
        $rel = strpos($url, 'https://kyosei-guide.co.jp') !== false ? '' : 'rel="nofollow noreferrer"';
        ?>

        <!-- wp:paragraph {"align":"right"} -->
        <p class="has-text-align-right"><span class="small">参照元 : <a href="<?php echo $url; ?>" <?php echo $rel; ?>><?php echo esc_html($clinic_data->review2_source); ?></a></span></p>
        <!-- /wp:paragraph -->
      </div>
    </div>
  </div>
<?php endif; ?>