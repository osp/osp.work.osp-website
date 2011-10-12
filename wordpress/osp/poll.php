<?php
/*
Template Name: Poll
*/
?>

<?php get_header(); ?>

	<div id="content_box">
	
		<div id="left_side">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="wide_post">
			<h1><?php the_title(); ?></h1>	
			<div class="entry">		
<?php the_content(); ?>
   <?php get_poll();?>
<p><?php edit_post_link('Edit',' &middot; ',''); ?><p>
			</div>
			<?php endwhile; endif; ?>
			
			</div><!--wide_post-->
	</div><!--left_side-->

<div class="commentbar">
		<?php comments_template(); ?>
	</div>	

	</div><!--content_box-->

<?php get_footer(); ?>