<?php
$image_links = [];
$base_path = get_stylesheet_directory() . '/images/clinic_images/' . esc_attr($clinic_data->clinic_name_romaji) . '/';
$base_url = get_stylesheet_directory_uri() . '/images/clinic_images/' . esc_attr($clinic_data->clinic_name_romaji) . '/';
$default_image_url = get_stylesheet_directory_uri() . '/images/clinic_images/notfound.webp';

for ($i = 1; $i <= 4; $i++) {
    $image_file_name = esc_attr($clinic_data->clinic_name_romaji) . '_clinic_in_operation_' . $i . '_at_2024.webp';
    $image_path = $base_path . $image_file_name;
    $image_url = $base_url . $image_file_name;

    if (file_exists($image_path)) {
        $image_links[] = $image_url;
    }
}


if (empty($image_links)) {
    $image_links[] = $default_image_url; // 画像が一つもない場合、固定の画像URLを追加
}

?>

<section class="splide" aria-label="">
    <div class="splide__track">
        <ul class="splide__list">
            <?php foreach ($image_links as $key => $link) : ?>
                <?php if (!empty($link)) : ?>
                    <li class="splide__slide" style="min-height: 400px;">
                        <img src="<?php echo esc_url($link); ?>" 
                          alt="<?php echo esc_attr($clinic_data->clinic_name); ?>紹介画像<?php echo $key + 1; ?>" 
                          style="width: 100%; height: 100%; object-fit: cover;">
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
