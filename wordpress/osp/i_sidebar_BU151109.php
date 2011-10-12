<ul>
	<li class="widget">
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</li>

	<li class="widget">
		<h2>Random snapshots</h2>
		<?php plogger_press_sidebar(); ?>
	</li>


	<div id="feed">
	<h2>Feeds</h2>

	<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	<?php endif; ?>

	</div>

	<li class="widget"><h2><?php _e('Admin'); ?></h2>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
		</ul>
	</li>

</ul>