<?php echo "HELLO, WORLD" ?>

<div class="logo">	
	<?php echo '<style type="text/css"> .logo { background-image:url('.get_stylesheet_directory_uri().'/images/qod-logo.svg) !important; height: 30px !important; width: 45px !important; background-size: 100% !important; background-repeat: no-repeat;}</style>';?>		
</div>

<?php
/**
 * The template for displaying all pages.
 *
 * @package quotes-on-dev
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
