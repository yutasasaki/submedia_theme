<!-- wp:heading {"level":4,"className":"wp-block-sgb-headings sgb-heading"} -->
<h4>対応している矯正内容・費用</h4>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table is-style-sango-table-scroll-hint">
  <table>
    <thead>
      <tr>
        <th class="has-text-align-center" data-align="center"> </th>
        <th class="has-text-align-center" data-align="center">マウスピース矯正</th>
        <th class="has-text-align-center" data-align="center">ワイヤー矯正</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="has-text-align-center" data-align="center"></td>
        <td class="has-text-align-center" data-align="center">
          <img alt="マウスピース矯正" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/clinic_casette/mouthpiece.webp'); ?>"
            style="width: 100px;height:auto;"></td>
        <td class="has-text-align-center" data-align="center">
          <img alt="ワイヤー矯正" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/clinic_casette/wire.webp'); ?>"
            style="width: 100px;height:auto;"></td>
      </tr>
      <tr>
        <td class="has-text-align-center" data-align="center">矯正内容</td>
        <td class="has-text-align-center" data-align="center">
          <?php if (!empty($clinic_data->kireilign_orthodontics)) : ?>
          <span data-type="circle" class="sgb-table-icon">キレイライン</span>
          <?php endif;?>
          
          <?php if (!empty($clinic_data->invisalign)) : ?>
          <span data-type="circle" class="sgb-table-icon">インビザライン</span>
          <?php endif;?>

          <?php if (empty($clinic_data->kireilign_orthodontics)&&empty($clinic_data->invisalign)) : ?>
            <span data-type="triangle" class="sgb-table-icon">対応なし</span>
          <?php endif;?>
        </td>
        <td class="has-text-align-center" data-align="center">
            <?php if (!empty($clinic_data->orthodontics_front)) : ?>
          <span data-type="circle" class="sgb-table-icon">表側矯正</span>
          <?php endif;?>
          
          <?php if (!empty($clinic_data->orthodontics_back)) : ?>
          <span data-type="circle" class="sgb-table-icon">裏側矯正</span>
          <?php endif;?>

          <?php if (empty($clinic_data->orthodontics_front)&&empty($clinic_data->orthodontics_back)) : ?>
            <span data-type="triangle" class="sgb-table-icon">対応なし</span>
          <?php endif;?>
        </td>
      </tr>
    </tbody>
  </table>
  <figcaption class="wp-element-caption">矯正内容の詳細はクリニックにお問い合わせください</figcaption>
</figure>
<!-- /wp:table -->

<!-- wp:table -->
<figure class="wp-block-table is-style-sango-table-scroll-hint">
  <table>
    <thead>
      <tr>
        <th class="has-text-align-center" data-align="center">その他の矯正内容</th>
        <th class="has-text-align-center" data-align="center">目安の費用</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($clinic_data->type1)) : ?>
        <tr>
        <td class="has-text-align-center" data-align="center">
          <?php echo esc_html($clinic_data->type1); ?></td>
        <td class="has-text-align-center" data-align="center">
          <?php echo esc_html($clinic_data->type1_cost); ?>円(目安)
        </td>
      </tr>
      <?php endif;?>
      <?php if (!empty($clinic_data->type2)) : ?>
      <tr>
        <td class="has-text-align-center" data-align="center">
          <?php echo esc_html($clinic_data->type2); ?></td>
        <td class="has-text-align-center" data-align="center">
          <?php echo esc_html($clinic_data->type2_cost); ?>円(目安)
        </td>
      </tr>
      <?php endif;?>
      <?php if (!empty($clinic_data->type3)) : ?>
        <tr>
        <td class="has-text-align-center" data-align="center">
          <?php echo esc_html($clinic_data->type3); ?></td>
        <td class="has-text-align-center" data-align="center">
          <?php echo esc_html($clinic_data->type3_cost); ?>円(目安)
        </td>
      </tr>
      <?php endif;?>
      <?php if (!empty($clinic_data->type4)) : ?>
        <tr>
        <td class="has-text-align-center" data-align="center">
          <?php echo esc_html($clinic_data->type4); ?></td>
        <td class="has-text-align-center" data-align="center">
          <?php echo esc_html($clinic_data->type4_cost); ?>円(目安)
        </td>
      </tr>
      <?php endif;?>
    </tbody>
  </table>
  <figcaption class="wp-element-caption">矯正内容の詳細はクリニックにお問い合わせください</figcaption>
</figure>
<!-- /wp:table -->