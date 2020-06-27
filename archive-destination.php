<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main full-width " id="main">

				<?php
				if ( have_posts() ) {
					?>
					<header class="page-header">
					
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<div class="row">

						<?php
						// Start the loop.
						while ( have_posts() ) {
							the_post();

							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part( 'loop-templates/content', 'entry' );
						}
						?>

					</div>
					<!-- /.row -->
				<?php
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>

			</main><!-- #main -->

            <div class="full-width" id="pagination">
			<?php
			// Display the pagination component.
			understrap_pagination();
			?>
            </div><!-- #pagination -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
