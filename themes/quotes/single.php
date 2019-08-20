<?php
/**
 * The template for displaying all pages.
 *
 * @package quotes-on-dev
 */

get_header(); ?>

	<div id="primary" class="content-area-home">
		<main id="main" class="site-main-home" role="main">
<article>

            <?php if ( have_posts() ) : ?>
                <?php while (have_posts() ) : the_post(); ?>
                <div class="ajax-content">
					<p><?php the_content(); ?></p>
					<p id="ajax-author">- <?php the_title() ?></p>
				</div>
                <?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>

</article>
		</main>
		<button type="button" class="quote-request">Show Me Another!</button>

		</div>

	</div>

<?php get_footer(); ?>