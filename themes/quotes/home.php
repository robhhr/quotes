<?php
/**
 * The template for displaying all pages.
 *
 * @package quotes-on-dev
 */

get_header(); ?>

	<div id="primary" class="content-area-home">
		<main id="main" class="site-main" role="main">


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'home' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		<button type="button" class="quote-request">Show Me Another!</button>
		</div>

	</div><!-- #primary -->

<?php get_footer(); ?>
