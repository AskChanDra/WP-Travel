<?php

if ( ! function_exists('wp_travel_destination_post_type') ) {

    // Register Custom Post Type
    function wp_travel_destination_post_type() {
    
        $labels = array(
            'name'                  => _x( 'Destinations', 'Post Type General Name', 'wp-travel' ),
            'singular_name'         => _x( 'Destination', 'Post Type Singular Name', 'wp-travel' ),
            'menu_name'             => __( 'Destinations', 'wp-travel' ),
            'name_admin_bar'        => __( 'Destination', 'wp-travel' ),
            'archives'              => __( 'Item Archives', 'wp-travel' ),
            'attributes'            => __( 'Item Attributes', 'wp-travel' ),
            'parent_item_colon'     => __( 'Parent Item:', 'wp-travel' ),
            'all_items'             => __( 'All Destinations', 'wp-travel' ),
            'add_new_item'          => __( 'Add New Item', 'wp-travel' ),
            'add_new'               => __( 'Add New', 'wp-travel' ),
            'new_item'              => __( 'New Item', 'wp-travel' ),
            'edit_item'             => __( 'Edit Item', 'wp-travel' ),
            'update_item'           => __( 'Update Item', 'wp-travel' ),
            'view_item'             => __( 'View Item', 'wp-travel' ),
            'view_items'            => __( 'View Items', 'wp-travel' ),
            'search_items'          => __( 'Search Item', 'wp-travel' ),
            'not_found'             => __( 'Destination Not found', 'wp-travel' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'wp-travel' ),
            'featured_image'        => __( 'Featured Image', 'wp-travel' ),
            'set_featured_image'    => __( 'Set featured image', 'wp-travel' ),
            'remove_featured_image' => __( 'Remove featured image', 'wp-travel' ),
            'use_featured_image'    => __( 'Use as featured image', 'wp-travel' ),
            'insert_into_item'      => __( 'Insert into item', 'wp-travel' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'wp-travel' ),
            'items_list'            => __( 'Items list', 'wp-travel' ),
            'items_list_navigation' => __( 'Items list navigation', 'wp-travel' ),
            'filter_items_list'     => __( 'Filter items list', 'wp-travel' ),
        );
        $args = array(
            'label'                 => __( 'Destination', 'wp-travel' ),
            'description'           => __( 'Destination Description', 'wp-travel' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
            'taxonomies'            => array( 'interest' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-palmtree',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => 'destinations',
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'destination', $args );
    
    }
    add_action( 'init', 'wp_travel_destination_post_type', 0 );
    
    }
?>