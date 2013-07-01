<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="general-button"><a href="#page"><span class="icon-caret-up icon-large" aria-hidden="true"></span>Return to Top</a></div>

		<!-- sitemap link actually defaults to a modified 404 page because sitemap doesn't actually exist. To create an actual sitemap page, create a template called sitemap, insert the include to the sitemap code into it and then create a new page and set the page to that template. see http://yoast.com/html-sitemap-wordpress/ for guidelines -->
		<div class="general-button"><a href="sitemap"><span class="icon-sitemap icon-large" aria-hidden="true"></span>Sitemap</a></div>
		
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<span class="wordpress-credits">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
			</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- gives the ability to use some psuedo classes for older versions of IE and IE mobile http://selectivizr.com/ -->
<!--[if (lt IE 9) & (!IEMobile)]>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/selectivizr-min.js"></script>
<![endif]-->



<?php wp_footer(); ?>

</body>
</html>