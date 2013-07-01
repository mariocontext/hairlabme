      <div class="clear"></div>
      </div><!--.wrapper-->
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
    </div><!--.container-->
  </div><!--#main-wrapper-->
  <footer id="footer">
    <!--<div class="container_16">-->
      <div class="wrapper">
      	<div class="lft_footer">
        <nav class="footer">
          <?php wp_nav_menu( array(
            'container'       => 'ul', 
            'menu_class'      => 'footer-nav', 
            'depth'           => 0,
            'theme_location' => 'footer_menu' 
            )); 
          ?>
        </nav>
        <div class="btmft_menu">
          <?php _e('<ul>
          <li><a href="http://www.hairlab.net/sitemap/">Sitemap</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions </a></li>
            </ul>','theme1164'); ?>
        </div>
        <div class="dv_copy"><?php bloginfo('name'); ?> &copy; <?php echo date("Y") ?></div>
        </div>
        <div class="copy">
        	<div class="txt_sn"><?php _e('Connect with us!','theme1164'); ?></div>
            <div class="ic_sn"><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/site-image/img_delic.gif" alt="Delicious" width="22" height="21" border="0" title="Delicious" /></a><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/site-image/img_flicer.gif" alt="Flickr" width="22" height="21" border="0" title="Flickr" /></a><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/site-image/img_twitter.gif" alt="Twitter" width="22" height="21" border="0" title="Twitter" /></a></div>
        </div>
      </div>
    <!--.</div>container-->
  </footer>
  <div class="btm_fttxt"> <?php _e('HAIRLAB&reg; and the HAIRLAB logo are part of a family of trademarks of United Global Media Group, Inc. Trademarks and URL are licensed by Dr. Ron Chao. United Global Media Group, Inc. and its affiliates are not a professional medical corporation nor engage in the field of practicing medicine. V3', 'theme1164'); ?></div>
</div><!--#main-->
<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work proporly -->
</body>
</html>