<?php

// JSON-LDスクリプトを生成
$json_ld = [
  '@context' => 'https://schema.org',
  '@type' => 'Article',
  "author" => [
    "@type" => "Person",
    "name" => $clinic_data->director_name ?? '',
    "jobTitle" => "歯科医師",
    "image" => home_url('/wp-content/clinic_images/' . esc_attr($clinic_data->clinic_name_romaji) . '/' . 'doctor_' . esc_attr($clinic_data->doctor_name_romaji) . '_dentist_works_at_' . esc_attr($clinic_data->clinic_name_romaji) . '_at_2024.webp'),
    "description" => $clinic_data->director_introduction ?? '',
    "knowsAbout" => ["歯科矯正", "顎口腔外科", "矯正歯科"],
  ],
];

// JSON-LDスクリプトを出力
echo '<script type="application/ld+json">' . json_encode($json_ld, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
?>