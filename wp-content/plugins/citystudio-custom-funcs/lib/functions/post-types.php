<?php
/**
 * POST TYPES
 *
 */

// Custom Post Types for City Studio Projects

// Register Project Custom Post Type
function register_project_post_type() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Projects', 'text_domain' ),
		'name_admin_bar'        => __( 'Projects', 'text_domain' ),
		'archives'              => __( 'Project Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Project:', 'text_domain' ),
		'all_items'             => __( 'All Project', 'text_domain' ),
		'add_new_item'          => __( 'Add New Project', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Project', 'text_domain' ),
		'edit_item'             => __( 'Edit Project', 'text_domain' ),
		'update_item'           => __( 'Update Project', 'text_domain' ),
		'view_item'             => __( 'View Project', 'text_domain' ),
		'search_items'          => __( 'Search Project', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into project', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this project', 'text_domain' ),
		'items_list'            => __( 'Projects list', 'text_domain' ),
		'items_list_navigation' => __( 'Projects list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter projects list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'project',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Project', 'text_domain' ),
		'description'           => __( 'City Studio projects', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields' ),
		'hierarchical'          => false,
		'taxonomies'            => array( 'post_tag' ),
		'public'                => true,
		'show_ui'               => true,
		'show_in_rest'			=> true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-aside',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'register_project_post_type', 0 );


// Register People Custom Post Type
function register_people_post_type() {

	$labels = array(
		'name'                  => _x( 'People', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Person', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'People', 'text_domain' ),
		'name_admin_bar'        => __( 'People', 'text_domain' ),
		'archives'              => __( 'People Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Person:', 'text_domain' ),
		'all_items'             => __( 'All People', 'text_domain' ),
		'add_new_item'          => __( 'Add New Person', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Person', 'text_domain' ),
		'edit_item'             => __( 'Edit Person', 'text_domain' ),
		'update_item'           => __( 'Update Person', 'text_domain' ),
		'view_item'             => __( 'View Person', 'text_domain' ),
		'search_items'          => __( 'Search Person', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into person', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this person', 'text_domain' ),
		'items_list'            => __( 'People list', 'text_domain' ),
		'items_list_navigation' => __( 'People list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter people list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Person', 'text_domain' ),
		'description'           => __( 'CityStudio staff custom post type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-universal-access',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'people', $args );

}
add_action( 'init', 'register_people_post_type', 0 );

// Register Partners Custom Post Type
function register_partners_post_type()  {

	$labels = array(
		'name'                  => _x( 'Partner', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Partner', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Partners', 'text_domain' ),
		'name_admin_bar'        => __( 'Partner', 'text_domain' ),
		'archives'              => __( 'Partner Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Partner Item:', 'text_domain' ),
		'all_items'             => __( 'All Partners', 'text_domain' ),
		'add_new_item'          => __( 'Add New Partner', 'text_domain' ),
		'add_new'               => __( 'Add New Partner', 'text_domain' ),
		'new_item'              => __( 'New Partner', 'text_domain' ),
		'edit_item'             => __( 'Edit Partner', 'text_domain' ),
		'update_item'           => __( 'Update Partner', 'text_domain' ),
		'view_item'             => __( 'View Partner', 'text_domain' ),
		'search_items'          => __( 'Search Partners', 'text_domain' ),
		'not_found'             => __( 'Partner not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Partner Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into partner', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this partner', 'text_domain' ),
		'items_list'            => __( 'Partners list', 'text_domain' ),
		'items_list_navigation' => __( 'Partners list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter partners list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Partner', 'text_domain' ),
		'description'           => __( 'Participating Schools', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'partners', $args );

}
add_action( 'init', 'register_partners_post_type', 0 );
