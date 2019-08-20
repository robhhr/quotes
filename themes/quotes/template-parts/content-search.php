<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package quotes-on-dev
 */

?>

	<header class="entry-header-search">
		<?php the_title( sprintf( '<h2 class="entry-title"><a class="search-link" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>


	</header>

	<div class="entry-summary-search">
		<?php the_excerpt(); ?>
	</div>
