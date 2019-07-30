<?php
/**
 * The template for displaying all pages.
 *
 * @package quotes-on-dev
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article>

			<?php while ( have_posts() ) : the_post(); ?>
				<h1>Submit a Quote</h1>
				<?php if (( is_user_logged_in())) { ?>
					<div class="quote-form">
						<?php get_template_part( 'template-parts/content', 'submit' ); ?>
					</div>
				<?php } else { ?>
					<p>Sorry, you must be logged in to submit a quote!</p>
					<a href="<?php wp_login_url() ?>">Click here to login</a>
				<?php } ?>
			<?php endwhile; ?>

			</article>
		</main>
	</div>
<?php get_footer(); ?>
