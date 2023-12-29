<?php if (!empty($clinic_data->image1_link) || !empty($clinic_data->image2_link) || !empty($clinic_data->image3_link) || !empty($clinic_data->image4_link)) : ?>
  <section class="splide" aria-label="基本構造の例">
    <div class="splide__track">
      <ul class="splide__list">
        <?php if (!empty($clinic_data->image1_link)) : ?>
        <li class="splide__slide" style="background-image: url('<?php echo esc_url($clinic_data->image1_link); ?>'); background-size: cover; min-height: 400px;"></li>
        <?php endif; ?>
        <?php if (!empty($clinic_data->image2_link)) : ?>
        <li class="splide__slide" style="background-image: url('<?php echo esc_url($clinic_data->image2_link); ?>'); background-size: cover; min-height: 400px;"></li>
        <?php endif; ?>
        <?php if (!empty($clinic_data->image3_link)) : ?>
        <li class="splide__slide" style="background-image: url('<?php echo esc_url($clinic_data->image3_link); ?>'); background-size: cover; min-height: 400px;"></li>
        <?php endif; ?>
        <?php if (!empty($clinic_data->image4_link)) : ?>
        <li class="splide__slide" style="background-image: url('<?php echo esc_url($clinic_data->image4_link); ?>'); background-size: cover; min-height: 400px;"></li>
        <?php endif; ?>
      </ul>
    </div>
  </section>
<?php endif; ?>