<?php
/**
 * The template for displaying search results pages.
 *
 * @package quotes-on-dev
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main-search" role="main">
<article>
	<div class="search-container">
		<?php if ( have_posts() ) : ?>

			<header class="page-header-search">
				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>

			<?php ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

			<?php endwhile; ?>

			<?php qod_numbered_pagination(); ?>
			</div>
</article>

		<?php endif; ?>

		</main>
	</section>

<?php get_footer(); ?>
