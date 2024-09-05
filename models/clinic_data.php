<?php
class ClinicData {
    public $uid, $clinic_name, $clinic_website_link, $article_region_name, $orthodontics_front, $orthodontics_back, $invisalign, $kireilign_orthodontics, $unknown_type, $type1, $type1_cost, $type2, $type2_cost, $type3, $type3_cost, $type4, $type4_cost, $catchphrase, $headline1, $paragraph1, $headline2, $paragraph2, $headline3, $paragraph3, $memo, $review1, $review1_source, $review1_link, $review2, $review2_source, $review2_link, $image1_link, $image2_link, $image3_link, $image4_link, $director_photo_link, $director_name, $director_introduction, $director_introduction_url, $payment_cash, $payment_credit_card, $payment_dental_loan, $payment_unionpay, $payment_e_money, $payment_bank_transfer, $nearest_station_access, $parking_availability, $morning_hours, $afternoon_hours, $monday_morning, $monday_afternoon, $tuesday_morning, $tuesday_afternoon, $wednesday_morning, $wednesday_afternoon, $thursday_morning, $thursday_afternoon, $friday_morning, $friday_afternoon, $saturday_morning, $saturday_afternoon, $sunday_morning, $sunday_afternoon, $holiday_morning, $holiday_afternoon, $additional_notes, $place_id, $remarks, $cta, $clinic_name_romaji, $doctor_name_romaji, $is_reserve, $is_submedia, $is_kireilign, $json_ld;

