<ul>
	<li class="widget">
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</li>

	<li class="widget">
		<h2>Random snapshot</h2>
		<?php plogger_press_sidebar(); ?>
	</li>

	<li class="widget">
		<h2>Tags</h2>
		<?php wp_tag_cloud('smallest=7&largest=15'); ?>
	</li>


	<?php wp_list_bookmarks('category=26&show_description=1&orderby=rand'); ?>
		
	<li class="widget">
		<h2>Contributors</h2>
		<ul>
			<?php wp_list_authors('show_fullname=1'); ?> 
		</ul>
	</li>

	<li class="widget"><h2><?php _e('Admin'); ?></h2>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
		</ul>
	</li>

</ul>