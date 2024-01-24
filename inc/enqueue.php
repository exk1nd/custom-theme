<?php
/**
 * Loading All CSS Stylesheets and Javascript Files.
 *
 * @since v1.0
 */
function theme_scripts(): void {
	$theme_version = wp_get_theme()->get( 'Version' ) + 0.1;

	wp_enqueue_style(
		'style',
		get_template_directory_uri() . '/style.css',
	);

	wp_enqueue_style(
		'main',
		get_template_directory_uri() . '/assets/css/main.css',
	);

	if ( is_rtl() ) {
		wp_enqueue_style(
			'rtl',
			get_template_directory_uri() . '/assets/css/rtl.css',
		);
	}

	// 2. Scripts.
	if ( is_front_page() ) {
		wp_enqueue_script(
			'home',
			get_template_directory_uri() . '/assets/js/home.js',
			array( 'jquery' ), false, true
		);
	} else {
		wp_enqueue_script(
			'mainjs',
			get_template_directory_uri() . '/assets/js/main.js',
			array( 'jquery' ), false, true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$localize_arr = array(
		'home_url'  => home_url(),
		'home_path' => get_stylesheet_directory_uri(),
		'ajax_url'  => admin_url( 'admin-ajax.php' ),
		'nonce'     => wp_create_nonce( 'view-nonce' ),
	);
	wp_localize_script( 'mainjs', 'wp_helper', $localize_arr );
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );