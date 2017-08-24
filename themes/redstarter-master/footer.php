<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<!-- <a href="<?php //echo esc_url( 'https://wordpress.org/' ); ?>"><?php //printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
				</div><!-- .site-info -->

<!-- 				<div style="background: url(<?php //echo get_bloginfo('url').'/wp-content/uploads/2017/08/dark-wood.png'; ?>) repeat; background-size: 40%;">
					<div class="flex">
						<div class="contact" style="width: 25%; padding-top: 4rem;">
							<ul style="list-style-type: none; color: white; font-size: 1.5rem; line-height: 3rem;">
								<li style="color: orange;">CONTACT INFO</li>
								<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@inhabitent.com" style="padding-left: 1rem;">info@inhabitent.com</a></li>
								<li><i class="fa fa-phone" aria-hidden="true" style="padding-right: 1rem;"></i>778-456-7891</li>
								<li style="word-spacing: 1rem;">
									<a href="http://www.facebook.com" style="color: white;"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
									<a href="http://www.twitter.com" style="color: white;"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
									<a href="http://plus.google.com" style="color: white;"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
						<div style="width: 25%; padding-top: 4rem;">
							<ul style="list-style-type: none; color: white; font-size: 1.5rem; line-height: 3rem;">
								<li style="color: orange;">BUSINESS HOURS</li>
								<li><b>Monday-Friday:</b> 9am to 5pm</li>
								<li><b>Saturday:</b> 10am to 2pm</li>
								<li><b>Sunday:</b> Closed</li>
							</ul>
						</div>
						<div class="flex flex-justify-end" style="width: 50%; padding-top: 4rem;">
							<div class="flex flex-column" style="padding: 0.75rem 5rem 0 0;">
								<img src="<?php //echo get_bloginfo('template_url').'/assets/images/inhabitent-logo-text.svg'; ?>" />
							</div>
						</div>
					</div>
					<div style="color: white; text-align: center; font-size: 1.25rem; padding: 3rem 0 1rem 0;">
						<p>COPYRIGHT &COPY 2016 INHABITENT</p>
					</div>
				</div>
 -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
				<div style="background: url(<?php echo get_bloginfo('url').'/wp-content/uploads/2017/08/dark-wood.png'; ?>) repeat; background-size: 40%;">
				    <div id="secondary" class="flex footer-widget" role="complementary">
				    	<?php dynamic_sidebar( 'footer-1' ); ?>
				    </div>
					<div style="color: white; text-align: center; font-size: 1.25rem; padding: 3rem 0 1rem 0;">
						<p>COPYRIGHT &COPY <?php echo date('Y'); ?> INHABITENT</p>
					</div>
			    </div>
<?php endif; ?>

		<?php wp_footer(); ?>

	</body>
</html>
