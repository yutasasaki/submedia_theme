<?php if (!empty($clinic_data->catchphrase)) : ?>
  <!-- wp:sgb/headings {"headingText":"<?php echo esc_html($clinic_data->catchphrase); ?>","headingStyle":"hh hh1","headingTag":"h4","headingIconName":"","headingTextColor":"","headingBgColor1":"","headingBorderColor1":"","headingTextAlign":"center"} -->
  <h4><?php echo esc_html($clinic_data->catchphrase); ?></h4>
  <!-- /wp:sgb/headings -->
<?php endif; ?>

<?php if (!empty($clinic_data->headline1)) : ?>
  <!-- wp:heading {"level":5} -->
  <h5><?php echo esc_html($clinic_data->headline1); ?></h5>
  <!-- /wp:heading -->
<?php endif; ?>
<?php if (!empty($clinic_data->paragraph1)) : ?>
  <p><?php echo esc_html($clinic_data->paragraph1); ?></p>
<?php endif; ?>

<?php if (!empty($clinic_data->headline2)) : ?>
  <!-- wp:heading {"level":5} -->
  <h5><?php echo esc_html($clinic_data->headline2); ?></h5>
  <!-- /wp:heading -->
<?php endif; ?>
<?php if (!empty($clinic_data->paragraph2)) : ?>
  <p><?php echo esc_html($clinic_data->paragraph2); ?></p>
<?php endif; ?>

<?php if (!empty($clinic_data->headline3)) : ?>
  <!-- wp:heading {"level":5} -->
  <h5><?php echo esc_html($clinic_data->headline3); ?></h5>
  <!-- /wp:heading -->
<?php endif; ?>
<?php if (!empty($clinic_data->paragraph3)) : ?>
  <p><?php echo esc_html($clinic_data->paragraph3); ?></p>
<?php endif; ?>