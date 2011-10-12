<?php get_header(); ?>

	<div id="content_box">
	


<div class="box">
				<h2>From the archive</h2>
				<?php query_posts('showposts=5&cat=221'); ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="archive">
					<?php foreach((get_the_category()) as $cat) {
					if ($cat->category_parent == "221") {
					echo '<a href="?cat=' . $cat->cat_ID . '">' .
					$cat->cat_name . '</a>';
					}
					}
					?>
					<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title();?>"><?php the_title();?></a></h3>
					<?php the_content('More...') ?>
					</div>
				<?php endwhile;?>
				
			</div>






		<div id="content" class="posts">

		<?php if (have_posts()) : ?>
			
			<?php while (have_posts()) : the_post(); ?>
					
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<h4><?php the_time('F jS, Y') ?><!-- by <?php the_author() ?> --> &middot; <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></h4>
			<div class="entry">
				<?php the_content('[Read more &rarr;]'); ?>
			</div>	
			<p class="tagged"><span class="add_comment"><?php comments_popup_link('&rarr; No Comments', '&rarr; 1 Comment', '&rarr; % Comments'); ?></span> <?php the_tags('<strong>Tags:</strong> ', ' &middot; ', ''); ?></p>
			<div class="clear"></div>
			
			<?php endwhile; ?>
			
			<?php include (TEMPLATEPATH . '/navigation.php'); ?>
			
		<?php else : ?>
	
			<h2 class="page_header center">Not Found</h2>
			<div class="entry">
				<p class="center">Sorry, but you are looking for something that isn't here.</p>
				<?php include (TEMPLATEPATH . "/searchform.php"); ?>
			</div>
	
		<?php endif; ?>
		
		</div>

		<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
	
		<?php include (TEMPLATEPATH . '/r_sidebar.php'); ?>
	
	</div>

<?php get_footer(); ?>