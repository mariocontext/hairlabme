
<div class="small-screen-hider">
	<!-- on small screens this parent is set to display:none. this may cause css background content to not download inside with the exception of the fennec browser.  http://timkadlec.com/2012/04/media-query-asset-downloading-results/ -->

	<div id="sidebar">
	

	<?php if (!is_page(57)){ ?><div class="ttl_sidebar"><?php _e('Learn more About our<br />Special Hair Restoration','theme1164'); ?></div>
	<?php } ?>
	<?php if ( ! dynamic_sidebar( 'Sidebar' )) : ?>
		<!-- Wigitized Sidebar -->
	<?php endif; ?>
	
	</div><!--sidebar-->

</div><!-- /small-screen-hider -->