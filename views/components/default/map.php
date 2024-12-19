<!-- wp:columns {"style":{"spacing":{"blockGap":"1.5em"}}} -->
<div class="wp-block-columns">
  <!-- wp:column {"width":"60%"} -->
  <div class="wp-block-column" style="flex-basis:60%">
    <!-- wp:sgb/custom {"code":"\u003cdiv class=\u0022gmap\u0022\u003e{{#mapCode}}{{{mapCode}}}{{/mapCode}}{{^mapCode}}{{#isAdmin}}\u003cdiv style=\u0022text-align: center;\u0022\u003e\u003cp style=\u0022background: #cfedff; padding: 0.9em 1.8em; border-radius: 6px; display: block;\u0022\u003e右メニューからマップコードを入力してください。\u003cbr\u003e\u003ca href=\u0022https://www.google.co.jp/maps/\u0022 target=\u0022_blank\u0022 rel=\u0022noreferrer noopener\u0022\u003eGoogle Map\u003c/a\u003eの\u003cb\u003e共有\u003c/b\u003eから\u003cb\u003e地図を埋め込む\u003c/b\u003eを押してコードを取得することができます。\u003c/p\u003e\u003cdiv class=\u0022exmap\u0022 style=\u0022position: relative; \u0022\u003e\u003ciframe src=\u0022https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9166.441745095588!2d139.7579313822937!3d35.681272414748975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c0d02d8064d%3A0xd11a5f0b379e6db7!2z55qH5bGF!5e0!3m2!1sja!2sjp!4v1655646410820!5m2!1sja!2sjp\u0022 style=\u0022border:0;\u0022 allowfullscreen=\u0022\u0022 loading=\u0022lazy\u0022 referrerpolicy=\u0022no-referrer-when-downgrade\u0022\u003e\u003c/iframe\u003e\u003c/div\u003e{{/isAdmin}}{{/mapCode}}\u003c/div\u003e","css":".sgb-custom__content:before {\ncontent: \u0022マップブロック\u0022;\n}\n\n.sgb-custom__content:after {\ncontent: \u0022マップブロック終わり\u0022;\n}\n\n.exmap:before {\n\tbackground-color: rgba(0,0,0,0.2);\n\tposition: absolute;\n\ttop: 0;\n\tright: 0;\n\tbottom: 0;\n\tleft: 0;\n\tcontent: ''\n}\n\n.sgb-custom__content iframe {\n    pointer-events: none !important;\n}\n\n.gmap, .exmap {\n\twidth: 100%;\n\taspect-ratio: var(\u002d\u002dsgb\u002d\u002dcustom\u002d\u002dmap-height,16) / var(\u002d\u002dsgb\u002d\u002dcustom\u002d\u002dmap-width,9);\n}\n\niframe {\n\twidth: 100%;\n\theight: 100%;\n}","scopedCSS":"#id-3c5e609b-b86e-4a8a-829c-79b0ed2d8c6c .sgb-custom__content:before {\ncontent: \u0022マップブロック\u0022;\n}\n\n#id-3c5e609b-b86e-4a8a-829c-79b0ed2d8c6c .sgb-custom__content:after {\ncontent: \u0022マップブロック終わり\u0022;\n}\n\n#id-3c5e609b-b86e-4a8a-829c-79b0ed2d8c6c .exmap:before {\n\tbackground-color: rgba(0,0,0,0.2);\n\tposition: absolute;\n\ttop: 0;\n\tright: 0;\n\tbottom: 0;\n\tleft: 0;\n\tcontent: ''\n}\n\n#id-3c5e609b-b86e-4a8a-829c-79b0ed2d8c6c .sgb-custom__content iframe {\n    pointer-events: none !important;\n}\n\n#id-3c5e609b-b86e-4a8a-829c-79b0ed2d8c6c .gmap,#id-3c5e609b-b86e-4a8a-829c-79b0ed2d8c6c  .exmap {\n\twidth: 100%;\n\taspect-ratio: var(\u002d\u002dsgb\u002d\u002dcustom\u002d\u002dmap-height,16) / var(\u002d\u002dsgb\u002d\u002dcustom\u002d\u002dmap-width,9);\n}\n\n#id-3c5e609b-b86e-4a8a-829c-79b0ed2d8c6c iframe {\n\twidth: 100%;\n\theight: 100%;\n}","blockId":"id-3c5e609b-b86e-4a8a-829c-79b0ed2d8c6c","customControls":[{"name":"Google Mapコード","variableName":"mapCode","defaultValue":"","defaultType":"string","useTextarea":true,"useRadio":false,"useCheckbox":false,"options":[],"min":0,"max":0,"step":1,"label":"","variableType":"string","description":"Google Mapから取得したコードを入力してください","value":"","disableCSS":true,"disableJS":true},{"name":"マップ高さ(比率)","variableName":"mapHeight","defaultValue":"","defaultType":"string","useTextarea":false,"useRadio":true,"useCheckbox":false,"options":[{"label":"左寄せ","value":"left"},{"label":"中央寄せ","value":"center"},{"label":"右寄せ","value":"right"}],"min":1,"max":20,"step":1,"label":"","variableType":"number","disableJS":true,"disableCSS":false,"value":7},{"name":"マップ幅(比率)","variableName":"mapWidth","defaultValue":"","defaultType":"string","useTextarea":false,"useRadio":false,"useCheckbox":false,"options":[],"min":1,"max":20,"step":1,"label":"","variableType":"number","disableJS":true,"value":6,"description":"縦と横の幅の比率を設定します。\n例) 1:1 16:9"}]} -->
    <div class="wp-block-sgb-custom">
      <div>
        <?php if (!empty($clinic_data->place_id)) : ?>
          <div class="gmap">
            <iframe width="400" height="250" frameborder="0" loading="lazy" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=<?php echo esc_html(get_theme_mod('google_place_api_key', '')); ?>
