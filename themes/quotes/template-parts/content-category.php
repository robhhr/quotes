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
    <div class="category-content">
        <p><?php the_excerpt(); ?></p>
        <h2>- <?php the_title(); ?></h2>
    </div>
    <?php wp_reset_postdata(); ?>
    <?php qod_numbered_pagination(); ?>
</article>