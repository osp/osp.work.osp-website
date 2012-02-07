<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
		
	<div id="content_box">

		<div id="left_side">
		
			<h1>Browse Archives:</h1>
			<div class="listing">
				<h2>By month</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
				<h2>By category</h2>
				<ul>
					<?php wp_list_categories('title_li=0'); ?>
				</ul>
			</div>
			
	</div><!--left_side-->

    <div class="sidebar">
      <?php include (TEMPLATEPATH . '/sidebar.php'); ?>
    </div>
</div><!--content_box-->

<?php get_footer(); ?>