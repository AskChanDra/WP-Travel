<?php
/**
* Template Name: Destination Grid Home
*
* @package WP-Travel
*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

$args = array(  
    'post_type' => 'destination',
    'post_status' => 'publish',
    'posts_per_page' => 8
);
$loop = new WP_Query( $args ); 

?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main full-width " id="main">

				<?php
				if ( $loop->have_posts() ) {
					?>
					<header class="page-header">
					
						<?php
						//the_archive_title( '<h1 class="page-title">', '</h1>' );
						//the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<div class="row">

						<?php
						// Start the loop.
						while ( $loop->have_posts() ) {
							$loop->the_post();

							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part( 'loop-templates/content', 'entry' );
                        }
                        wp_reset_postdata(); 
						?>

					</div>
					<!-- /.row -->
				<?php
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>

			</main><!-- #main -->

            <div class="full-width text-center" >
                <a href="<?php echo get_home_url() . '/destinations'; ?>" class="btn btn-primary"> View All Destination</a>
			<?php
			// Display the pagination component.
			//understrap_pagination();
			?>
            </div><!-- #pagination -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
