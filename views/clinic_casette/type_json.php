<section id="clinic_<?php echo esc_html($clinic_data->info->id ?? ''); ?>">

  <h3>
    <a href="#clinic_<?php echo esc_html($clinic_data->info->id ?? ''); ?>"><?php echo esc_html($clinic_data->info->clinic_name ?? ''); ?>
      <?php if (!empty($atts['pr'] ?? '')) : ?>
        <span class="pr_label">【<?php echo esc_html($atts['pr'] ?? ''); ?>】</span>
      <?php endif; ?>
    </a>
  </h3>
  <?php if (file_exists($clinic_data->thumbnail->filepath)) : ?>
    <img src="<?php echo esc_url($clinic_data->thumbnail->url ?? ''); ?>" alt="<?php echo esc_attr($clinic_data->info->clinic_name ?? ''); ?>のウェブサイト" style="width: 100%; height: auto; max-height: 600px; object-fit: cover;" />
  <?php endif; ?>

  <?php if (!empty($clinic_data->info->policy_and_philosophy ?? '')) : ?>
    <?php if (!empty($clinic_data->info->director_introduction_page_url ?? '')) : ?>
      <blockquote class="bq_inline" cite="<?php echo esc_html($clinic_data->info->director_introduction_page_url ?? ''); ?>">
        <h4 style="margin-top:0px;"><?php echo esc_html($clinic_data->info->policy_and_philosophy ?? ''); ?></h4>
      </blockquote>
    <?php else : ?>
      <h4 style="margin-top:0px;"><?php echo esc_html($clinic_data->info->policy_and_philosophy ?? ''); ?></h4>
    <?php endif; ?>
  <?php endif; ?>

  <div style="padding: 20px; border: 1.5px solid #d8d8d8; border-radius: 0.5rem; margin-top:20px;" class="flex flex-col gap-2">

    <?php if (!empty($clinic_data->recommend->title_1 ?? '')) : ?>
      <h4 style="margin-top:0px;"><?php echo esc_html($clinic_data->recommend->title_1 ?? ''); ?></h4>
    <?php endif; ?>
    <?php if (!empty($clinic_data->recommend->content_1 ?? '')) : ?>
      <p class="mb-4"><?php echo esc_html($clinic_data->recommend->content_1 ?? ''); ?></p>
    <?php endif; ?>
    <?php if (!empty($clinic_data->recommend->title_2 ?? '')) : ?>
      <h4 style="margin-top:0px;"><?php echo esc_html($clinic_data->recommend->title_2 ?? ''); ?></h4>
    <?php endif; ?>

    <?php if (!empty($clinic_data->recommend->content_2 ?? '')) : ?>
      <p class="mb-4"><?php echo esc_html($clinic_data->recommend->content_2 ?? ''); ?></p>
    <?php endif; ?>

    <?php if (!empty($clinic_data->recommend->title_3 ?? '')) : ?>
      <h4 style="margin-top:0px;"><?php echo esc_html($clinic_data->recommend->title_3 ?? ''); ?></h4>
    <?php endif; ?>
    <?php if (!empty($clinic_data->recommend->content_3 ?? '')) : ?>
      <p class="mb-4"><?php echo esc_html($clinic_data->recommend->content_3 ?? ''); ?></p>
    <?php endif; ?>

    <?php if (!empty($clinic_data->info->director_name ?? '')) : ?>
      <h4 style="text-align: center;"><?php echo esc_html($clinic_data->info->director_name ?? ''); ?>先生</h4>
      <?php if (!empty($clinic_data->info->director_introduction ?? '')) : ?>
        <h5><?php echo esc_html($clinic_data->info->director_name ?? ''); ?>先生のご紹介</h5>
        <?php if (!empty($clinic_data->info->director_introduction_page_url ?? '')) : ?>
          <blockquote cite="<?php echo esc_html($clinic_data->info->director_introduction_page_url ?? ''); ?>">
            <p class="mb-4"><?php echo esc_html($clinic_data->info->director_introduction ?? ''); ?></p>
          </blockquote>
        <?php else : ?>
          <p class="mb-4"><?php echo esc_html($clinic_data->info->director_introduction ?? ''); ?></p>
        <?php endif; ?>
        <?php if (!empty($clinic_data->info->director_history ?? '')) : ?>
          <h5><?php echo esc_html($clinic_data->info->director_name ?? ''); ?>先生の経歴</h5>
          <p class="mb-4"><?php echo esc_html($clinic_data->info->director_history ?? ''); ?></p>
        <?php endif; ?>
      <?php endif; ?>
    <?php endif; ?>

    <?php if (!empty($clinic_data->info->medical_services ?? '')) : ?>
      <h4 style="margin-top:0px;">対応する施術内容</h4>
      <ul style="list-style: none;">
        <?php foreach ($clinic_data->info->medical_services as $item) : ?>
          <li><?php echo esc_html($item); ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <?php if (!empty($clinic_data->info->access ?? '')) : ?>
      <h4 style="margin-top:0px;">アクセス情報</h4>
      <ul style="list-style: none;">
        <?php foreach ($clinic_data->info->access as $item) : ?>
          <li><?php echo esc_html($item); ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <?php if (!empty($clinic_data->cta_url ?? '')) : ?>
      <section style="text-align:center;">
        <a class="mx-auto inline-block sm-web-cta-btn click_cta" rel="noopener noreferrer" href="<?php echo esc_url($clinic_data->cta_url ?? '') ?>">公式サイトはこちら<i class="fas fa-external-link-alt wp-block-sgb-btn__icon-after"></i></a>
      </section>
    <?php endif; ?>
  </div>
</section>
<?php if ($clinic_data->json_ld) : ?>
  <?php echo ($clinic_data->catchphrase); ?>
<?php endif; ?>