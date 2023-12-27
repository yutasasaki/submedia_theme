<!-- wp:heading {"level":4} -->
<h4 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh18" style="font-size:1.2em"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->clinic_name); ?>専門医のご紹介</span></span></h4>
<!-- /wp:heading -->

<div class="wp-block-columns" style="gap: 20px;">
  <div class="wp-block-column" style="padding-right: 10px;">
    <figure class="wp-block-image size-large">
      <img src="<?php echo esc_html($clinic_data->director_photo_link); ?>" alt=" <?php echo esc_html($clinic_data->clinic_name); ?>の専門医<?php echo esc_html($clinic_data->director_name); ?>" />
    </figure>
  </div>

  <div class="wp-block-column" style="padding-left: 10px;">
    <!-- wp:heading {"level":5} -->
    <h5 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh1" style="font-size:1.2em"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->director_name); ?></span></span></h5>
    <!-- /wp:heading -->

    <!-- wp:heading {"level":5} -->
    <h5 class="wp-block-heading" style="margin-bottom: 10px;">院長からのコメント</h5>
    <!-- /wp:heading -->

    <p><?php echo esc_html($clinic_data->director_introduction); ?></p>
  </div>
</div>
