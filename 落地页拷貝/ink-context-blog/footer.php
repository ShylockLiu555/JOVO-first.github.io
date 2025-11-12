<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ink-context-blog
 */

?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer footer">
		<div class="site-info container">
			<div class="row">
				<div class="col-md-12">
					<?php
					if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) {
						?>
						<div class="footer-widgets">
							<div class="row">
								<?php
								if ( is_active_sidebar( 'footer-1' ) ) {
									?>
									<div class="col-md-3">
										<?php dynamic_sidebar( 'footer-1' ); ?>
									</div>
									<?php
								}
								if ( is_active_sidebar( 'footer-2' ) ) {
									?>
									<div class="col-md-3">
										<?php dynamic_sidebar( 'footer-2' ); ?>
									</div>
									<?php
								}
								if ( is_active_sidebar( 'footer-3' ) ) {
									?>
									<div class="col-md-3">
										<?php dynamic_sidebar( 'footer-3' ); ?>
									</div>
									<?php
								}
								if ( is_active_sidebar( 'footer-4' ) ) {
									?>
									<div class="col-md-3">
										<?php dynamic_sidebar( 'footer-4' ); ?>
									</div>
									<?php
								}
								?>
							</div>
						</div>
						<?php
					}
					?>
					<div class="footer-bottom">
						<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'ink-context-blog' ); ?></p>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

