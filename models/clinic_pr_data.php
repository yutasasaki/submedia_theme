<?php
class ClinicPRData {
    public $uid,
          $place_id,
          $clinic_name,
          $catchphrase,
          $headline1,
          $paragraph1,
          $headline2,
          $paragraph2,
          $headline3,
          $paragraph3;
    public function __construct($row) {
      $this->uid = $row[0] ?? '' ; //uid
      $this->place_id = $row[1] ?? ''; //PlaceID
      $this->clinic_name = $row[2] ?? '' ; //歯科医院名
      $this->catchphrase = $row[3] ?? '' ; //キャッチコピー（15~30字）
      $this->headline1 = $row[4] ?? '' ; //見出し1（10〜30字）
      $this->paragraph1 = $row[5] ?? '' ; //文章1（100〜150字）
      $this->headline2 = $row[6] ?? '' ; //見出し2（10〜30字）
      $this->paragraph2 = $row[7] ?? '' ; //文章2（100〜150字）
      $this->headline3 = $row[8] ?? '' ; //見出し3（10〜30字）
      $this->paragraph3 = $row[9] ?? '' ; //文章3（100〜150字）
      
    }

    // 必要に応じて追加のメソッドを定義
}