    public function __construct($row) {
        $this->uid = $row[0] ?? ''; // uid
        $this->clinic_name = $row[1] ?? ''; // 歯科医院名
        $this->clinic_website_link = $row[2] ?? ''; // 医院HPのリンク
        $this->article_region_name = $row[3] ?? ''; // 記事地域名１
        $this->orthodontics_front = $row[4] ?? ''; // 表側矯正
        $this->orthodontics_back = $row[5] ?? ''; // 裏側矯正
        $this->invisalign = $row[6] ?? ''; // インビザライン
        $this->kireilign_orthodontics = $row[7] ?? ''; // キレイライン矯正
        // $this->unknown_type = $row[8] ?? ''; // 種類が不明な場合
        $this->type1 = $row[9] ?? ''; // 種類①
        $this->type1_cost = $row[10] ?? ''; // 種類①の費用
        $this->type2 = $row[11] ?? ''; // 種類②
        $this->type2_cost = $row[12] ?? ''; // 種類②の費用
        $this->type3 = $row[13] ?? ''; // 種類③
        $this->type3_cost = $row[14] ?? ''; // 種類③の費用
        $this->type4 = $row[15] ?? ''; // 種類④
        $this->type4_cost = $row[16] ?? ''; // 種類④の費用
        $this->catchphrase = $row[17] ?? ''; // キャッチコピー（15~30字）
        $this->headline1 = $row[18] ?? ''; // 見出し1（10〜30字）
        $this->paragraph1 = $row[19] ?? ''; // 文章1（100〜150字）
        $this->headline2 = $row[20] ?? ''; // 見出し2（10〜30字）
        $this->paragraph2 = $row[21] ?? ''; // 文章2（100〜150字）
        $this->headline3 = $row[22] ?? ''; // 見出し3（10〜30字）
        $this->paragraph3 = $row[23] ?? ''; // 文章3（100〜150字）
        // $this->memo = $row[24] ?? ''; // メモ
        $this->review1 = $row[25] ?? ''; // 口コミ①（30~70字）
        $this->review1_source = $row[26] ?? ''; // 口コミ①の引用元
        $this->review1_link = $row[27] ?? ''; // 口コミ①の引用リンク
        $this->review2 = $row[28] ?? ''; // 口コミ②（30~70字）
        $this->review2_source = $row[29] ?? ''; // 口コミ②の引用元
        $this->review2_link = $row[30] ?? ''; // 口コミ②の引用リンク
        $this->image1_link = $row[31] ?? ''; // 1枚目のリンク
        $this->image2_link = $row[32] ?? ''; // 2枚目のリンク
        $this->image3_link = $row[33] ?? ''; // 3枚目のリンク
        $this->image4_link = $row[34] ?? ''; // 4枚目のリンク
        $this->director_photo_link = $row[35] ?? ''; // 院長写真のリンク
        $this->director_name = $row[36] ?? ''; // 院長名
        $this->director_introduction = $row[37] ?? ''; // 院長紹介文
        $this->director_introduction_url = $row[38] ?? ''; // 院長紹介文URL
        $this->payment_cash = $row[39] ?? ''; // 現金
        $this->payment_credit_card = $row[40] ?? ''; // クレジットカード
        $this->payment_dental_loan = $row[41] ?? ''; // デンタルローン
        $this->payment_unionpay = $row[42] ?? ''; // 銀聯
        $this->payment_e_money = $row[43] ?? ''; // 電子マネー
        $this->payment_bank_transfer = $row[44] ?? ''; // 銀行振込
        $this->nearest_station_access = $row[45] ?? ''; // 最寄り駅 最寄り駅からのアクセス
        $this->parking_availability = $row[46] ?? ''; // 駐車場の有無・駐車可能台数
        $this->morning_hours = $row[47] ?? ''; // 午前診療時間
        $this->afternoon_hours = $row[48] ?? ''; // 午後診療時間
        $this->monday_morning = $row[49] ?? ''; // 月曜午前
        $this->monday_afternoon = $row[50] ?? ''; // 月曜午後
        $this->tuesday_morning = $row[51] ?? ''; // 火曜午前
        $this->tuesday_afternoon = $row[52] ?? ''; // 火曜午後
        $this->wednesday_morning = $row[53] ?? ''; // 水曜午前
        $this->wednesday_afternoon = $row[54] ?? ''; // 水曜午後
        $this->thursday_morning = $row[55] ?? ''; // 木曜午前
        $this->thursday_afternoon = $row[56] ?? ''; // 木曜午後
        $this->friday_morning = $row[57] ?? ''; // 金曜午前
        $this->friday_afternoon = $row[58] ?? ''; // 金曜午後
        $this->saturday_morning = $row[59] ?? ''; // 土曜午前
        $this->saturday_afternoon = $row[60] ?? ''; // 土曜午後
        $this->sunday_morning = $row[61] ?? ''; // 日曜午前
        $this->sunday_afternoon = $row[62] ?? ''; // 日曜午後
        $this->holiday_morning = $row[63] ?? ''; // 祝日午前
        $this->holiday_afternoon = $row[64] ?? ''; // 祝日午後
        $this->additional_notes = $row[65] ?? ''; // 補足の文章
        $this->place_id = $row[66] ?? ''; // PlaceID
        // $this->remarks = $row[67] ?? ''; // 備考
        $this->cta = $row[68] ?? ''; // CTA
        $this->clinic_name_romaji = $row[69] ?? ''; // ローマ字クリニック名
        $this->doctor_name_romaji = $row[70] ?? '';  // ローマ字歯科医
        $this->is_submedia = ($row[72] === 'あり') ? true : false;  // サブメディア契約ステータス
        $this->is_reserve = ($row[73] === 'あり') ? true : false;  // 予約契約ステータス
        $this->is_kireilign = ($row[74] === 'あり') ? true : false;  // KL契約ステータス
        $this->json_ld = '<script type="application/ld+json">' . $this->generateJsonLd() . '</script>';
    }

