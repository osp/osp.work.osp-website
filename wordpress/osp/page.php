<?php get_header(); ?>

	<div id="content_box">
	
		<div id="left_side">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="wide_post">
			<h1><?php the_title(); ?></h1>	
			<div class="entry">		
				<?php the_content('<p>Read the rest of this page &rarr;</p>'); ?>
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
			</div>
			</wide>
			<?php endwhile; endif; ?>
			
			</div><!--wide_post-->
	</div><!--left_side-->

	<div class="sidebar">
		<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
	</div>
	</div><!--content_box-->

<?php get_footer(); ?>