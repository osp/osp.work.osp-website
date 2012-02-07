<?php get_header(); ?>

	<div id="content_box">
	
		<div id="left_side">

		<?php if (have_posts()) : ?>
	
			<h1><span class="label">Search Results for:</span> <?php echo $s; ?></h1>
				
		<div class="listing">

			<?php while (have_posts()) : the_post(); ?>
			<div class="post">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<p class="meta"><?php the_time('F jS, Y') ?> &middot; <?php the_tags('Tags: ', ' &middot; ', ''); ?> &middot; <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
				<div class="entry">
					<?php the_excerpt() ?>
				</div><!--entry-->
			</div><!--post-->

			<?php endwhile; ?>
		</div><!--listing-->

		<?php else : ?>
	
			<h1><span class="label">Sorry, no results for</span>: <?php echo $s; ?></h1>
			<div class="entry">
				<p><?php include (TEMPLATEPATH . '/searchform.php'); ?></p>
			</div>
		<?php endif; ?>
</div><!--left_side-->

    <div class="sidebar">
      <?php include (TEMPLATEPATH . '/sidebar.php'); ?>
    </div>
</div><!--content_box-->

<?php get_footer(); ?>