<?php
/*
Template Name: Links
*/
?>


<?php get_header(); ?>
		
<div id="content_box">

	<div id="left_side">
		
		<h1>Links</h1>
		<div class="listing">
				<ul>
				<?php get_links_list(); ?>
				</ul>
		</div><!--listing-->
			
	</div><!--left_side-->

	<div class="sidebar">
		<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
	</div>
	<div class="r_sidebar">
		<?php include (TEMPLATEPATH . '/r_sidebar.php'); ?>
	</div>
</div><!--content_box-->

<?php get_footer(); ?>