    public function generateJsonLd() {
        // WordPressの関数を使用して現在の記事URLを取得
        $current_url = get_permalink();
        
        $json_ld = [
            "@context" => "http://schema.org",
            "@type" => "MedicalBusiness",
            "@id" => $this->clinic_name_romaji ? $current_url . urlencode($this->clinic_name_romaji) : null,
            "name" => $this->clinic_name,
        ];

        // 画像リンクが存在する場合のみ追加
        $images = array_filter([$this->image1_link, $this->image2_link, $this->image3_link, $this->image4_link]);
        if (!empty($images)) {
            $json_ld['image'] = $images;
        }

        // 住所が存在する場合のみ追加
        if ($this->article_region_name) {
            $json_ld['address'] = [
                "@type" => "PostalAddress",
                "streetAddress" => $this->article_region_name,
                "addressCountry" => "JP",
            ];
        }

        // クリニックのウェブサイトリンクが存在する場合のみ追加
        if ($this->clinic_website_link) {
            $json_ld['url'] = $this->clinic_website_link;
        }

        // 特殊な営業時間表記に基づいて営業時間を設定
        $opening_hours = [];


        // 曜日ごとの営業時間を追加
        if ($this->monday_morning && $this->monday_afternoon) {
            $opening_hours[] = $this->addOpeningHours("Monday", $this->monday_morning, $this->monday_afternoon, $this->morning_hours, $this->afternoon_hours);
        }

        if ($this->tuesday_morning && $this->tuesday_afternoon) {
            $opening_hours[] = $this->addOpeningHours("Tuesday", $this->tuesday_morning, $this->tuesday_afternoon, $this->morning_hours, $this->afternoon_hours);
        }

        if ($this->wednesday_morning && $this->wednesday_afternoon) {
            $opening_hours[] = $this->addOpeningHours("Wednesday", $this->wednesday_morning, $this->wednesday_afternoon, $this->morning_hours, $this->afternoon_hours);
        }

        if ($this->thursday_morning && $this->thursday_afternoon) {
            $opening_hours[] = $this->addOpeningHours("Thursday", $this->thursday_morning, $this->thursday_afternoon, $this->morning_hours, $this->afternoon_hours);
        }

        if ($this->friday_morning && $this->friday_afternoon) {
            $opening_hours[] = $this->addOpeningHours("Friday", $this->friday_morning, $this->friday_afternoon, $this->morning_hours, $this->afternoon_hours);
        }

        if ($this->saturday_morning && $this->saturday_afternoon) {
            $opening_hours[] = $this->addOpeningHours("Saturday", $this->saturday_morning, $this->saturday_afternoon, $this->morning_hours, $this->afternoon_hours);
        }

        if ($this->sunday_morning && $this->sunday_afternoon) {
            $opening_hours[] = $this->addOpeningHours("Sunday", $this->sunday_morning, $this->sunday_afternoon, $this->morning_hours, $this->afternoon_hours);
        }

        if ($this->holiday_morning && $this->holiday_afternoon) {
            $opening_hours[] = $this->addOpeningHours("PublicHolidays", $this->holiday_morning, $this->holiday_afternoon, $this->morning_hours, $this->afternoon_hours);
        }

        // 営業時間が存在する場合のみ追加
        if (!empty($opening_hours)) {
            $json_ld['openingHoursSpecification'] = $opening_hours;
        }

        // レビューが存在する場合のみ追加
        $reviews = [];
        if ($this->review1) {
            $reviews[] = [
                "@type" => "Review",
                "description" => $this->review1,
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => 5,
                    "bestRating" => 5
                ],
                "author" => [
                    "@type" => "Person",
                    "name" => $this->review1_source
                ]
            ];
        }

