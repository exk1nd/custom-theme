<?php
add_action( 'init', 'register_post_types_objects' );

function register_post_types_objects() {
	// Creditors
	$labels = array(
		'name' => _x('Creditors', 'post type general name', 'paydaysay'),
		'singular_name' => _x('Creditor', 'post type singular name', 'paydaysay'),
		'menu_name' => _x('Creditors', 'admin menu', 'paydaysay'),
		'name_admin_bar' => _x('Creditors', 'add new on admin bar', 'paydaysay'),
		'add_new' => _x('Add New', 'Creditors', 'paydaysay'),
		'add_new_item' => __('Add new Creditors', 'paydaysay'),
		'new_item' => __('New  Creditor', 'paydaysay'),
		'edit_item' => __('Edit Creditor', 'paydaysay'),
		'view_item' => __('View Creditors', 'paydaysay'),
		'all_items' => __('All Creditors', 'paydaysay'),
		'search_items' => __('Search Creditors', 'paydaysay'),
		'parent_item_colon' => __('Creditors parent:', 'paydaysay'),
		'not_found' => __('Not found Creditors.', 'paydaysay'),
		'not_found_in_trash' => __('Not found in trash', 'paydaysay')
	);

	$args = array(
		'labels' => $labels,
		'description' => __('Creditors', 'paydaysay'),
		'public' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'creditors'),
		'capability_type' => 'post',
		'has_archive' => false,
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array(
			'title', 'editor', 'thumbnail', 'excerpt'
		),
		'menu_icon' => 'dashicons-money-alt',
	);

	register_post_type('Creditors', $args);

	register_post_type( 'apps',
		array(
			'labels' => array(
				'name' => __( 'Apps' ),
				'singular_name' => __( 'App' )
			),
			'public' => false,
			'menu_position' => 6,
			'show_ui' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'apps'),
			'show_in_rest' => true,
		)
	);

	register_post_type( 'cards',
		array(
			'labels' => array(
				'name' => __( 'Cards' ),
				'singular_name' => __( 'Card' )
			),
			'public' => false,
			'menu_position' => 6,
			'show_ui' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'cards'),
			'show_in_rest' => true,
		)
	);

	register_post_type( 'previews',
		array(
			'labels' => array(
				'name' => __( 'Previews' ),
				'singular_name' => __( 'Preview' )
			),
			'public' => false,
			'menu_position' => 6,
			'show_ui' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'previews'),
			'show_in_rest' => true,
			'supports' => array(
				'title', 'editor', 'thumbnail', 'excerpt'
			),
		)
	);
}