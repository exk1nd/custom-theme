<?php
// custom post type
function create_custom_post_type() {
register_post_type('custom_type', array(
'labels' => array(
'name' => __('Custom Type'),
'singular_name' => __('Custom Item'),
),
'public' => true,
'has_archive' => true,
'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
));
}

add_action('init', 'create_custom_post_type');

add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');