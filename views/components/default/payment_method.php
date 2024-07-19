<!-- wp:heading -->
<h4>お支払い方法</h4>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table is-style-sango-table-responsive">
  <table>
    <thead>
      <tr>
        <th>現金</th>
        <th>クレジットカード</th>
        <th>デンタルローン</th>
        <th>デビット・銀聯カード</th>
        <th>電子マネー</th>
        <th>銀行振込</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="has-text-align-center" data-align="center"><?php if($clinic_data->payment_cash) :?>◯<?php else : ?>-<?php endif;?></td>
        <td class="has-text-align-center" data-align="center"><?php if($clinic_data->payment_credit_card) :?>◯<?php else : ?>-<?php endif;?></td>
        <td class="has-text-align-center" data-align="center"><?php if($clinic_data->payment_dental_loan) :?>◯<?php else : ?>-<?php endif;?></td>
        <td class="has-text-align-center" data-align="center"><?php if($clinic_data->payment_unionpay) :?>◯<?php else : ?>-<?php endif;?></td>
        <td class="has-text-align-center" data-align="center"><?php if($clinic_data->payment_e_money) :?>◯<?php else : ?>-<?php endif;?></td>
        <td class="has-text-align-center" data-align="center"><?php if($clinic_data->payment_bank_transfer) :?>◯<?php else : ?>-<?php endif;?></td>
      </tr>
    </tbody>
  </table>
</figure>
<!-- /wp:table -->