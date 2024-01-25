<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalOrganization",
  "name": "<?php echo esc_attr($clinic_data->clinic_name_romaji ?? '');?>",
  <?php if (!empty($clinic_data->clinic_website_link)): ?>
  "url": "<?php echo esc_attr($clinic_data->clinic_website_link ?? '');?>",
  <?php endif; ?>
  "image": [
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
    <?php foreach ($image_links as $key => $link) : ?>
      "<?php echo esc_url($link); ?>"<?php if (end($image_links) !== $link) echo ','; ?>
    <?php endforeach; ?>
  ],
  "openingHoursSpecification": [
  <?php foreach (['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday', 'PublicHolidays'] as $day): ?>
    <?php 
    $morning_key = strtolower($day) . '_morning'; // 例: monday_morning
    $afternoon_key = strtolower($day) . '_afternoon'; // 例: monday_afternoon

    if ($clinic_data->{$morning_key} != 'ー' && !empty($clinic_data->{$morning_key})) {
      $opens = $clinic_data->morning_hours;
    } else {
      $opens = '';
    }

    if ($clinic_data->{$afternoon_key} != 'ー' && !empty($clinic_data->{$afternoon_key})) {
      $closes = $clinic_data->afternoon_hours;
    } else {
      $closes = '';
    }
    ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "http://schema.org/<?php echo $day; ?>",
      "opens": "<?php echo esc_attr($opens); ?>",
      "closes": "<?php echo esc_attr($closes); ?>"
    }<?php if ($day != 'PublicHolidays') echo ','; ?>
  <?php endforeach; ?>
  ],

  "medicalProcedure": [
    {
      "@type": "MedicalProcedure",
      "name": "<?php echo esc_attr($clinic_data->type1 ?? '');?>",
      "cost": "<?php echo esc_attr($clinic_data->type1_cost ?? '');?>"
    },
    {
      "@type": "MedicalProcedure",
      "name": "<?php echo esc_attr($clinic_data->type2 ?? '');?>",
      "cost": "<?php echo esc_attr($clinic_data->type2_cost ?? '');?>"
    },
    {
      "@type": "MedicalProcedure",
      "name": "<?php echo esc_attr($clinic_data->type3 ?? '');?>",
      "cost": "<?php echo esc_attr($clinic_data->type3_cost ?? '');?>"
    },
    {
      "@type": "MedicalProcedure",
      "name": "<?php echo esc_attr($clinic_data->type4 ?? '');?>",
      "cost": "<?php echo esc_attr($clinic_data->type4_cost ?? '');?>"
    }
  ],
  "paymentAccepted": [
    "<?php echo esc_attr($clinic_data->payment_cash ?? '');?>",
    "<?php echo esc_attr($clinic_data->payment_credit_card ?? '');?>",
    "<?php echo esc_attr($clinic_data->payment_dental_loan ?? '');?>",
    "<?php echo esc_attr($clinic_data->payment_unionpay ?? '');?>",
    "<?php echo esc_attr($clinic_data->payment_e_money ?? '');?>",
    "<?php echo esc_attr($clinic_data->payment_bank_transfer ?? '');?>"
  ],
  
  <?php if (!empty($clinic_data->director_name)): ?>
  "director": {
    "@type": "Person",
    "name": "<?php echo esc_attr($clinic_data->director_name); ?>",
    "image": "<?php echo esc_attr($clinic_data->director_photo_link ?? ''); ?>",
    "description": "<?php echo esc_attr($clinic_data->director_introduction ?? ''); ?>"
  },
  <?php endif; ?>

  "access": "<?php echo esc_attr($clinic_data->nearest_station_access ?? '');?>, 駐車場: <?php echo esc_attr($clinic_data->parking_availability ?? '');?>",
  "additionalProperty": [
    {
      "@type": "PropertyValue",
      "name": "キャッチコピー",
      "value": "<?php echo esc_attr($clinic_data->catchphrase ?? '');?>"
    },
    {
      "@type": "PropertyValue",
      "name": "主要コンテンツ",
      "value": "<?php echo esc_attr($clinic_data->headline1 ?? '');?>: <?php echo esc_attr($clinic_data->paragraph1 ?? '');?>, <?php echo esc_attr($clinic_data->headline2 ?? '');?>: <?php echo esc_attr($clinic_data->paragraph2 ?? '');?>, <?php echo esc_attr($clinic_data->headline3 ?? '');?>: <?php echo esc_attr($clinic_data->paragraph3 ?? '');?>"
    }
  ]
}
</script>
