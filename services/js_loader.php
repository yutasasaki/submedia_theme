<?php
function header_js_loader()
{
?>

<?php
}
add_action('wp_footer', 'header_js_loader');

function footer_js_loader()
{
?>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/js/clinic_readmore.js'; ?>"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/js/category_drawer.js'; ?>"></script>
<?php
}
add_action('wp_footer', 'footer_js_loader');

