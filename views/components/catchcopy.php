<?php if (!empty($clinic_data->catchphrase)) : ?>
<!-- wp:heading {"level":4} -->
<h4 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh18" style="font-size:1.2em"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->catchphrase); ?></span></span></h4>
<!-- /wp:heading -->
<?php endif; ?>

<?php if (!empty($clinic_data->headline1)) : ?>
<!-- wp:heading {"level":5} -->
<h5 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh20" style="font-size:1.2em"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->headline1); ?></span></span></h5>
<!-- /wp:heading -->
<?php endif; ?>
<?php if (!empty($clinic_data->paragraph1)) : ?>
<p><?php echo esc_html($clinic_data->paragraph1); ?></p>
<?php endif; ?>

<?php if (!empty($clinic_data->headline2)) : ?>
<!-- wp:heading {"level":5} -->
<h5 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh20" style="font-size:1.2em"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->headline2); ?></span></span></h5>
<!-- /wp:heading -->
<?php endif; ?>
<?php if (!empty($clinic_data->paragraph2)) : ?>
<p><?php echo esc_html($clinic_data->paragraph2); ?></p>
<?php endif; ?>

<?php if (!empty($clinic_data->headline3)) : ?>
<!-- wp:heading {"level":5} -->
<h5 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh20" style="font-size:1.2em"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->headline3); ?></span></span></h5>
<!-- /wp:heading -->
<?php endif; ?>
<?php if (!empty($clinic_data->paragraph3)) : ?>
<p><?php echo esc_html($clinic_data->paragraph3); ?></p>
<?php endif; ?>