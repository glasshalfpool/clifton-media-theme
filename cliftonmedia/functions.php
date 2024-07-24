<?php
/**
 * This file adds functions to the CliftonMedia WordPress theme.
 *
 * @package CliftonMedia
 * @author  Jamie Glasspool
 * @license GNU General Public License v2 or later
 * @link    https://glasshalfpool.com/
 */

if ( ! function_exists( 'cliftonmedia_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.8.0
	 *
	 * @return void
	 */
	function cliftonmedia_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'cliftonmedia', get_template_directory() . '/languages' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css',
			)
		);

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'cliftonmedia_setup' );

// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'cliftonmedia_enqueue_style_sheet' );
function cliftonmedia_enqueue_style_sheet() {

	wp_enqueue_style( 'cliftonmedia', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}

/**
 * Register block styles.
 *
 * @since 0.9.2
 */
function cliftonmedia_register_block_styles() {

	$block_styles = array(
		'core/columns' => array(
			'columns-reverse' => __( 'Reverse', 'cliftonmedia' ),
		),
		'core/group' => array(
			'shadow-light' => __( 'Shadow', 'cliftonmedia' ),
			'shadow-solid' => __( 'Solid', 'cliftonmedia' ),
		),
		'core/image' => array(
			'shadow-light' => __( 'Shadow', 'cliftonmedia' ),
			'shadow-solid' => __( 'Solid', 'cliftonmedia' ),
		),
		'core/list' => array(
			'no-disc' => __( 'No Disc', 'cliftonmedia' ),
		),
		'core/quote' => array(
			'shadow-light' => __( 'Shadow', 'cliftonmedia' ),
			'shadow-solid' => __( 'Solid', 'cliftonmedia' ),
		),
		'core/social-links' => array(
			'outline' => __( 'Outline', 'cliftonmedia' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'cliftonmedia_register_block_styles' );

/**
 * Register block pattern categories.
 *
 * @since 1.0.4
 */
function cliftonmedia_register_block_pattern_categories() {

	register_block_pattern_category(
		'page',
		array(
			'label'       => __( 'Page', 'cliftonmedia' ),
			'description' => __( 'Create a full page with multiple patterns that are grouped together.', 'cliftonmedia' ),
		)
	);
	register_block_pattern_category(
		'pricing',
		array(
			'label'       => __( 'Pricing', 'cliftonmedia' ),
			'description' => __( 'Compare features for your digital products or service plans.', 'cliftonmedia' ),
		)
	);

}

add_action( 'init', 'cliftonmedia_register_block_pattern_categories' );

require_once __DIR__ . '/includes/block-overrides.php';

function my_theme_enqueue_styles() {
	wp_enqueue_style('ghp-adinserter-style', get_theme_file_uri('/assets/css/ghp-ad-inserter-styles.css') );
	wp_enqueue_style('ghp-heat-jobs-style', get_theme_file_uri('/assets/css/ghp-heat-jobs.css') );
	wp_enqueue_style('ghp-trending-articles-style', get_theme_file_uri('/assets/css/ghp-trending-articles.css') );
	wp_enqueue_style('ghp-ninja-forms-style', get_theme_file_uri('/assets/css/ghp-ninja-forms.css') );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// DISABLE COMMENTS CODE
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    
    if ($pagenow === 'edit-comments.php') {
        wp_safe_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('admin_bar_menu', function () {
    remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
}, 0);

// Order search results by date DESC
function custom_search_orderby_date( $query ) {
    if ( $query->is_search() && $query->is_main_query() ) {
        $query->set( 'orderby', 'date' );
        $query->set( 'order', 'DESC' );
        $query->set( 'post_type', array( 'post', 'page' ) );
    }
}
add_action( 'pre_get_posts', 'custom_search_orderby_date' );


