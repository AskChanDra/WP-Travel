<?php
/**
 * Custom Taxonomies 
 *
 * @package WP-Travel
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wp_travel_travel_taxonomies' ) ) {

// Register Custom Taxonomy
function wp_travel_travel_taxonomies() {

	$labels = array(
		'name'                       => _x( 'Interests', 'Taxonomy General Name', 'wp-travel' ),
		'singular_name'              => _x( 'Interest', 'Taxonomy Singular Name', 'wp-travel' ),
		'menu_name'                  => __( 'Interest', 'wp-travel' ),
		'all_items'                  => __( 'All Interests', 'wp-travel' ),
		'parent_item'                => __( 'Parent Item', 'wp-travel' ),
		'parent_item_colon'          => __( 'Parent Item:', 'wp-travel' ),
		'new_item_name'              => __( 'New Interest Name', 'wp-travel' ),
		'add_new_item'               => __( 'Add New Interest', 'wp-travel' ),
		'edit_item'                  => __( 'Edit Item', 'wp-travel' ),
		'update_item'                => __( 'Update Interest', 'wp-travel' ),
		'view_item'                  => __( 'View Interest', 'wp-travel' ),
		'separate_items_with_commas' => __( 'Separate interests with commas', 'wp-travel' ),
		'add_or_remove_items'        => __( 'Add or remove interests', 'wp-travel' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wp-travel' ),
		'popular_items'              => __( 'Popular Interests', 'wp-travel' ),
		'search_items'               => __( 'Search Interests', 'wp-travel' ),
		'not_found'                  => __( 'Interests Not Found', 'wp-travel' ),
		'no_terms'                   => __( 'No items', 'wp-travel' ),
		'items_list'                 => __( 'Items list', 'wp-travel' ),
		'items_list_navigation'      => __( 'Items list navigation', 'wp-travel' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'interest', array( 'destination' ), $args );

}
add_action( 'init', 'wp_travel_travel_taxonomies', 0 );

}

?>