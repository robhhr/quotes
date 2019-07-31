<?php
/**
 * Template part for displaying posts.
 *
 * @package quotes-on-dev
 */

?>
<article>
    <div class="tag-container">
        <header class="arch-header">
            <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
        </header>

            <?php while ( have_posts() ) : the_post(); ?>
            <div class="arch-content">
                <p><?php the_excerpt(); ?></p>
                <p>- <?php the_title() ?></p>
            </div>
            <?php endwhile; ?>
            <?php qod_numbered_pagination(); ?>
        </div>
</article>