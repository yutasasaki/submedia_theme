<?php
function splide_css_library_loader() {
    // 子テーマのスタイルシートのURL
    $stylesheet_url = get_stylesheet_directory_uri() . '/css/splide.min.css';

    // 子テーマのスタイルシートをキューに追加
    wp_enqueue_style('my-child-theme-style', $stylesheet_url);
}
add_action('wp_enqueue_scripts', 'splide_css_library_loader');

function splide_js_library_loader() {
    // JavaScriptファイルのURL
    $script_url = get_stylesheet_directory_uri() . '/js/splide.min.js';

    // スクリプトをキューに追加
    wp_enqueue_script('my-custom-script', $script_url, array(), false, true);
}
add_action('wp_enqueue_scripts', 'splide_js_library_loader');


function gallery_splide_js_loader() {
    ?>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/js/clinic_info_gallery.js'; ?>"></script>
    <?php
}
add_action('wp_footer', 'gallery_splide_js_loader');
