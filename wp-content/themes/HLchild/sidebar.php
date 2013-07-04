<?php if ( is_active_sidebar( 'sidebar-1' ) ){ ?>
	<div id="sidebar">

	<?php if (!is_page(57)){ ?><div class="sidebar-header"><?php _e('Learn more about our<br />Special Hair Restoration','HLchild'); ?></div>
	<?php } ?>

		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div> <!-- end #sidebar -->
<?php } ?>
