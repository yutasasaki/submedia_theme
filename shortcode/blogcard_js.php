<?php
function generate_blogcard($atts)
{
  $atts = shortcode_atts(array(
    'url' => '',
    'title' => '',
    'excerpt' => '',
    'nofollow' => 'false'
  ), $atts, 'blogcard');

  $url = esc_url($atts['url']);
  $nofollow_attr = ($atts['nofollow'] === "true") ? 'rel="nofollow"' : '';

  if (empty($url)) {
    return '<p>URLが指定されていません。</p>';
  }

  $html = '
    <div class="dc_blogcard" data-url="' . esc_url($url) . '" data-title="' . esc_attr($atts['title']) . '" data-excerpt="' . esc_attr($atts['excerpt']) . '" data-nofollow="' . $nofollow_attr . '">
        <a href="' . esc_url($url) . '" target="_blank" ' . $nofollow_attr . '>
            <div class="blogcard_thumbnail"></div>
            <div class="blogcard_content">
                <p class="blogcard_title">Loading...</p>
                <p class="blogcard_description">Loading...</p>
                <div class="blogcard_link">' . esc_url($url) . '</div>
            </div>
        </a>
    </div>';

  return $html;
}
add_shortcode('blogcard', 'generate_blogcard');

function generate_linkcard($atts)
{
  $atts = shortcode_atts(array(
    'url' => '',
    'title' => '',
    'excerpt' => '',
    'nofollow' => 'false'
  ), $atts, 'linkcard');

  $url = esc_url($atts['url']);
  $nofollow_attr = ($atts['nofollow'] === "true") ? 'rel="nofollow"' : '';

  if (empty($url)) {
    return '<p>URLが指定されていません。</p>';
  }

  $html = '
    <div class="linkcard_wrapper">
        <div class="dc_linkcard" data-url="' . esc_url($url) . '" data-title="' . esc_attr($atts['title']) . '" data-excerpt="' . esc_attr($atts['excerpt']) . '" data-nofollow="' . $nofollow_attr . '">
            <p class="linkcard_label">あわせて読みたい</p>
            <a href="' . esc_url($url) . '" target="_blank" ' . $nofollow_attr . '>
                <div class="linkcard_thumbnail"></div>
                <p class="linkcard_title">Loading...</p>
            </a>
        </div>
    </div>';

  return $html;
}
add_shortcode('linkcard', 'generate_linkcard');