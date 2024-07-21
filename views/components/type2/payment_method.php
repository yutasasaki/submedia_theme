<h4>お支払い方法</h4>
<figure class="wp-block-table is-style-sango-table-responsive overflow-x-auto">
  <table>
    <thead>
      <tr>
        <th class="whitespace-nowrap">現金</th>
        <th class="whitespace-nowrap">クレジットカード</th>
        <th class="whitespace-nowrap">デンタルローン</th>
        <th class="whitespace-nowrap">デビット・銀聯カード</th>
        <th class="whitespace-nowrap">電子マネー</th>
        <th class="whitespace-nowrap">銀行振込</th>
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