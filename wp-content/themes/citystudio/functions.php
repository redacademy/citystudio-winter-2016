<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */

// require_once('wp-advanced-search/wpas.php');

require_once('wp-advanced-search/wpas.php');

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
		'footer-menu-keep-exploring' => esc_html( 'Footer Menu - Keep Exploring'),
		'footer-menu-citystudio' => esc_html( 'Footer Menu - Citystudio')
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

/** Initialize search page***/

function template_chooser($template)
{
 global $wp_query;
 $post_type = get_query_var('post_type');
 if( $wp_query->is_search && $post_type == 'projects' )
 {
	 return locate_template('search.php');  //  redirect to search.php
 }
 return $template;
}
add_filter('template_include', 'template_chooser');

/**
 * Enqueue scripts and styles.
 */

function citystudio_scripts() {
	wp_enqueue_style ( 'font-awesome-cdn' , 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '4.4.0');

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array());

	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

// Enqueing jquery & slider scripts

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'script.js', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '2.2.0' );

	wp_enqueue_script( 'click-function.js', get_template_directory_uri() . '/js/home-transitions.js', array('jquery'), '2.2.0'  );

	wp_enqueue_script( 'sort-function.js', get_template_directory_uri() . '/js/sort-function.js', array('jquery'), '2.2.0'  );

}

add_action( 'wp_enqueue_scripts', 'citystudio_scripts' );

function filter_scripts() {
	$script_url = get_template_directory_uri(). '/build/js/script.min.js';

	wp_enqueue_script( 'filter_gallery', $script_url, array( 'jquery' ), false, true );

	wp_localize_script( 'filter_gallery', 'api_vars', array(
		'rest_url' => esc_url_raw( rest_url() )
	) );

}
add_action( 'wp_enqueue_scripts', 'filter_scripts' );

// Custom function to return image url in the API callback
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

//Add the Project Custom Post Type to the Main Loop

 function add_my_post_types_to_query( $query ) {
	 if ( is_home() && !is_admin() && $query->is_main_query() ) {

			$query->set( 'post_type', array( 'project', 'partners', 'year', 'themes') );
		}
 }
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

add_action( 'rest_api_init', 'slug_register_featured_image_url' );

function slug_get_featured_image_url( $object, $field_name, $request ) {
    return wp_get_attachment_url( get_post_thumbnail_id( $object['id']  ));
}

// Make the ACF image field the featured image field

function acf_set_featured_image( $value, $post_id, $field  ){

		$field_image = get_field("banner_image");

    if($value != ''){
	    //Add the value which is the image ID to the _thumbnail_id meta data for the current post
	    add_post_meta($post_id, '_thumbnail_id', $value);
    }

    return $value;
}

// acf/update_value/name={$field_name} - filter for a specific field based on it's name
add_filter('acf/update_value/name=banner_image', 'acf_set_featured_image', 10, 3);


function wpse28145_add_custom_types( $query ) {
    if( is_tag() && $query->is_main_query() ) {

        // this gets all post types:
        $post_types = get_post_types();

        // alternately, you can add just specific post types using this line instead of the above:
        // $post_types = array( 'post', 'your_custom_type' );

        $query->set( 'post_type', $post_types );
    }
}
add_filter( 'pre_get_posts', 'wpse28145_add_custom_types' );

// Custom function to return Subtitle Custom Field in API callback
function project_subtitle() {
    register_rest_field( 'project',
        'subtitle',
        array(
            'get_callback'    => 'get_project_subtitle',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
add_action( 'rest_api_init', 'project_subtitle' );

function get_project_subtitle( $object, $field_name, $request ) {
		return get_post_meta( $object[ 'id' ], $field_name );
}

// Custom function to return Excerpt Custom Field in API callback
function project_excerpt() {
    register_rest_field( 'project',
        'excerpt',
        array(
            'get_callback'    => 'get_project_excerpt',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
add_action( 'rest_api_init', 'project_excerpt' );

function get_project_excerpt( $object, $field_name, $request ) {
		return get_post_meta( $object[ 'id' ], $field_name );
}

// Custom function to return Title Custom Field in API callback
// function featured_project() {
//     register_rest_field( 'project',
//         'featured_project',
//         array(
//             'get_callback'    => 'get_featured_project',
//             'update_callback' => null,
//             'schema'          => null,
//         )
//     );
// }
// add_action( 'rest_api_init', 'featured_project' );
//
// function get_featured_project( $object, $field_name, $request ) {
// 		return get_post_meta( $object[ 'id' ], $field_name );
// }

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Register our sidebars and widgetized areas.
 *
 */
function citystudio_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html('searchform'),
		'id'            => 'searchform',
		'before_widget' => '<div class="searchform">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'citystudio_widgets_init' );
?>
