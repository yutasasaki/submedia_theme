<div class="wp-block-columns" style="gap: 20px;">
<?php
$image_links = [];
$screenshot_link_path = get_stylesheet_directory() . '/images/clinic_images/' . esc_attr($clinic_data->clinic_name) . '/' . esc_attr($clinic_data->clinic_name) . 'のウェブサイト.webp';
$screenshot_link_url = get_stylesheet_directory_uri() . '/images/clinic_images/' . esc_attr($clinic_data->clinic_name) . '/' . esc_attr($clinic_data->clinic_name) . 'のウェブサイト.webp';
$default_image_url = get_stylesheet_directory_uri() . '/images/clinic_images/notfound.webp'; // 固定の画像URL

if (!file_exists($screenshot_link_path)) {
    $screenshot_link_url = esc_url($default_image_url);
}
?>
  <figure class="wp-block-image size-large" style="width: 100%; height: auto; overflow: hidden;">
  <?php if (!empty($clinic_data->cta)) : ?>
    <a href="<?php echo esc_url(generate_cta_url($clinic_data->cta)) ?>">
      <img src="<?php echo esc_url($screenshot_link_url); ?>" alt="<?php echo esc_attr($clinic_data->clinic_name); ?>のウェブサイト" style="width: 100%; height: auto; max-height: 600px; object-fit: cover;" />
    </a>
  <?php else : ?>
    <img src="<?php echo esc_url($screenshot_link_url); ?>" alt="<?php echo esc_attr($clinic_data->clinic_name); ?>のウェブサイト" style="width: 100%; height: auto; max-height: 600px; object-fit: cover;" />
  <?php endif; ?>
  </figure>
</div>