<?php
/**
 * Template part for displaying single posts.
 *
 * @package quotes-on-dev
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="archives-container">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>
    
    <h2 class="categories-authors">Quote Authors</h2>
	<div class="archives-content-author">
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

    <h2 class="categories-archive">Categories</h2>
    <div class="archives-content-categories">
            <?php $categories = get_categories();
                foreach($categories as $category) {
                echo '<div><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
                }?>
    </div>

    <h2 class="tags-archives">Tags</h2>
    <div class="archives-content-tags">
        <?php
        $tags = get_tags();
            foreach($tags as $tag) {
                $tag_link = get_tag_link( $tag->term_id );
	            echo "<div class='tags'><a href='{$tag_link}'>"."{$tag->name}</a>".'</div>';} ?>
    </div>
</div>
</article>