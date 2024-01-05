<?php
class ClinicData {
    public $uid,$clinic_name,$clinic_website_link,$article_region_name,$orthodontics_front,$orthodontics_back,$invisalign,$kireilign_orthodontics,$unknown_type,$type1,$type1_cost,$type2,$type2_cost,$type3,$type3_cost,$type4,$type4_cost,$catchphrase,$headline1,$paragraph1,$headline2,$paragraph2,$headline3,$paragraph3,$memo,$review1,$review1_source,$review1_link,$review2,$review2_source,$review2_link,$image1_link,$image2_link,$image3_link,$image4_link,$director_photo_link,$director_name,$director_introduction,$director_introduction_url,$payment_cash,$payment_credit_card,$payment_dental_loan,$payment_unionpay,$payment_e_money,$payment_bank_transfer,$nearest_station_access,$parking_availability,$morning_hours,$afternoon_hours,$monday_morning,$monday_afternoon,$tuesday_morning,$tuesday_afternoon,$wednesday_morning,$wednesday_afternoon,$thursday_morning,$thursday_afternoon,$friday_morning,$friday_afternoon,$saturday_morning,$saturday_afternoon,$sunday_morning,$sunday_afternoon,$holiday_morning,$holiday_afternoon,$additional_notes,$place_id,$remarks,$cta;
    public function __construct($row) {
      $this->uid = $row[0] ?? '' ; //uid
      $this->clinic_name = $row[1] ?? '' ; //歯科医院名
      $this->clinic_website_link = $row[2] ?? '' ; //医院HPのリンク
      // $this->article_region_name = $row[3] ?? '' ; //記事地域名１
      $this->orthodontics_front = $row[4] ?? '' ; //表側矯正
      $this->orthodontics_back = $row[5] ?? '' ; //裏側矯正
      $this->invisalign = $row[6] ?? '' ; //インビザライン
      $this->kireilign_orthodontics = $row[7] ?? '' ; //キレイライン矯正
      // $this->unknown_type = $row[8] ?? '' ; //種類が不明な場合
      $this->type1 = $row[9] ?? '' ; //種類①
      $this->type1_cost = $row[10] ?? '' ; //種類①の費用
      $this->type2 = $row[11] ?? '' ; //種類②
      $this->type2_cost = $row[12] ?? '' ; //種類②の費用
      $this->type3 = $row[13] ?? '' ; //種類③
      $this->type3_cost = $row[14] ?? '' ; //種類③の費用
      $this->type4 = $row[15] ?? '' ; //種類④
      $this->type4_cost = $row[16] ?? '' ; //種類④の費用
      $this->catchphrase = $row[17] ?? '' ; //キャッチコピー（15~30字）
      $this->headline1 = $row[18] ?? '' ; //見出し1（10〜30字）
      $this->paragraph1 = $row[19] ?? '' ; //文章1（100〜150字）
      $this->headline2 = $row[20] ?? '' ; //見出し2（10〜30字）
      $this->paragraph2 = $row[21] ?? '' ; //文章2（100〜150字）
      $this->headline3 = $row[22] ?? '' ; //見出し3（10〜30字）
      $this->paragraph3 = $row[23] ?? '' ; //文章3（100〜150字）
      // $this->memo = $row[24] ?? '' ; //メモ
      $this->review1 = $row[25] ?? '' ; //口コミ①（30~70字）
      $this->review1_source = $row[26] ?? '' ; //口コミ①の引用元
      $this->review1_link = $row[27] ?? '' ; //口コミ①の引用リンク
      $this->review2 = $row[28] ?? '' ; //口コミ②（30~70字）
      $this->review2_source = $row[29] ?? '' ; //口コミ②の引用元
      $this->review2_link = $row[30] ?? '' ; //口コミ②の引用リンク
      $this->image1_link = $row[31] ?? '' ; //1枚目のリンク
      $this->image2_link = $row[32] ?? '' ; //2枚目のリンク
      $this->image3_link = $row[33] ?? '' ; //3枚目のリンク
      $this->image4_link = $row[34] ?? '' ; //4枚目のリンク
      $this->director_photo_link = $row[35] ?? '' ; //院長写真のリンク
      $this->director_name = $row[36] ?? '' ; //院長名
      $this->director_introduction = $row[37] ?? '' ; //院長紹介文
      $this->director_introduction_url = $row[38] ?? '' ; //院長紹介文URL
      $this->payment_cash = $row[39] ?? '' ; //現金
      $this->payment_credit_card = $row[40] ?? '' ; //クレジットカード
      $this->payment_dental_loan = $row[41] ?? '' ; //デンタルローン
      $this->payment_unionpay = $row[42] ?? '' ; //銀聯
      $this->payment_e_money = $row[43] ?? '' ; //電子マネー
      $this->payment_bank_transfer = $row[44] ?? '' ; //銀行振込
      $this->nearest_station_access = $row[45] ?? '' ; //最寄り駅 最寄り駅からのアクセス
      $this->parking_availability = $row[46] ?? '' ; //駐車場の有無・駐車可能台数
      $this->morning_hours = $row[47] ?? '' ; //午前診療時間
      $this->afternoon_hours = $row[48] ?? '' ; //午後診療時間
      $this->monday_morning = $row[49] ?? '' ; //月曜午前
      $this->monday_afternoon = $row[50] ?? '' ; //月曜午後
      $this->tuesday_morning = $row[51] ?? '' ; //火曜午前
      $this->tuesday_afternoon = $row[52] ?? '' ; //火曜午後
      $this->wednesday_morning = $row[53] ?? '' ; //水曜午前
      $this->wednesday_afternoon = $row[54] ?? '' ; //水曜午後
      $this->thursday_morning = $row[55] ?? '' ; //木曜午前
      $this->thursday_afternoon = $row[56] ?? '' ; //木曜午後
      $this->friday_morning = $row[57] ?? '' ; //金曜午前
      $this->friday_afternoon = $row[58] ?? '' ; //金曜午後
      $this->saturday_morning = $row[59] ?? '' ; //土曜午前
      $this->saturday_afternoon = $row[60] ?? '' ; //土曜午後
      $this->sunday_morning = $row[61] ?? '' ; //日曜午前
      $this->sunday_afternoon = $row[62] ?? '' ; //日曜午後
      $this->holiday_morning = $row[63] ?? '' ; //祝日午前
      $this->holiday_afternoon = $row[64] ?? '' ; //祝日午後
      $this->additional_notes = $row[65] ?? '' ; //補足の文章
      $this->place_id = $row[66] ?? '' ; //PlaceID
      // $this->remarks = $row[67] ?? '' ; //備考
      $this->cta = $row[68] ?? '' ; //CTA
    }

    // 必要に応じて追加のメソッドを定義
}
