<?php
/**
 * Template part for displaying posts.
 *
 * @package quotes-on-dev
 */

?>
<article>
    <header class="cat-header">
        <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
    </header>

        <?php while ( have_posts() ) : the_post(); ?>
        <div class="category-content">
			<p><?php the_excerpt(); ?></p>
			<p>- <?php the_title() ?></p>
		</div>
		<?php endwhile; ?>
        <?php qod_numbered_pagination(); ?>
</article>