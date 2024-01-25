<?php
$screenshot_link_path = WP_CONTENT_DIR . '/clinic_images/' . esc_attr($clinic_data->clinic_name_romaji) . '/' . esc_attr($clinic_data->clinic_name_romaji) . '_website_in_2024.webp';
$screenshot_link_url = home_url( '/wp-content/clinic_images/' . esc_attr($clinic_data->clinic_name_romaji) . '/' . esc_attr($clinic_data->clinic_name_romaji) . '_website_in_2024.webp' );
$default_image_url = home_url( '/wp-content/clinic_images/notfound.webp' ); // 固定の画像URL

if (file_exists($screenshot_link_path)) : ?>
    <div class="wp-block-columns" style="gap: 20px;">
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
<?php endif; ?>
