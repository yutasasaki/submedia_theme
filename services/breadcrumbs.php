<?php
// 親テーマのパンくずリスト関数を無効化
remove_action( 'swell_breadcrumb_list_data', 'SWELL_Theme::breadcrumb_list_data' );

// カスタマイズされたパンくずリスト関数を追加
add_filter('swell_breadcrumb_list_data', 'swell_breadcrumb_add');

function swell_breadcrumb_add( $list_data ) {
    // ドメインのURLと名前を追加
    $site_url = home_url('/');
    $parsed_url = parse_url($site_url);
    $domain_url = $parsed_url['scheme'] . '://' . $parsed_url['host'];
    
    // 「ホーム」用のデータ
    $home_data = [
        'url'  => $domain_url,
        'name' => 'ホーム',
    ];
    
    // 「media」用のデータ
    $media_data = [
        'url'  => $domain_url . '/media',
        'name' => 'media',
    ];

    // トップページ（/media）の場合は「ホーム > media」だけを表示
    if (is_front_page() || $_SERVER['REQUEST_URI'] == '/media/') {
        return [$home_data, $media_data];
    }

    $SETTING = \SWELL_Theme::get_setting();
    $wp_obj = get_queried_object();
    $list_data = [];
    $custom_data = [];

    // 「投稿ページ」をパンくずリストに入れる場合
    $home_page_data = null;
    if ( $SETTING['breadcrumb_set_home'] ) {
        $home_page_id = (int) get_option('page_for_posts');
        if ( $home_page_id ) {
            $home_page_data = [
                'url'  => get_permalink($home_page_id),
                'name' => get_the_title($home_page_id),
            ];
        }
    }

    if ( is_attachment() ) {
        $list_data[] = [
            'url'  => '',
            'name' => apply_filters('the_title', $wp_obj->post_title),
        ];
    } elseif ( is_single() ) {
        $list_data = array_merge($list_data, handle_single_post($wp_obj, $home_page_data, $custom_data));
    } elseif ( is_page() || is_home() ) {
        $list_data = array_merge($list_data, handle_page($wp_obj));
    } elseif ( is_post_type_archive() ) {
        $list_data[] = [
            'url'  => '',
            'name' => $wp_obj->label,
        ];
    } elseif ( is_date() ) {
        $list_data = array_merge($list_data, handle_date_archive());
    } elseif ( is_author() ) {
        $list_data[] = [
            'url'  => '',
            'name' => $wp_obj->display_name . ' の執筆記事',
        ];
    } elseif ( is_archive() ) {
        $list_data = array_merge($list_data, handle_archive($wp_obj, $home_page_data, $custom_data));
    } elseif ( is_search() ) {
        $list_data[] = [
            'url'  => '',
            'name' => '「' . get_search_query() . '」で検索した結果',
        ];
    } elseif ( is_404() ) {
        $list_data[] = [
            'url'  => '',
            'name' => 'お探しの記事は見つかりませんでした。',
        ];
    } else {
        $list_data[] = [
            'url'  => '',
            'name' => get_the_title(),
        ];
    }

    // パンくずリストの先頭に「ホーム > media」を追加
    array_unshift($list_data, $media_data); // 「media」を先頭に追加
    array_unshift($list_data, $home_data); // 「ホーム」を先頭に追加

    // 「ホワイトニング」というパンくずを削除（2階層目以下の場合）
    $list_data = array_filter($list_data, function ($item) {
        return $item['name'] !== 'ホワイトニング';
    });

    // 配列のキーを振り直す（JSONエンコード時の問題を防ぐ）
    $list_data = array_values($list_data);

    return $list_data;
}

function handle_single_post($wp_obj, $home_data, $custom_data) {
    $list_data = [];
    $the_id = $wp_obj->ID;
    $the_post_type = $wp_obj->post_type;
    $post_title = apply_filters('the_title', $wp_obj->post_title);

    if ( $the_post_type !== 'post' ) {
        $the_tax = get_post_type_taxonomy($the_post_type);
        $post_type_link = get_post_type_archive_link($the_post_type);
        $post_type_label = get_post_type_object($the_post_type)->label;

        $list_data[] = [
            'url'  => $post_type_link,
            'name' => $post_type_label,
        ];
    } else {
        if ( $custom_data ) $list_data[] = $custom_data;  // 固定記事を追加
        if ( $home_data ) $list_data[] = $home_data;

        $the_tax = 'category';
    }

    $list_data = array_merge($list_data, get_terms_breadcrumbs($the_id, $the_tax));

    $list_data[] = [
        'url'  => '',
        'name' => $post_title,
    ];

    return $list_data;
}

