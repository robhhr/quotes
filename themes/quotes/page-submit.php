<?php
/**
 * The template for displaying all pages.
 *
 * @package quotes-on-dev
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article>
			<?php while ( have_posts() ) : the_post(); ?>

			<h1>Submit a Quote</h1>
			<?php the_content(); ?>
	
			<?php endwhile; ?>
			</article>
		</main>
	</div>
<?php get_footer(); ?>
