<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

 // Register Custom TAXONOMIES-------------------*

// PARTNERS TAXONOMY-------------------*
 function partners_taxonomy() {

 	$labels = array(
 		'name'                       => _x( 'Partner', 'Taxonomy General Name', 'text_domain' ),
 		'singular_name'              => _x( 'Partner', 'Taxonomy Singular Name', 'text_domain' ),
 		'menu_name'                  => __( 'Partner', 'text_domain' ),
 		'all_items'                  => __( 'All Partners', 'text_domain' ),
 		'parent_item'                => __( 'Partner Item', 'text_domain' ),
 		'parent_item_colon'          => __( 'Parent Partner:', 'text_domain' ),
 		'new_item_name'              => __( 'New Partner Name', 'text_domain' ),
 		'add_new_item'               => __( 'Add New Partner', 'text_domain' ),
 		'edit_item'                  => __( 'Edit Partner', 'text_domain' ),
 		'update_item'                => __( 'Update Partner', 'text_domain' ),
 		'view_item'                  => __( 'View Partner', 'text_domain' ),
 		'separate_items_with_commas' => __( 'Separate partners with commas', 'text_domain' ),
 		'add_or_remove_items'        => __( 'Add or remove partners', 'text_domain' ),
 		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
 		'popular_items'              => __( 'Popular Partners', 'text_domain' ),
 		'search_items'               => __( 'Search Partners', 'text_domain' ),
 		'not_found'                  => __( 'Not Found', 'text_domain' ),
 		'no_terms'                   => __( 'No partners', 'text_domain' ),
 		'items_list'                 => __( 'Partners list', 'text_domain' ),
 		'items_list_navigation'      => __( 'Partners list navigation', 'text_domain' ),
 	);
 	$args = array(
 		'labels'                     => $labels,
 		'hierarchical'               => true,
 		'public'                     => true,
 		'show_ui'                    => true,
 		'show_admin_column'          => true,
 		'show_in_nav_menus'          => true,
 		'show_tagcloud'              => true,
 	);
 	register_taxonomy( 'partners', array( 'project' ), $args );

 }
 add_action( 'init', 'partners_taxonomy', 0 );

//SEASON TAXONOMY-------------------*

function season_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Seasons', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Season', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Season', 'text_domain' ),
		'all_items'                  => __( 'All Seasons', 'text_domain' ),
		'parent_item'                => __( 'Season Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Season:', 'text_domain' ),
		'new_item_name'              => __( 'New Season Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Season', 'text_domain' ),
		'edit_item'                  => __( 'Edit Season', 'text_domain' ),
		'update_item'                => __( 'Update Season', 'text_domain' ),
		'view_item'                  => __( 'View Season', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate seasons with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove seasons', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Seasons', 'text_domain' ),
		'search_items'               => __( 'Search Seasons', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No seasons', 'text_domain' ),
		'items_list'                 => __( 'Seasons list', 'text_domain' ),
		'items_list_navigation'      => __( 'Seasons list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'season', array( 'project' ), $args );

}
add_action( 'init', 'season_taxonomy', 0 );

// YEAR TAXONOMY-------------------*

function year_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Years', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Year', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Year', 'text_domain' ),
		'all_items'                  => __( 'All Years', 'text_domain' ),
		'parent_item'                => __( 'Year Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Year:', 'text_domain' ),
		'new_item_name'              => __( 'New Year Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Year', 'text_domain' ),
		'edit_item'                  => __( 'Edit Year', 'text_domain' ),
		'update_item'                => __( 'Update Year', 'text_domain' ),
		'view_item'                  => __( 'View Year', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate years with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove years', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Years', 'text_domain' ),
		'search_items'               => __( 'Search Years', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No years', 'text_domain' ),
		'items_list'                 => __( 'Years list', 'text_domain' ),
		'items_list_navigation'      => __( 'Years list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'year', array( 'project' ), $args );

}
add_action( 'init', 'year_taxonomy', 0 );

//neighbourhood TAXONOMY-------------------*

function neighbourhoods_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Neighbourhoods', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Neighbourhood', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Neighbourhood', 'text_domain' ),
		'all_items'                  => __( 'All Neighbourhoods', 'text_domain' ),
		'parent_item'                => __( 'Neighbourhood Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Neighbourhood:', 'text_domain' ),
		'new_item_name'              => __( 'New Neighbourhood Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Neighbourhood', 'text_domain' ),
		'edit_item'                  => __( 'Edit Neighbourhood', 'text_domain' ),
		'update_item'                => __( 'Update Neighbourhood', 'text_domain' ),
		'view_item'                  => __( 'View Neighbourhood', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate years with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove neighbourhoods', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Neighbourhoods', 'text_domain' ),
		'search_items'               => __( 'Search Neighbourhoods', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No neighbourhoods', 'text_domain' ),
		'items_list'                 => __( 'Neighbourhoods list', 'text_domain' ),
		'items_list_navigation'      => __( 'Neighbourhoods list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'neighbourhoods', array( 'project' ), $args );

}
add_action( 'init', 'neighbourhoods_taxonomy', 0 );
