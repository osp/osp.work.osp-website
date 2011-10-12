<ul>
	<li class="widget">
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</li>

	<li class="widget">
		<?php get_mostpopular(); ?>
	</li>

	<li class="widget">
		<h2>Tags</h2>
		<?php wp_tag_cloud('smallest=7&largest=15&order=RAND&number=0'); ?>
	</li>
		
	<li class="widget"><h2><?php _e('Admin'); ?></h2>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
		</ul>
	</li>

</ul>