&maptype=roadmap&zoom=15&q=place_id:<?php echo esc_html($clinic_data->place_id); ?>" allowfullscreen>
            </iframe>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <!-- /wp:sgb/custom -->
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:column -->

  <!-- wp:column {"width":"40%"} -->
  <div class="wp-block-column" style="flex-basis:40%">
    <!-- wp:sgb/headings {"headingText":"SANGO動物病院","headingIconName":"paw","css":".sgb-heading {\n    margin-top: 0;\n}","scopedCSS":"#id-88445641-d7c0-40ef-a01e-ac7c74c16b11 .sgb-heading {\n    margin-top: 0;\n}","blockId":"id-88445641-d7c0-40ef-a01e-ac7c74c16b11"} -->
    <p class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner sgb-heading--type1 with-icon" style="background-color:transparent;border-color:transparent;font-size:1.2em"><span class="sgb-heading__text" style="color:#333"><?php echo esc_html($clinic_data->clinic_name); ?></span></span></p>
    <!-- /wp:sgb/headings -->

    <!-- wp:paragraph {"style":{"typography":{"fontSize":"15px"}}} -->
    <p style="font-size:15px"><?php echo esc_html($clinic_data->parking_availability); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:sgb/message {"boxColor":"#0099dd","bgColor":"whitesmoke","icon":"fas fa-train","borderRadius":10,"css":".sng-box-msg__title {\n    display: none;\n}\n.memo_ttl {\n\tfont-size: 1em;\n}\n\n.memo {\n    display: flex;\n    flex-direction: row;\n    align-items: center;\n\tgap: .35em;\n}\n\n.wp-block-sgb-message .sng-box-msg__contents {\n    padding: 0;\n}\n\n.sng-box-msg__icon i {\n    color: inherit;\n}\n\n.sng-box-msg__icon {\n    background: transparent !important;\n}\n\n.sng-box-msg__icon {\n    font-size: 21px;\n}","scopedCSS":"#id-8b2d9a4e-debe-4f8e-ba57-78a99f73911b .sng-box-msg__title {\n    display: none;\n}\n#id-8b2d9a4e-debe-4f8e-ba57-78a99f73911b .memo_ttl {\n\tfont-size: 1em;\n}\n\n#id-8b2d9a4e-debe-4f8e-ba57-78a99f73911b .memo {\n    display: flex;\n    flex-direction: row;\n    align-items: center;\n\tgap: .35em;\n}\n\n#id-8b2d9a4e-debe-4f8e-ba57-78a99f73911b .wp-block-sgb-message .sng-box-msg__contents {\n    padding: 0;\n}\n\n#id-8b2d9a4e-debe-4f8e-ba57-78a99f73911b .sng-box-msg__icon i {\n    color: inherit;\n}\n\n#id-8b2d9a4e-debe-4f8e-ba57-78a99f73911b .sng-box-msg__icon {\n    background: transparent !important;\n}\n\n#id-8b2d9a4e-debe-4f8e-ba57-78a99f73911b .sng-box-msg__icon {\n    font-size: 21px;\n}","blockId":"id-8b2d9a4e-debe-4f8e-ba57-78a99f73911b"} -->
    <div class="wp-block-sgb-message">
      <div class="memo sng-shadow-0" style="border-radius:10px;background-color:whitesmoke;color:#0099dd">
        <div class="memo_ttl dfont"><span class="sng-box-msg__icon" style="background:#0099dd"><i class="fas fa-train"></i></span>
          <div class="sng-box-msg__title"></div>
        </div>
        <div class="sng-box-msg__contents">
          <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
          <p style="font-size:14px"><strong><?php echo esc_html($clinic_data->nearest_station_access); ?></strong></p>
          <!-- /wp:paragraph -->
        </div>
      </div>
    </div>
    <!-- /wp:sgb/message -->

    <!-- /wp:sgb/btn -->
  </div>
  <!-- /wp:column -->
</div>
<!-- /wp:columns -->