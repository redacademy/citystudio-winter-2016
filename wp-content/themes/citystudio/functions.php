<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */

if ( ! function_exists( 'red_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function red_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // red_starter_setup
add_action( 'after_setup_theme', 'red_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'red_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'red_starter_content_width', 0 );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function red_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'red_starter_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */



function citystudio_scripts() {
	wp_enqueue_style ( 'font-awesome-cdn' , 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '4.4.0');

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array());

	wp_enqueue_style( 'flickity.min.css', get_template_directory_uri() . '/js/flickity/flickity.min.css', array());

	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

// Enqueing jquery & slider scripts

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'flickity.pkgd.min.js', get_template_directory_uri() . '/js/flickity/flickity.pkgd.min.js', array());

	wp_enqueue_script( 'script.js', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '2.2.0' );

	wp_enqueue_script( 'slider.js', get_template_directory_uri() . '/js/slider.js', array('jquery'), '2.2.0'  );

	wp_enqueue_script( 'click-function.js', get_template_directory_uri() . '/js/home-transitions.js', array('jquery'), '2.2.0'  );

	wp_enqueue_script( 'sort-function.js', get_template_directory_uri() . '/js/sort-function.js', array('jquery'), '2.2.0'  );

	wp_enqueue_script( 'gallery-pop.js', get_template_directory_uri() . '/js/gallery-pop.js', array('jquery'), '2.2.0' );

}

add_action( 'wp_enqueue_scripts', 'citystudio_scripts' );

function filter_scripts() {
	$script_url = get_template_directory_uri(). '/build/js/script.min.js';

	wp_enqueue_script( 'filter_gallery', $script_url, array ( 'jquery' ), false, true);

	wp_localize_script( 'filter_gallery', 'api_vars', array (
		'rest_url' => esc_url_raw( rest_url() )
	) );

}
add_action( 'wp_enqueue_scripts', 'filter_scripts' );

function slug_register_featured_image_url() {
    register_rest_field( 'project',
        'featured_image_url',
        array(
            'get_callback'    => 'slug_get_featured_image_url',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
add_action( 'rest_api_init', 'slug_register_featured_image_url' );

function slug_get_featured_image_url( $object, $field_name, $request ) {
    return wp_get_attachment_url( get_post_thumbnail_id( $object['id'] ));
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
