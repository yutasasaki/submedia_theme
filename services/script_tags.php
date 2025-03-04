<?php
function allow_script_tags($tags, $context) {
    if ($context === 'post') {
        $tags['script'] = [
            'type' => [],
        ];
    }
    return $tags;
}
add_filter('wp_kses_allowed_html', 'allow_script_tags', 10, 2);