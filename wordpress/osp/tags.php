<?php
/*
Template Name: Tags
*/
?>


<?php get_header(); ?>
		
<div id="content_box">

	<div id="left_side">
		<h1>Tags</h1>
		<br/>
				<ul>
					<?php wp_tag_cloud(''); ?>
				</ul>
			
	</div><!--left_side-->

	<div class="sidebar">
		<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
	</div>
</div><!--content_box-->

<?php get_footer(); ?>