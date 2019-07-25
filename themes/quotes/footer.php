<?php
/**
 * The template for displaying the footer.
 *
 * @package quotes-on-dev
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

				<div class="site-info">
					<a href="<?php echo esc_url( 'https://github.com/robhhr' ); ?>"><?php printf( esc_html( 'Brought to you by Roberto H' )); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
