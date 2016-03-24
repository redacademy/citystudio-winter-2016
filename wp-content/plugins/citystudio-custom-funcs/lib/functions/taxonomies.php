<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

 // Register Custom Taxonomy
 function project_taxonomy() {

 	$labels = array(
 		'name'                       => _x( 'Project Tags', 'Taxonomy General Name', 'text_domain' ),
 		'singular_name'              => _x( 'Project Tag', 'Taxonomy Singular Name', 'text_domain' ),
 		'menu_name'                  => __( 'Project Tags', 'text_domain' ),
 		'all_items'                  => __( 'Project Tags', 'text_domain' ),
 		'parent_item'                => __( 'Project Tag', 'text_domain' ),
 		'parent_item_colon'          => __( 'Parent Project Tag:', 'text_domain' ),
 		'new_item_name'              => __( 'New Project Tag', 'text_domain' ),
 		'add_new_item'               => __( 'Add Project Tag', 'text_domain' ),
 		'edit_item'                  => __( 'Edit Project Tag', 'text_domain' ),
 		'update_item'                => __( 'Update Project Tag', 'text_domain' ),
 		'view_item'                  => __( 'View Project Tag', 'text_domain' ),
 		'separate_items_with_commas' => __( 'Separate Project Tags', 'text_domain' ),
 		'add_or_remove_items'        => __( 'Add or remove project tags', 'text_domain' ),
 		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
 		'popular_items'              => __( 'Popular Project Tags', 'text_domain' ),
 		'search_items'               => __( 'Search Project Tags', 'text_domain' ),
 		'not_found'                  => __( 'Not Found', 'text_domain' ),
 		'no_terms'                   => __( 'No Project Tags', 'text_domain' ),
 		'items_list'                 => __( 'Project Tags list', 'text_domain' ),
 		'items_list_navigation'      => __( 'Project Tags list navigation', 'text_domain' ),
 	);
 	$rewrite = array(
 		'slug'                       => '',
 		'with_front'                 => true,
 		'hierarchical'               => true,
 	);
 	$args = array(
 		'labels'                     => $labels,
 		'hierarchical'               => true,
 		'public'                     => true,
 		'show_ui'                    => true,
 		'show_admin_column'          => true,
 		'show_in_nav_menus'          => true,
 		'show_tagcloud'              => true,
 		'rewrite'                    => $rewrite,
 	);
 	register_taxonomy( 'project_tags', array( 'project' ), $args );

 }
 add_action( 'init', 'project_taxonomy', 0 );
