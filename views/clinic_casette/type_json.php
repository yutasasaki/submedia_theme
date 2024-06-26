<section id="clinic_<?php echo esc_html($clinic_data->info->id ?? ''); ?>">

  <h3>
    <a href="#clinic_<?php echo esc_html($clinic_data->info->clinic_name_romaji ?? ''); ?>">
      <?php echo esc_html($clinic_data->info->clinic_name ?? ''); ?>
    </a>
  </h3>

  <?php if (file_exists($clinic_data->thumbnail->filepath)) : ?>
    <img src="<?php echo esc_url($clinic_data->thumbnail->url ?? ''); ?>" alt="<?php echo esc_attr($clinic_data->info->clinic_name ?? ''); ?>のウェブサイト" style="width: 100%; height: auto; max-height: 600px; object-fit: cover;" />
  <?php endif; ?>

  <?php if (!empty($clinic_data->info->policy_and_philosophy ?? '')) : ?>
    <h4><?php echo esc_html($clinic_data->info->policy_and_philosophy ?? ''); ?></h4>
  <?php endif; ?>

  <div style="padding: 20px; border: 1.5px solid #d8d8d8; border-radius: 0.5rem; margin-top:20px;">

    <?php if (!empty($clinic_data->recommend->title_1 ?? '')) : ?>
      <h4><?php echo esc_html($clinic_data->recommend->title_1 ?? ''); ?></h4>
    <?php endif; ?>
    <?php if (!empty($clinic_data->recommend->content_1 ?? '')) : ?>
      <p><?php echo esc_html($clinic_data->recommend->content_1 ?? ''); ?></p>
    <?php endif; ?>
    <?php if (!empty($clinic_data->recommend->title_2 ?? '')) : ?>
      <h4><?php echo esc_html($clinic_data->recommend->title_2 ?? ''); ?></h4>
    <?php endif; ?>

    <?php if (!empty($clinic_data->recommend->content_2 ?? '')) : ?>
      <p><?php echo esc_html($clinic_data->recommend->content_2 ?? ''); ?></p>
    <?php endif; ?>

    <?php if (!empty($clinic_data->recommend->title_3 ?? '')) : ?>
      <h4><?php echo esc_html($clinic_data->recommend->title_3 ?? ''); ?></h4>
    <?php endif; ?>
    <?php if (!empty($clinic_data->recommend->content_3 ?? '')) : ?>
      <p><?php echo esc_html($clinic_data->recommend->content_3 ?? ''); ?></p>
    <?php endif; ?>

    <?php if (!empty($clinic_data->info->director_name ?? '')) : ?>
      <h4>
        <?php if (!empty($clinic_data->info->director_introduction_page_url ?? '')) : ?>
          <blockquote cite="<?php echo esc_html($clinic_data->info->director_introduction_page_url ?? ''); ?>">
            <a href="<?php echo esc_url($clinic_data->info->director_introduction_page_url ?? ''); ?>" target="_blank" rel="noopener noreferrer">
              <p><?php echo esc_html($clinic_data->info->director_name ?? ''); ?></p>
            </a>
          </blockquote>
        <?php else : ?>
          <?php echo esc_html($clinic_data->info->director_name ?? ''); ?>
        <?php endif; ?>
      </h4>
      <?php if (!empty($clinic_data->info->director_introduction ?? '')) : ?>
        <h5><?php echo esc_html($clinic_data->info->director_name ?? ''); ?>のご紹介</h5>
        <p><?php echo esc_html($clinic_data->info->director_introduction ?? ''); ?></p>
      <?php endif; ?>
      <?php if (!empty($clinic_data->info->director_history ?? '')) : ?>
        <h5><?php echo esc_html($clinic_data->info->director_name ?? ''); ?>の経歴</h5>
        <p><?php echo esc_html($clinic_data->info->director_history ?? ''); ?></p>
      <?php endif; ?>
    <?php endif; ?>

    <?php if (!empty($clinic_data->info->medical_services ?? '')) : ?>
      <h4>対応する施術内容</h4>
      <ul style="list-style: none;">
        <?php foreach ($clinic_data->info->medical_services as $item) : ?>
          <li><?php echo esc_html($item); ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <?php if (!empty($clinic_data->info->access ?? '')) : ?>
      <h4>アクセス情報</h4>
      <ul style="list-style: none;">
        <?php foreach ($clinic_data->info->access as $item) : ?>
          <li><?php echo esc_html($item); ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <?php include(get_stylesheet_directory() . '/views/components/default/cta_clinic_website.php'); ?>
  </div>
</section>