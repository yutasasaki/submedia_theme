<?php
require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'my_theme_register_recommended_plugins');

function my_theme_register_recommended_plugins() {
    $plugins = array(
        array(
            'name'     => 'Advanced Custom Fields',
            'slug'     => 'advanced-custom-fields',
            'required' => false,
        ),
        array(
            'name'     => 'Akismet Anti-spam',
            'slug'     => 'akismet',
            'required' => false,
        ),
        array(
            'name'     => 'Insert Pages',
            'slug'     => 'insert-pages',
            'required' => false,
        ),
        array(
            'name'     => 'Reusable Blocks Extended',
            'slug'     => 'reusable-blocks-extended',
            'required' => false,
        ),
        array(
            'name'     => 'Shortcoder',
            'slug'     => 'shortcoder',
            'required' => false,
        ),
        array(
            'name'     => 'Simply Static',
            'slug'     => 'simply-static',
            'required' => false,
        ),
        array(
            'name'     => 'Site Kit by Google',
            'slug'     => 'google-site-kit',
            'required' => false,
        ),
        array(
            'name'     => 'TablePress',
            'slug'     => 'tablepress',
            'required' => false,
        ),
        array(
            'name'     => 'WP All Import Pro',
            'slug'     => 'wp-all-import-pro',
            'source'   => 'ここにプラグインのダウンロードURLを指定', // WordPress.org のプラグインディレクトリにないプラグインの場合
            'required' => false,
        ),
        // 他のプラグインを追加...
    );

    tgmpa($plugins);
}
