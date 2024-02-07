<?php if (!empty($clinics)) : ?>
  <!-- wp:table {"className":"is-style-sango-table-responsive",
  "headingFirstCol":true,"headingColor":"#333",
  "headingBgColor":"#f4f4f4",
  "tableWidth":800,"cellMinWidth":"50",
  "cellMaxWidth":"1000",
  "iconSize":2,"css":"table tr th:first-child,\ntable tr td:first-child {\n\twidth: 30px;\n    font-size: 14px;\n}\n\n.sng-inline-btn {\n\tfont-size: 12px;\n}\n\nthead th {\n\tfont-size: 14px;\n}\n\n.scroll-hint-icon-wrap {\n\tz-index: 10;\n}\n\n.sgb-table-icon:before {\n\topacity: calc(var(\u002d\u002dsgb\u002d\u002dcustom\u002d\u002dicon-opacity, 100) / 100);\n}",
"scopedCSS":"#id-b7eee274-1578-4c6d-86d2-6d7999bdd1e6 table tr th:first-child,\n#id-b7eee274-1578-4c6d-86d2-6d7999bdd1e6 table tr td:first-child {\n\twidth: 30px;\n    font-size: 14px;\n}\n\n#id-b7eee274-1578-4c6d-86d2-6d7999bdd1e6 .sng-inline-btn {\n\tfont-size: 12px;\n}\n\n#id-b7eee274-1578-4c6d-86d2-6d7999bdd1e6 thead th {\n\tfont-size: 14px;\n}\n\n#id-b7eee274-1578-4c6d-86d2-6d7999bdd1e6 .scroll-hint-icon-wrap {\n\tz-index: 10;\n}\n\n#id-b7eee274-1578-4c6d-86d2-6d7999bdd1e6 .sgb-table-icon:before {\n\topacity: calc(var(\u002d\u002dsgb\u002d\u002dcustom\u002d\u002dicon-opacity, 100) / 100);\n}",
"blockId":"id-d4289f08-ca7f-438c-8c89-68eb1a1fd38f",
"customControls":[{"name":"アイコンの透明度",
  "variableName":"iconOpacity",
  "defaultValue":"",
  "defaultType":"string",
  "options":[],"min":0,"max":100,"variableType":"number",
  "disableJS":true,"value":80}]} -->
  <figure class="wp-block-table is-style-sango-table-responsive">
    <table>
      <thead>
        <tr>
          <th class="has-text-align-center" data-align="center">クリニック</th>
          <?php foreach ($clinics as $clinic_data) : ?>
            <th class="has-text-align-center" data-align="center"><?php echo esc_html($clinic_data->clinic_name); ?></th>
          <?php endforeach; ?>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="has-text-align-center" data-align="center">
          </td>
          <?php foreach ($clinics as $clinic_data) : ?>
            <td class="has-text-align-center" data-align="center">
              <?php include(get_stylesheet_directory() . '/views/components/compare_table/screenshot.php'); ?>
            </td>
          <?php endforeach; ?>
        </tr>
        <tr>
          <td class="has-text-align-center" data-align="center">最安価格</td>
          <?php
          $index = 0; // インデックス用のカウンター
          foreach ($clinics as $clinic_data) : ?>
            <td class="has-text-align-center" data-align="center">
              <?php if ($index === 0) : ?>
                <span class="keiko_blue">
                <?php else : ?>
                  <span class="small">
                  <?php endif; ?>
                  <?php if (!empty($clinic_data->type1)) : ?>
                    <strong><?php echo esc_html($clinic_data->type1_cost); ?>円(税抜目安)</strong>
                  <?php endif; ?>
                  </span>
            </td>

          <?php $index++;
          endforeach; ?>
        </tr>
        <tr>
          <td class="has-text-align-center" data-align="center">最安治療</td>
          <?php
          foreach ($clinics as $clinic_data) : ?>
            <td class="has-text-align-center" data-align="center">
              <span class="keiko_blue">
                <span class="small">
                  <?php if (!empty($clinic_data->type1)) : ?>
                    <?php echo esc_html($clinic_data->type1); ?>
                  <?php endif; ?>
                </span>
            </td>
          <?php endforeach; ?>
        </tr>
        <tr>
          <td class="has-text-align-center" data-align="center">おすすめポイント</td>
          <?php foreach ($clinics as $clinic_data) : ?>
            <td class="has-text-align-center" data-align="center">
              <?php include(get_stylesheet_directory() . '/views/components/compare_table/catchcopy.php'); ?>
            </td>
          <?php endforeach; ?>

        </tr>
        <tr>
          <td class="has-text-align-center" data-align="center">詳細</td>
          <?php
          $index = 0; // インデックス用のカウンター
          foreach ($clinics as $clinic_data) : ?>
            <td class="has-text-align-center" data-align="center">
              <a href="<?php
                        if (!empty($clinic_data->cta)) {
                          echo esc_url(generate_cta_url($clinic_data->cta));
                        } else {
                          echo esc_url($clinic_data->clinic_website_link);
                        }
                        ?>" title="">
                <span class="sng-inline-btn">
                  <?php if ($index === 0) : ?>
                    <span class="big">
                    <?php else : ?>
                      <span>
                      <?php endif; ?>
                      詳細を確認してみる</span>
                    </span>
              </a>
              </span>
            </td>

          <?php $index++;
          endforeach; ?>
        </tr>
      </tbody>
    </table>
  </figure>
  <!-- /wp:table -->
<?php endif; ?>