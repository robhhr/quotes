<?php
/**
 * The template for displaying the footer.
 *
 * @package quotes-on-dev
 */

?>

			</div>

			<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-content">

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

				<!-- <div class="site-info"> -->
					<p class="credits">Brought to you by <a href="<?php echo esc_url( 'https://github.com/robhhr' ); ?>" target="_blank"><?php printf( esc_html( 'Roberto H' )); ?></a></p>
				<!-- </div> -->
			</div>
			</footer>
		</div>

		<?php wp_footer(); ?>

	</body>
</html>
