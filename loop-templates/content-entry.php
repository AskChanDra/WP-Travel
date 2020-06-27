<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package WP-Travel
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="col-sm-6 col-md-3" id="post-<?php the_ID(); ?>">
	<div class="card  mb-3">
		<!-- set a width on the image otherwise it will expand to full width       -->
		<img class="card-img-top img-fluid" src="<?php echo get_the_post_thumbnail_url( $post->ID, 'travel-thumb' ); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(get_the_ID()) , '_wp_attachment_image_alt', true);; ?>" width="400">
		<div class="card-body">
			
				<?php
				the_title(
					sprintf( '<h4 class="entry-title card-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
					'</a></h4>'
				);
				?>
            <?php wp_travel_destination_entry_footer(); ?>
			<p class="card-text"><?php the_excerpt(); ?></p>		
			
		</div>
	</div>
	<!-- /.card -->
</div>