function get_post_type_taxonomy($post_type) {
    $tax_array = get_object_taxonomies($post_type, 'names');
    foreach ($tax_array as $tax_name) {
        if ($tax_name !== 'post_format') {
            return $tax_name;
        }
    }
    return '';
}

function get_terms_breadcrumbs($the_id, $the_tax) {
    $list_data = [];
    $terms = get_the_terms($the_id, $the_tax);
    if ($terms !== false) {
        $child_terms = [];
        $parents_list = [];
        foreach ($terms as $the_term) {
            if ($the_term->parent !== 0) {
                $parents_list[] = $the_term->parent;
            }
        }
        foreach ($terms as $the_term) {
            if (!in_array($the_term->term_id, $parents_list, true)) {
                $child_terms[] = $the_term;
            }
        }
        $the_term = $child_terms[0];

        if ($the_term->parent !== 0) {
            $parent_array = array_reverse(get_ancestors($the_term->term_id, $the_tax));
            foreach ($parent_array as $parent_id) {
                $parent_term = get_term($parent_id, $the_tax);
                $parent_link = get_term_link($parent_id, $the_tax);
                $parent_name = $parent_term->name;

                $list_data[] = [
                    'url'  => $parent_link,
                    'name' => $parent_name,
                ];
            }
        }

        $term_link = get_term_link($the_term->term_id, $the_tax);
        $term_name = $the_term->name;

        $list_data[] = [
            'url'  => $term_link,
            'name' => $term_name,
        ];
    }
    return $list_data;
}

function handle_page($wp_obj) {
    $list_data = [];
    $page_id = $wp_obj->ID;
    $page_title = apply_filters('the_title', $wp_obj->post_title);

    if ($wp_obj->post_parent !== 0) {
        $parent_array = array_reverse(get_post_ancestors($page_id));
        foreach ($parent_array as $parent_id) {
            $parent_link = get_permalink($parent_id);
            $parent_name = get_the_title($parent_id);

            $list_data[] = [
                'url'  => $parent_link,
                'name' => $parent_name,
            ];
        }
    }

    $list_data[] = [
        'url'  => '',
        'name' => $page_title,
    ];

    return $list_data;
}

function handle_date_archive() {
    $list_data = [];
    $y = get_query_var('year');
    $month = get_query_var('monthnum');
    $day = get_query_var('day');

    if ($day !== 0) {
        $list_data[] = [
            'url'  => get_year_link($y),
            'name' => $y . '年',
        ];
        $list_data[] = [
            'url'  => get_month_link($y, $month),
            'name' => $month . '月',
        ];
        $list_data[] = [
            'url'  => '',
            'name' => $day . '日',
        ];
    } elseif ($month !== 0) {
        $list_data[] = [
            'url'  => get_year_link($y),
            'name' => $y . '年',
        ];
        $list_data[] = [
            'url'  => '',
            'name' => $month . '月',
        ];
    } else {
        $list_data[] = [
            'url'  => '',
            'name' => $y . '年',
        ];
    }
    return $list_data;
}

function handle_archive($wp_obj, $home_data, $custom_data) {
    $list_data = [];
    if ($custom_data) {
        $list_data[] = $custom_data;  // 固定記事を追加
    }
    if ($home_data && (is_category() || is_tag())) {
        $list_data[] = $home_data;
    }
    
    $term_id = $wp_obj->term_id;
    $term_name = $wp_obj->name;
    $tax_name = $wp_obj->taxonomy;

    if ($wp_obj->parent !== 0) {
        $parent_array = array_reverse(get_ancestors($term_id, $tax_name));
        foreach ($parent_array as $parent_id) {
            $parent_term = get_term($parent_id, $tax_name);
            $parent_link = get_term_link($parent_id, $tax_name);
            $parent_name = $parent_term->name;

            $list_data[] = [
                'url'  => $parent_link,
                'name' => $parent_name,
            ];
        }
    }

    $list_data[] = [
        'url'  => '',
        'name' => $term_name,
    ];

    return $list_data;
}