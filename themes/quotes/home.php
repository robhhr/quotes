<?php
/**
 * The template for displaying all pages.
 *
 * @package quotes-on-dev
 */

get_header(); ?>

	<div id="primary" class="content-area-home">
		<main id="main" class="site-main-home" role="main">
		<article class="home-container">
			<?php
			$home_post = new WP_Query( array(
				"orderby" => 'rand',
				'posts_per_page' => 1,
				));
				if ( $home_post->have_posts() ) : ?>
					<?php while ( $home_post->have_posts() ) : $home_post->the_post(); ?>
					<div class="ajax-content">
						<p><?php the_content(); ?></p>
						<p id="ajax-author">- <?php the_title(); ?></p>
						<!-- <button type="button" class="quote-request">Show Me Another!</button> -->
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>

		</article>

		</main>
		<button type="button" class="quote-request">Show Me Another!</button>

	</div>

<?php get_footer(); ?>
