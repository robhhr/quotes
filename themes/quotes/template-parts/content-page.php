<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package quotes-on-dev
 */

?>

<article class="article-about" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="about-container">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div>
</article>