<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package capstona1
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer site-inner" role="contentinfo">
		<div class="social-icons">
			<ul>
				<li>
					<a href="https://www.facebook.com/Capstona" target="_blank">
						<img src="http://imgur.com/bPWDJxs.png" alt="facebook">
					</a> 
				</li>
				<li>
					<a href="https://www.facebook.com/Capstona" target="_blank">
						<img src="http://imgur.com/lWf36Hu.png" alt="instagram" >
					</a> 
				</li>
				<li>
					<a href="https://www.facebook.com/Capstona" target="_blank">
						<img src="http://imgur.com/ArMLDm3.png" alt="pinterest">
					</a> 
				</li>
				<li>
					<a href="https://www.facebook.com/Capstona" target="_blank">
						<img src="http://imgur.com/I6DKzam.png" alt="google+">
					</a> 
				</li>
				<li>
					<a href="tel:+91-7737-333333" target="_blank">
						<img src="http://imgur.com/cAmepxz.png" alt="whatsapp">
					</a>
				</li>
			</ul>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'capstona1' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'capstona1' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'capstona1' ), 'capstona1', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
