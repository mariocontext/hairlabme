		<div id="add-this-bar">
			<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style " style="width: 580px; margin: auto; clear: both;margin-top: 30px;">
			<a style="position: relative;" class="addthis_button_twitter_follow_native" tf:screen_name="HairlabLA"></a>
			<a style="position: relative; margin-left: -32px;" class="addthis_button_tweet"></a> 
			<a style="position: relative; margin-left: -31px;" class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
			<a style="position: relative; margin-left: 0px;" class="addthis_button_facebook_send"></a>
			<a style="position: relative; margin-left: 0px;" class="addthis_button_google_plusone" g:plusone:size="medium"></a> 
			<a style="position: relative; margin-left: -29px;" class="addthis_counter addthis_pill_style"></a>
			</div>
			<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
			<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-513465de1abe0367"></script>
			<!-- AddThis Button END -->
		</div><!-- add-this-bar -->
		

		</div> <!-- .container -->
	</div> <!-- #body-area -->

	<div id="footer-area">
		<div class="container">
			<?php get_sidebar( 'footer' ); ?>

			<div id="footer-bottom" class="clearfix">
			<?php
				$menu_class = 'bottom-nav';
				$footerNav = '';

				if ( function_exists( 'wp_nav_menu' ) ) $footerNav = wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menu_class, 'echo' => false, 'depth' => '1' ) );
				if ( '' == $footerNav ) show_page_menu( $menu_class );
				else echo( $footerNav );
			?>


				<div id="et-social-icons">
				<?php
					$template_directory_uri = get_template_directory_uri();
					if ( 'on' == et_get_option( 'foxy_show_google_icon', 'on' ) ) $social_icons['google'] = array( 'image' => $template_directory_uri . '/images/google.png', 'url' => et_get_option( 'foxy_google_url' ), 'alt' => __( 'Google Plus', 'foxy' ) );
					if ( 'on' == et_get_option( 'foxy_show_facebook_icon','on' ) ) $social_icons['facebook'] = array( 'image' => $template_directory_uri . '/images/facebook.png', 'url' => et_get_option( 'foxy_facebook_url' ), 'alt' => __( 'Facebook', 'foxy' ) );
					if ( 'on' == et_get_option( 'foxy_show_twitter_icon', 'on' ) ) $social_icons['twitter'] = array( 'image' => $template_directory_uri . '/images/twitter.png', 'url' => et_get_option( 'foxy_twitter_url' ), 'alt' => __( 'Twitter', 'foxy' ) );

					$social_icons = apply_filters( 'et_social_icons', $social_icons );

					if ( ! empty( $social_icons ) ) {
						foreach ( $social_icons as $icon ) {
							if ( $icon['url'] )
								printf( '<a href="%s" target="_blank"><img src="%s" alt="%s" /></a>', esc_url( $icon['url'] ), esc_attr( $icon['image'] ), esc_attr( $icon['alt'] ) );
						}
					}
				?>
				</div> <!-- #social-icons -->

				<!-- div id="basic-copyright">Hairlab.net © 2013</div -->

			</div> <!-- #footer-bottom -->
		</div> <!-- .container -->
	</div> <!-- #footer-area -->

	<div id="footer-bottom-area" class="container">

		<div class="small-screen-quick-jump-buttons">

			<a href="tel:+1866-846-2588" class="big-button biggreen">Call Us</a>
			<a href="http://www.hairlab.me/sitemap/" class="big-button biggreen">Map</a>
			<a href="http://www.hairlab.me/contact-us/" class="big-button biggreen">Contact Us</a>
			<a href="#back-to-top" class="big-button biggreen">Back to Top</a>

		</div><!-- small-screen-quick-jump-buttons -->



		<p> <?php bloginfo('name'); ?> &copy; <?php echo date("Y") ?>

			  <?php _e('HAIRLAB&reg; and the HAIRLAB logo are part of a family of trademarks of United Global Media Group, Inc. Trademarks and URL are licensed by Dr. Ron Chao. United Global Media Group, Inc. and its affiliates are not a professional medical corporation nor engage in the field of practicing medicine. V4', 'HLchild'); ?></p>

	</div>

	<?php wp_footer(); ?>
	<!-- using HL footer -->
</body>
</html>