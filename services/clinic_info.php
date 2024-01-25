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


require_once get_stylesheet_directory() . '/models/clinic_data.php';

function show_clinic_db_shortcode($atts) {
    // ショートコード属性を解析
    $atts = shortcode_atts(array(
        'table_id' => '', // TablePressテーブルのID
        'row_id' => '',    // 表示したい行のID
        'view' => 'default',
    ), $atts);

    // row_idを整数にキャスト
    $row_id = intval($atts['row_id']);

    // TablePressテーブルのデータを取得
    $table = TablePress::$model_table->load($atts['table_id']);
    if (is_wp_error($table) || empty($table['data'][$row_id - 1])) {
        return '指定されたテーブルまたは行が見つかりません。';
    }
    $row = $table['data'][$row_id - 1];
    // 変数の定義
    $clinic_data = new ClinicData($row);

    // ビューファイルの読み込み
    ob_start(); // 出力バッファリング開始
    include(get_stylesheet_directory() . '/views/clinic_casette/'.$atts['view'].'.php'); // ファイルパスを修正
    return ob_get_clean(); // バッファの内容を取得し、バッファを消去
}
add_shortcode('show_clinic_db', 'show_clinic_db_shortcode');

function gallery_splide_js_loader() {
    ?>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/js/clinic_info_gallery.js'; ?>"></script>
    <?php
}
add_action('wp_footer', 'gallery_splide_js_loader');
