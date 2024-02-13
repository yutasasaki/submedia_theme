<?php if (!empty($clinic_data->catchphrase)) : ?>
<!-- wp:heading {"level":4} -->
<h4 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh18 sm-hh18" style="font-size:1.2em"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->catchphrase); ?></span></span></h4>
<!-- /wp:heading -->
<?php endif; ?>

<?php if (!empty($clinic_data->headline1)) : ?>
<!-- wp:heading {"level":5} -->
<h5 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh20" style="font-size:1.2em;
  background: repeating-linear-gradient(-45deg,<?php echo get_theme_mod('submedia_light_color_setting', '#009EF3'); ?>,<?php echo get_theme_mod('submedia_light_color_setting', '#009EF3'); ?> 3px,#fff 0,#fff 7px);
  color:<?php echo get_theme_mod('submedia_light_text_color_setting', '#009EF3'); ?>"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->headline1); ?></span></span></h5>
<!-- /wp:heading -->
<?php endif; ?>
<?php if (!empty($clinic_data->paragraph1)) : ?>
<p><?php echo esc_html($clinic_data->paragraph1); ?></p>
<?php endif; ?>

<?php if (!empty($clinic_data->headline2)) : ?>
<!-- wp:heading {"level":5} -->
<h5 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh20" style="font-size:1.2em;
  background: repeating-linear-gradient(-45deg,<?php echo get_theme_mod('submedia_light_color_setting', '#009EF3'); ?>,<?php echo get_theme_mod('submedia_light_color_setting', '#009EF3'); ?> 3px,#fff 0,#fff 7px);
  color:<?php echo get_theme_mod('submedia_light_text_color_setting', '#009EF3'); ?>"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->headline2); ?></span></span></h5>
<!-- /wp:heading -->
<?php endif; ?>
<?php if (!empty($clinic_data->paragraph2)) : ?>
<p><?php echo esc_html($clinic_data->paragraph2); ?></p>
<?php endif; ?>

<?php if (!empty($clinic_data->headline3)) : ?>
<!-- wp:heading {"level":5} -->
<h5 class="wp-block-sgb-headings sgb-heading"><span class="sgb-heading__inner hh hh20" style="font-size:1.2em;
  background: repeating-linear-gradient(-45deg,<?php echo get_theme_mod('submedia_light_color_setting', '#009EF3'); ?>,<?php echo get_theme_mod('submedia_light_color_setting', '#009EF3'); ?> 3px,#fff 0,#fff 7px);
  color:<?php echo get_theme_mod('submedia_light_text_color_setting', '#009EF3'); ?>"><span class="sgb-heading__text"><?php echo esc_html($clinic_data->headline3); ?></span></span></h5>
<!-- /wp:heading -->
<?php endif; ?>
<?php if (!empty($clinic_data->paragraph3)) : ?>
<p><?php echo esc_html($clinic_data->paragraph3); ?></p>
<?php endif; ?>