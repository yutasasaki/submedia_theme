<?php

// 開業時間の配列を初期化
$opening_hours = [];

// 各曜日の午前と午後の時間をチェックして、営業時間を追加
$days = [
  'monday' => 'Monday',
  'tuesday' => 'Tuesday',
  'wednesday' => 'Wednesday',
  'thursday' => 'Thursday',
  'friday' => 'Friday',
  'saturday' => 'Saturday',
  'sunday' => 'Sunday'
];

// 午前と午後の営業時間を設定
$morning_hours = explode('〜', $clinic_data->morning_hours);
$afternoon_hours = explode('〜', $clinic_data->afternoon_hours);

foreach ($days as $day_key => $day_name) {
  $morning = $day_key . '_morning';
  $afternoon = $day_key . '_afternoon';

  if ($clinic_data->$morning === '●' || $clinic_data->$afternoon === '●') {
    $opens = $morning_hours[0]; // 午前の開始時間
    $closes = $afternoon_hours[1] ?? $afternoon_hours[0]; // 午後の終了時間

    $opening_hours[] = [
      '@type' => 'OpeningHoursSpecification',
      'dayOfWeek' => $day_name,
      'opens' => $opens,
      'closes' => $closes
    ];
  }
}

$medical_specialties = [];
foreach (['type1', 'type2', 'type3', 'type4'] as $type) {
  if (!empty($clinic_data->$type)) {
    $medical_specialties[] = $clinic_data->$type;
  }
}


// レビューの配列を初期化し、空でない値を追加
$reviews = [];
if (!empty($clinic_data->review1)) {
  $reviews[] = [
    '@type' => 'Review',
    'reviewRating' => [
      '@type' => 'Rating',
      'ratingValue' => '5' // 固定値として5を使用
    ],
    'author' => esc_html($clinic_data->review1_source),
    'reviewBody' => esc_html($clinic_data->review1),
    'url' => esc_url($clinic_data->review1_link)
  ];
}
if (!empty($clinic_data->review2)) {
  $reviews[] = [
    '@type' => 'Review',
    'reviewRating' => [
      '@type' => 'Rating',
      'ratingValue' => '5' // 固定値として5を使用
    ],
    'author' => esc_html($clinic_data->review2_source),
    'reviewBody' => esc_html($clinic_data->review2),
    'url' => esc_url($clinic_data->review2_link)
  ];
}



// 支払い方法の配列を初期化し、「あり」の値を追加
$payment_methods = [];
if ($clinic_data->payment_cash === 'あり') {
  $payment_methods[] = '現金';
}
if ($clinic_data->payment_credit_card === 'あり') {
  $payment_methods[] = 'クレジットカード';
}
if ($clinic_data->payment_dental_loan === 'あり') {
  $payment_methods[] = 'デンタルローン';
}
if ($clinic_data->payment_unionpay === 'あり') {
  $payment_methods[] = 'デビット・銀聯カード';
}
if ($clinic_data->payment_e_money === 'あり') {
  $payment_methods[] = '電子マネー';
}
if ($clinic_data->payment_bank_transfer === 'あり') {
  $payment_methods[] = '銀行振込';
}


// JSON-LDスクリプトを生成
$json_ld = [
  '@context' => 'https://schema.org',
  '@type' => 'Dentist',
  'name' => esc_html($clinic_data->clinic_name ?? ''),
  'url' => esc_url($clinic_data->clinic_website_link ?? ''),
  'description' => esc_html($clinic_data->clinic_name ?? '') . 'の歯列矯正の口コミ評判',
  'address' => [
    '@type' => 'PostalAddress',
    'addressLocality' => esc_html($clinic_data->address_locality ?? ''),
    'addressRegion' => esc_html($clinic_data->address_region ?? ''),
    'postalCode' => esc_html($clinic_data->postal_code ?? ''),
    'streetAddress' => esc_html($clinic_data->street_address ?? '')
  ],
  'geo' => [
    '@type' => 'GeoCoordinates',
    'latitude' => esc_html($clinic_data->latitude ?? ''),
    'longitude' => esc_html($clinic_data->longitude)
  ],
  'openingHoursSpecification' => $opening_hours ?? [],
  'department' => [
    '@type' => 'MedicalSpecialty',
    'name' => '矯正歯科',
    'medicalSpecialty' => $medical_specialties
  ],
  'paymentAccepted' => $payment_methods ?? [],
  'priceRange' => esc_html($clinic_data->invisalign ?? $clinic_data->kireilign_orthodontics ?? ''),
  'aggregateRating' => [
    '@type' => 'AggregateRating',
    'ratingValue' => null,
    'reviewCount' => count($reviews)
  ],
  'additionalProperty' => [
    [
      '@type' => 'PropertyValue',
      'name' => '駐車場の有無・駐車可能台数',
      'value' => $clinic_data->parking_availability ?? '',
    ],
    [
      '@type' => 'PropertyValue',
      'name' => 'アクセス',
      'value' => $clinic_data->nearest_station_access ?? ''
    ]
  ]
];

// JSON-LDスクリプトを出力
echo '<script type="application/ld+json">' . json_encode($json_ld, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
?>