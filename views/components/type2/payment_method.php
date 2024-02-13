<!-- wp:sgb/headings {"headingText":"お支払い方法","headingStyle":"hh hh1","headingTag":"h4","headingIconName":"","headingTextColor":"","headingBgColor1":"","headingBorderColor1":"","headingTextAlign":"center"} -->
<h4 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh1 sgb-heading__inner--center" style="font-size:1.2em;text-align:center"><span class="sgb-heading__text">お支払い方法</span></span></h4>
<!-- /wp:sgb/headings -->

<!-- wp:table {"className":"is-style-sango-table-responsive","headingColor":"var(\u002d\u002dsgb-main-color)","blockId":"id-fc9e19f6-e135-4980-b345-b52a37a00051"} -->
<figure class="wp-block-table is-style-sango-table-responsive">
  <table>
    <thead>
      <tr>
        <th style="color:#333;">現金</th>
        <th style="color:#333;">クレジットカード</th>
        <th style="color:#333;">デンタルローン</th>
        <th style="color:#333;">デビット・銀聯カード</th>
        <th style="color:#333;">電子マネー</th>
        <th style="color:#333;">銀行振込</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="has-text-align-center" data-align="center"><?php if ($clinic_data->payment_cash) : ?>◯<?php else : ?>-<?php endif; ?></td>
        <td class="has-text-align-center" data-align="center"><?php if ($clinic_data->payment_credit_card) : ?>◯<?php else : ?>-<?php endif; ?></td>
        <td class="has-text-align-center" data-align="center"><?php if ($clinic_data->payment_dental_loan) : ?>◯<?php else : ?>-<?php endif; ?></td>
        <td class="has-text-align-center" data-align="center"><?php if ($clinic_data->payment_unionpay) : ?>◯<?php else : ?>-<?php endif; ?></td>
        <td class="has-text-align-center" data-align="center"><?php if ($clinic_data->payment_e_money) : ?>◯<?php else : ?>-<?php endif; ?></td>
        <td class="has-text-align-center" data-align="center"><?php if ($clinic_data->payment_bank_transfer) : ?>◯<?php else : ?>-<?php endif; ?></td>
      </tr>
    </tbody>
  </table>
</figure>
<!-- /wp:table -->