<?php
/**
 * The template for displaying archive pages.
 *
 * @package quotes-on-dev
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

				<?php get_template_part( 'template-parts/content', 'category' ); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main>
	</div>

<?php get_footer(); ?>
