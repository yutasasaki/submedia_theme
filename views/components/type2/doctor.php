<?php if (!empty($clinic_data->director_name)) : ?>
  <h4><?php echo esc_html($clinic_data->clinic_name); ?>の歯科医師のご紹介</h4>
  <?php
  $director_photo_link_path = WP_CONTENT_DIR . '/clinic_images/' . esc_attr($clinic_data->clinic_name_romaji) . '/' . 'doctor_' . esc_attr($clinic_data->doctor_name_romaji) . '_dentist_works_at_' . esc_attr($clinic_data->clinic_name_romaji) . '_at_2024.webp';
  $director_photo_link_url = home_url('/wp-content/clinic_images/' . esc_attr($clinic_data->clinic_name_romaji) . '/' . 'doctor_' . esc_attr($clinic_data->doctor_name_romaji) . '_dentist_works_at_' . esc_attr($clinic_data->clinic_name_romaji) . '_at_2024.webp');
  $default_image_url = home_url('/wp-content/clinic_images/notfound.webp'); // 固定の画像URL

  $has_director_photo = file_exists($director_photo_link_path);

  if ($has_director_photo) :
    $director_photo_link_url = esc_url($director_photo_link_url);
  else :
    $director_photo_link_url = esc_url($default_image_url);
  endif;
?>

  <?php if ($has_director_photo) : ?>
    <div class="wp-block-column">
      <h5 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh2" style="font-size:1.2em ;color:<?php echo get_theme_mod('submedia_light_text_color_setting', '#009EF3'); ?>; border-bottom: dashed 2px <?php echo get_theme_mod('submedia_light_text_color_setting', '#009EF3'); ?>;"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->director_name); ?>先生</span></span></h5>
      <figure class="wp-block-image size-large" style="width: 100%; overflow: hidden;">
        <img src="<?php echo $director_photo_link_url; ?>" alt="<?php echo esc_attr($clinic_data->clinic_name); ?>の歯科医師の<?php echo esc_attr($clinic_data->director_name); ?>先生" style="width: 100%; max-height: 450px; height: auto; object-fit: contain;" />
      </figure>
    </div>
  <?php else : ?>
    <!-- 画像なしで1カラムのレイアウト -->
    <div>
      <!-- wp:heading {"level":5} -->
      <h5><?php echo esc_html($clinic_data->director_name); ?>先生</h5>
      <!-- /wp:heading -->
    </div>
  <?php endif; ?>
<?php endif; ?>