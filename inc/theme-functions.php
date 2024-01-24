<?php


/**
 * Include Theme Customizer.
 *
 * @since v1.0
 */
$theme_customizer = get_template_directory() . '/inc/customizer.php';
if ( is_readable( $theme_customizer ) ) {
	require_once $theme_customizer;
}


/**
 * Include Support for wordpress.com-specific functions.
 *
 * @since v1.0
 */
$theme_wordpresscom = get_template_directory() . '/inc/wordpresscom.php';
if ( is_readable( $theme_wordpresscom ) ) {
	require_once $theme_wordpresscom;
}


/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since v1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 800;
}


/**
 * General Theme Settings.
 *
 * @since v1.0
 */
if ( ! function_exists( 'starter_pack_setup_theme' ) ) :
	function starter_pack_setup_theme() {
		// Make theme available for translation: Translations can be filed in the /languages/ directory.
		load_theme_textdomain( 'starter_pack', get_template_directory() . '/languages' );

		// Theme Support.
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);


		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );
		// Add support for full and wide alignment.
		add_theme_support( 'align-wide' );
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Default Attachment Display Settings.
		update_option( 'image_default_align', 'none' );
		update_option( 'image_default_link_type', 'none' );
		update_option( 'image_default_size', 'large' );

		// Custom CSS-Styles of Wordpress Gallery.
		add_filter( 'use_default_gallery_style', '__return_false' );
	}

	add_action( 'after_setup_theme', 'starter_pack_setup_theme' );

	// Disable Block Directory: https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/filters/editor-filters.md#block-directory
	remove_action( 'enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets' );
	remove_action( 'enqueue_block_editor_assets', 'gutenberg_enqueue_block_editor_assets_block_directory' );
endif;

function themename_custom_logo_setup() {
	$defaults = array(
		//        'height'               => 100,
		//        'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true,
	);

	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


/**
 * Fire the wp_body_open action.
 *
 * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
 *
 * @since v2.2
 */
if ( ! function_exists( 'wp_body_open' ) ) :
	function wp_body_open() {
		/**
		 * Triggered after the opening <body> tag.
		 *
		 * @since v2.2
		 */
		do_action( 'wp_body_open' );
	}
endif;

/**
 * Nav menus.
 *
 * @since v1.0
 */
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'header-menu'    => 'Header Menu',
			'footer-menu'    => 'Footer Menu',
		)
	);
}

//add_action( 'wp_head', 'include_custom_links', 1 );
// add_action('wpseo_head', 'after_seo_links', 1);
//function include_custom_links() {
//	echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700;800;900&display=swap" as="style">
//	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700;800;900&display=swap">';
//}

function smartwp_remove_wp_block_library_css() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
}

add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

function webp_upload_mimes( $existing_mimes ) {
	$existing_mimes['webp'] = 'image/webp';
	$existing_mimes['webm'] = 'video/webm';
	$existing_mimes['mp4']  = 'video/mp4';
	$existing_mimes['svg']  = 'image/svg+xml';

	return $existing_mimes;
}

add_filter( 'mime_types', 'webp_upload_mimes' );

add_filter( 'big_image_size_threshold', '__return_zero' );

function alter_login_headerurl() {
	return '/';
}

add_action( 'login_headerurl', 'alter_login_headerurl' );

function alter_login_headertitle() {
	return '';
}

add_action( 'login_headertitle', 'alter_login_headertitle' );

function my_login_logo() {
	wp_enqueue_style(
		'login-custom',
		get_template_directory_uri() . '/css/login.css',
	);
}
add_action( 'login_enqueue_scripts', 'my_login_logo' );

add_filter( 'login_display_language_dropdown', '__return_false' );

function currentYear(): string {
	return date( 'Y' );
}

function get_products( $atts ) {
	ob_start();
	get_template_part( 'part-templates/table' );

	return ob_get_clean();
}

add_shortcode( 'table', 'get_products' );

function get_faq( $atts ) {
	ob_start();
	get_template_part( 'part-templates/faq' );

	return ob_get_clean();
}

add_shortcode( 'faq', 'get_faq' );

// Remove feed links from wp_head
add_action( 'wp_head', 'wpse33072_wp_head', 1 );
function wpse33072_wp_head() {
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
}

function wps_deregister_styles() {
	wp_dequeue_style( 'global-styles' );
}

add_action( 'wp_enqueue_scripts', 'wps_deregister_styles', 100 );

// REMOVE EMOJI ICONS
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


add_action( 'wp_footer', function () {
	wp_dequeue_style( 'core-block-supports' );
} );

//Password check on enter website
// add_action( 'template_redirect', function () {
// 	is_user_logged_in() || auth_redirect();
// } );


// Ajax load-more posts
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

function load_more_posts() {
    $page = $_POST['page'];
    $args = array(
        'post_type' => 'custom_type',
        'posts_per_page' => 2,
        'paged' => $page,
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

            <div class="custom-card">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                <p><?php echo get_the_date(); ?></p>
            </div>

        <?php endwhile;

        wp_reset_query();

    else :
        echo 'No more posts';
    endif;

    die();
}