<?php if (!empty($clinic_data->image1_link) || !empty($clinic_data->image2_link) || !empty($clinic_data->image3_link) || !empty($clinic_data->image4_link)) : ?>
  <section class="splide" aria-label="基本構造の例">
    <div class="splide__track">
      <ul class="splide__list">
        <?php if (!empty($clinic_data->image1_link)) : ?>
        <li class="splide__slide" style="min-height: 400px;">
          <img src="<?php echo esc_url($clinic_data->image1_link); ?>" alt="[<?php echo esc_attr($clinic_data->clinic_name); ?>]紹介画像1" style="width: 100%; height: 100%; object-fit: cover;">
        </li>
        <?php endif; ?>
        <?php if (!empty($clinic_data->image2_link)) : ?>
        <li class="splide__slide" style="min-height: 400px;">
          <img src="<?php echo esc_url($clinic_data->image2_link); ?>" alt="[<?php echo esc_attr($clinic_data->clinic_name); ?>]紹介画像2" style="width: 100%; height: 100%; object-fit: cover;">
        </li>
        <?php endif; ?>
        <?php if (!empty($clinic_data->image3_link)) : ?>
        <li class="splide__slide" style="min-height: 400px;">
          <img src="<?php echo esc_url($clinic_data->image3_link); ?>" alt="[<?php echo esc_attr($clinic_data->clinic_name); ?>]紹介画像3" style="width: 100%; height: 100%; object-fit: cover;">
        </li>
        <?php endif; ?>
        <?php if (!empty($clinic_data->image4_link)) : ?>
        <li class="splide__slide" style="min-height: 400px;">
          <img src="<?php echo esc_url($clinic_data->image4_link); ?>" alt="[<?php echo esc_attr($clinic_data->clinic_name); ?>]紹介画像4" style="width: 100%; height: 100%; object-fit: cover;">
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </section>
<?php endif; ?>