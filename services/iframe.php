<?php
function allow_iframe_in_wp($content) {
    return str_replace(
        array('<iframe', '</iframe>'),
        array('<iframe allow="fullscreen" ', '</iframe>'),
        $content
    );
}
add_filter('the_content', 'allow_iframe_in_wp', 10);
add_filter('widget_text', 'allow_iframe_in_wp', 10);

function allow_iframe_in_wp_insert($data, $postarr) {
    remove_filter('content_save_pre', 'wp_filter_post_kses'); // 保存時のサニタイズを無効化
    return $data;
}
add_filter('wp_insert_post_data', 'allow_iframe_in_wp_insert', 99, 2);

function allow_iframe_for_rest_api($tags, $context) {
    if ($context === 'post') {
        $tags['iframe'] = array(
            'src'             => true,
            'width'           => true,
            'height'          => true,
            'frameborder'     => true,
            'allowfullscreen' => true,
            'style'           => true,
        );
    }
    return $tags;
}
add_filter('wp_kses_allowed_html', 'allow_iframe_for_rest_api', 10, 2);