<?php
/**
 * Template part for displaying single posts.
 *
 * @package quotes-on-dev
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>

	<div class="archives-content">
    <?php
    $author_posts = new WP_Query( array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 1000,
        ));
        if ( $author_posts->have_posts() ) : ?>

        <?php while ( $author_posts->have_posts() ) : $author_posts->the_post(); ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php endwhile; ?>

        <?php else : ?>
        <p><?php echo ( 'Sorry, no posts were found.' ); ?></p>
        <?php endif; ?>

    <?php wp_reset_postdata(); ?>
	</div>
</article>