        if ($this->review2) {
            $reviews[] = [
                "@type" => "Review",
                "description" => $this->review2,
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => 5,
                    "bestRating" => 5
                ],
                "author" => [
                    "@type" => "Person",
                    "name" => $this->review2_source
                ]
            ];
        }

        if (!empty($reviews)) {
            $json_ld['review'] = $reviews;
        }

        // レビューが存在する場合のみ aggregateRating を追加
        if (!empty($reviews)) {
            $json_ld['aggregateRating'] = [
                "@type" => "AggregateRating",
                "ratingValue" => 5,
                "reviewCount" => count($reviews)
            ];
        }

        // 提供されるサービスのリストが存在する場合のみ追加
        $offers = [];
        $position = 1; // ListItemの位置を追跡するための変数

        if ($this->type1 && $this->type1_cost) {
          $offers[] = [
            "@type" => "ListItem",
            "position" => $position++,
            "item" => [
              "@type" => "Service",
              "name" => $this->type1,
              "offers" => [
                "@type" => "Offer",
                "price" => $this->type1_cost,
                "priceCurrency" => "JPY"
              ]
            ]
          ];
        }

        if ($this->type2 && $this->type2_cost) {
          $offers[] = [
            "@type" => "ListItem",
            "position" => $position++,
            "item" => [
              "@type" => "Service",
              "name" => $this->type2,
              "offers" => [
                "@type" => "Offer",
                "price" => $this->type2_cost,
                "priceCurrency" => "JPY"
              ]
            ]
          ];
        }

        if ($this->type3 && $this->type3_cost) {
          $offers[] = [
            "@type" => "ListItem",
            "position" => $position++,
            "item" => [
              "@type" => "Service",
              "name" => $this->type3,
              "offers" => [
                "@type" => "Offer",
                "price" => $this->type3_cost,
                "priceCurrency" => "JPY"
              ]
            ]
          ];
        }

        if ($this->type4 && $this->type4_cost) {
          $offers[] = [
            "@type" => "ListItem",
            "position" => $position++,
            "item" => [
              "@type" => "Service",
              "name" => $this->type4,
              "offers" => [
                "@type" => "Offer",
                "price" => $this->type4_cost,
                "priceCurrency" => "JPY"
              ]
            ]
          ];
        }

        if (!empty($offers)) {
          $json_ld['hasOfferCatalog'] = [
            "@type" => "OfferCatalog",
            "name" => "施術メニュー",
            "itemListElement" => $offers
          ];
        }

        // @idが設定されていない場合は削除
        if (empty($json_ld["@id"])) {
            unset($json_ld["@id"]);
        }

        return json_encode($json_ld, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

  // 営業時間を設定するためのメソッド
  private function addOpeningHours($day, $morning, $afternoon, $global_morning, $global_afternoon)
  {
    $closed_symbols = ['×', 'ー', '-'];

    // 閉店記号の場合は営業時間外として処理
    if (in_array($morning, $closed_symbols) || in_array($afternoon, $closed_symbols)) {
      return [
        "@type" => "OpeningHoursSpecification",
        "dayOfWeek" => $day,
        "opens" => "Closed",
        "closes" => "Closed"
      ];
    } else {
      // "～" で時間を分ける
      if (strpos($global_morning, '～') !== false) {
        list($opens, $closes) = explode('～', $global_morning);
      } else {
        $opens = $global_morning;  // 分割できない場合はそのまま
        $closes = '';
      }

      return [
        "@type" => "OpeningHoursSpecification",
        "dayOfWeek" => $day,
        "opens" => $opens,
        "closes" => $closes
      ];
    }
  }
    
  function replace_categories_in_json_ld($base_ld_json)
  {
    // JSON_LDのデータを取得
    $json_ld = $base_ld_json ?? null;

    // json_ldがnullまたは空の場合はそのまま返す
    if (empty($json_ld)) {
      return $json_ld;
    }

    // 投稿IDを取得（例：投稿がカスタムフィールドに基づいている場合）
    $post_id = get_the_ID();

    // 投稿の全てのカテゴリを取得
    $categories = get_the_category($post_id);

    // カテゴリがない場合はそのまま返す
    if (empty($categories)) {
      return $json_ld;
    }

    // 親カテゴリと子カテゴリを識別する
    $parent_category = null;
    $child_category = null;

    foreach ($categories as $category) {
      if ($category->parent == 0) {
        $parent_category = $category->name;
      } else {
        $child_category = $category->name;
      }

      // 両方のカテゴリが見つかった場合はループを終了
      if ($parent_category && $child_category) {
        break;
      }
    }

    // 親カテゴリまたは子カテゴリがない場合は「なし」を設定
    if (!$parent_category) {
      $parent_category = 'なし';
    }
    if (!$child_category) {
      $child_category = 'なし';
    }

    // JSON_LDの中のラベルをカテゴリ名で置換
    $json_ld = str_replace('[エリア]', $parent_category, $json_ld);
    $json_ld = str_replace('[都道府県]', $child_category, $json_ld);

    return $json_ld;
  }
}