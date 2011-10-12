<ul>

	<li class="widget">
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</li>


<li class="widget">
			<h2>Latest comments</h2>
			<ul><?php blc_latest_comments(3); ?></ul>
		</li>

<li class="widget">
		<h2>Random image</h2>
		<ul>
			<?php include('/var/alternc/html/o/ospublish/www/ospublish.constantvzw.org/image/plog-content/plugins/random-images/random-images.php'); ?>
		</ul>
	</li>

	<div id="feed">

	<h2><a href="http://identi.ca/osp/all">identi.ca/osp/all</a></h2>

	<?php srssfetcher('http://identi.ca/api/statuses/friends_timeline/osp.rss', 10, true, true, true, false); ?>
       </div>


	<li class="widget"><h2><?php _e('Admin'); ?></h2>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
		</ul>
	</li>

</ul>
