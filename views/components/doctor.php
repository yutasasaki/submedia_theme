<?php if (!empty($clinic_data->director_name)) : ?>
<!-- wp:heading {"level":4} -->
<h4 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh18" style="font-size:1.2em"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->clinic_name); ?>の医師のご紹介</span></span></h4>
<!-- /wp:heading -->

<div class="wp-block-columns" style="gap: 20px;">

  <?php if (!empty($clinic_data->director_photo_link)) : ?>
  <div class="wp-block-column" style="padding-right: 10px;">
    <figure class="wp-block-image size-large" style="width: 100%; height: 300px; overflow: hidden;">
      <img src="<?php echo esc_url($clinic_data->director_photo_link); ?>" alt="<?php echo esc_attr($clinic_data->clinic_name); ?>の医師の<?php echo esc_attr($clinic_data->director_name); ?>先生" style="width: 100%; height: auto; max-height: 300px; object-fit: cover;" />
    </figure>
  </div>
  <?php endif; ?>

  <div class="wp-block-column" style="padding-left: 10px;">
    <!-- wp:heading {"level":5} -->
    <h5 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh1" style="font-size:1.2em"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->director_name); ?>先生</span></span></h5>
    <!-- /wp:heading -->

    <!-- wp:heading {"level":5} -->
    <h5 class="wp-block-heading" style="margin-bottom: 10px;">院長からのコメント</h5>
    <!-- /wp:heading -->
    <?php if (!empty($clinic_data->director_introduction_url)) : ?>
      <blockquote cite="<?php echo esc_url($clinic_data->director_introduction_url); ?>">
    <?php else: ?>
      <p>
    <?php endif; ?>
    <?php echo esc_html($clinic_data->director_introduction); ?></p>
  </div>
</div>
<?php endif; ?>