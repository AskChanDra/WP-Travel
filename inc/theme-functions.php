<?php
/**
 * Theme Functions 
 * Actions / Filters
 *
 * @package WP-Travel
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Remove Archive: , Author:

function wp_travel_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
  
    return $title;
}
 
add_filter( 'get_the_archive_title', 'wp_travel_archive_title' );

// Archive Grid count = 8

function wp_travel_custom_posts_per_page( $query ) {
    if ( $query->is_archive('destinations') || $query->is_archive('interests') ) {
        if(!is_admin()){
            set_query_var('posts_per_page', 8);
        }
    }
}
add_action( 'pre_get_posts', 'wp_travel_custom_posts_per_page' );


// Add thumbnail size for destiination grid

function wp_travel_thumbnail_size_setup() {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'travel-thumb', 400, 300, true );
 }
  
 add_action( 'after_setup_theme', 'wp_travel_thumbnail_size_setup' );
 