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

	<div class="archives-content-author">
        <h2>Quote Authors</h2>
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
            <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>

    <div class="archives-content-categories">
        <h2>Categories</h2>
            <?php $categories = get_categories();
                foreach($categories as $category) {
                echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                }?>
    </div>

    <div class="archives-content-tags">
        <h2>Tags</h2>
        <?php
        $tags = get_tags(array(
            'hide_empty' => false
            ));
            foreach ($tags as $tag) {
            echo '< href="' . $tag->name . '"/>';
            }?>
    </div>
</article>