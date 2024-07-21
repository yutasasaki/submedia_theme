<!-- wp:sgb/headings {"headingText":"<?php echo esc_html($clinic_data->clinic_name); ?>の診療時間","headingStyle":"hh hh1","headingTag":"h4","headingIconName":"","headingTextColor":"","headingBgColor1":"","headingBorderColor1":"","headingTextAlign":"center"} -->
<h4 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh1 sgb-heading__inner--center" style="font-size:1.2em;text-align:center"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->clinic_name); ?>の診療時間</span></span></h4>
<!-- /wp:sgb/headings -->
<figure class="wp-block-table overflow-x-scroll">
  <table>
    <thead>
      <tr>
        <th class="whitespace-nowrap">診療時間</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th>土</th>
        <th>日</th>
        <th>祝日</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="whitespace-nowrap has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->morning_hours); ?></span></td>
        <td class="has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->monday_morning); ?></span></td>
        <td class="has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->tuesday_morning); ?></span></td>
        <td class="has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->wednesday_morning); ?></span></td>
        <td class="has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->thursday_morning); ?></span></td>
        <td class="has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->friday_morning); ?></span></td>
        <td class="has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->saturday_morning); ?></span></td>
        <td class="has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->sunday_morning); ?></span></td>
        <td class="has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->holiday_morning); ?></span></td>
      </tr>
      <tr>
        <td class="has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->afternoon_hours); ?></span></td>
        <td class="has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->monday_afternoon); ?></span></td>
        <td class="has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->tuesday_afternoon); ?></span></td>
        <td class="has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->wednesday_afternoon); ?></span></td>
        <td class="has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->thursday_afternoon); ?></span></td>
        <td class="has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->friday_afternoon); ?></span></td>
        <td class="has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->saturday_afternoon); ?></span></td>
        <td class="has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->sunday_afternoon); ?></span></td>
        <td class="has-text-align-center" data-align="center"><span><?php echo esc_html($clinic_data->holiday_afternoon); ?></span></td>
      </tr>
    </tbody>
  </table>
  <figcaption class="wp-element-caption"><?php echo esc_html($clinic_data->additional_notes); ?></figcaption>
</figure>