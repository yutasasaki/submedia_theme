<?php

function ns_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'ns_enqueue_styles' );
/**
 * services
 */
// ディレクトリ定義
$custom_functions_dir = 'services/';
// 呼び出すfunctionを指定
$custom_functions_files = array(
// 'plugins.php',
// 'acf-json.php',
  'css_loader.php',
  'js_loader.php',
  'custom_cta.php',
  'splide.php',
  'breadcrumbs.php',
  'rest_api.php',
  'cloudfront.php',
  'ogp.php',
  // 'toc.php',
  'swell_toc.php',
  'avif_upload.php',
  'script_tags.php'
);
foreach ($custom_functions_files as $custom_functions_file) {
  locate_template($custom_functions_dir . $custom_functions_file, true);
}


/**
 * customizer
 */
$customizer_dir = 'customizer/';
// 呼び出すfunctionを指定
$customizer_files = array(
  'panel.php',
  'system.php',
  'intro.php',
  'clinic.php',
  'colors.php',
  'cta.php',
);
foreach ($customizer_files as $customizer_file) {
  locate_template($customizer_dir . $customizer_file, true);
}

/**
 * shortcodes
 */
$custom_shortcode_dir = 'shortcode/';
$custom_shortcode_files = array(
  'intro.php',
  'outro.php',
  'carousel.php',
  'shindan.php',
  'kansyui.php',
  'compare_table.php',
  'clinic_info.php',
  'clinic_info_api.php',
  'clinic_info_json.php',
  'category.php',
  'related_category.php',
  'blogcard_js.php',
);
foreach ($custom_shortcode_files as $custom_shortcode_file) {
  locate_template($custom_shortcode_dir . $custom_shortcode_file, true);
}

function custom_disable_fixed_headers_and_apply_styles() {
    //現在のURLのパスを取得
    $current_url = $_SERVER['REQUEST_URI'];

   //ディレクトリorthodontics以下のorthodonticsを除くページにのみ適用
    if (preg_match('~^/orthodontics/(.+)$~', $current_url)) {
        echo '<style>
            /* 追従ヘッダーを無効化 */
            .l-header.-series.-series-right,
            .l-fixHeader__inner.l-container,
            .l-fixHeader.-series.-series-right {
                position: static !important;
                top: auto !important;
                box-shadow: none !important;
            }

            /* fix_headerの追加スタイル */
            .fix_header {
                margin: 0 !important;
                position: relative !important;
            }

            /* l-fixHeader__inner l-containerの非表示 */
            .l-fixHeader__inner.l-container {
                display: none !important;
            }
        </style>';
    }
}
add_action('wp_head', 'custom_disable_fixed_headers_and_apply_styles');


function import_images_to_media_library() {
    $base_dir = wp_upload_dir()['basedir'] . '/clinic_images/'; // 画像フォルダの基準ディレクトリ
    $start_chunk = 46; // 開始チャンク番号
    $end_chunk = 52; // 終了チャンク番号

    for ($chunk = $start_chunk; $chunk <= $end_chunk; $chunk++) {
        $folder = $base_dir . "chunk" . $chunk; // チャンクフォルダパス

        if (!is_dir($folder)) {
            error_log("フォルダが存在しません: " . $folder);
            continue; // フォルダがない場合はスキップ
        }

        $files = scandir($folder);

        foreach ($files as $file) {
            if (in_array($file, ['.', '..'])) continue; // ドットファイルを無視

            $file_path = $folder . '/' . $file;
            $file_type = wp_check_filetype($file_path);

            // 画像ファイルのみ処理
            if (in_array($file_type['ext'], ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                // 添付ファイルとして登録
                $attachment = [
                    'guid'           => wp_upload_dir()['baseurl'] . '/clinic_images/chunk' . $chunk . '/' . $file,
                    'post_mime_type' => $file_type['type'],
                    'post_title'     => pathinfo($file, PATHINFO_FILENAME),
                    'post_content'   => '',
                    'post_status'    => 'inherit',
                ];
                $attach_id = wp_insert_attachment($attachment, $file_path);

                // 画像メタデータを生成して登録
                require_once(ABSPATH . 'wp-admin/includes/image.php');
                $attach_data = wp_generate_attachment_metadata($attach_id, $file_path);
                wp_update_attachment_metadata($attach_id, $attach_data);

                error_log("画像を登録しました: " . $file_path);
            }
        }
    }

    error_log("すべての処理が完了しました。");
}

// 実行する場合に以下を有効化（1度だけ有効化する想定）
// add_action('init', 'import_images_to_media_library');

?>
