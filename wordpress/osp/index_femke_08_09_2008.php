<?php get_header(); ?>

<div id="content_box">
<!--LATEST POST-->
<div id="latest_post">	

<?php if (have_posts()) : ?>
	
			<?php query_posts('showposts=1'); ?>
			<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
				<h4><?php the_time('F jS, Y') ?><!-- by <?php the_author() ?> --> &middot; <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></h4>
					<div class="entry">
						<?php the_content('[Read more &rarr;]'); ?>
					</div><!--entry-->
				<p class="tagged"><?php the_tags('<strong>Tags:</strong> ', ' &middot; ', ''); ?></p>
			</div><!--post-->

			<?php endwhile;?>
					
			<?php else : ?>
				<div class="post">
					<h2 class="page_header center">Not Found</h2>
		
					<div class="entry">
						<p class="center">Sorry, but you are looking for something that isn't here.</p>
						<?php include (TEMPLATEPATH . "/searchform.php"); ?>
					</div><!--entry-->
				</div><!--post-->
			<?php endif; ?>



</div>


		<div class="category_box">

<!--NEWS-->

<div class="news">
			<?php if (have_posts()) : ?>
	
			<?php query_posts('showposts=5&cat=1'); ?>
 			<h1><?php single_cat_title(); ?></h1>
			<p><?php echo category_description(1); ?></p>
			<?php while (have_posts()) : the_post(); ?>

				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<h4><?php the_time('F jS, Y') ?><!-- by <?php the_author() ?> --> &middot; <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></h4>
					<div class="entry">
					</div><!--entry-->

			<?php endwhile;?>
					
			<?php else : ?>
				<div class="post">
					<h2 class="page_header center">Not Found</h2>
		
					<div class="entry">
						<p class="center">Sorry, but you are looking for something that isn't here.</p>
						<?php include (TEMPLATEPATH . "/searchform.php"); ?>
					</div><!--entry-->
				</div><!--post-->
			<?php endif; ?>
</div>
<!--WORKS-->

			<?php if (have_posts()) : ?>
		
			<?php query_posts('showposts=3&cat=32'); ?>
 			<h1><?php single_cat_title(); ?></h1>
			<p><?php echo category_description(32); ?></p>

			<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<h4></h4>
					<div class="entry">
						<?php szub_post_image('use_thumb=1') ?><?php the_excerpt('[Read more &rarr;]'); ?>
					</div><!--entry-->
				<p class="tagged"><?php the_tags('<strong>Tags:</strong> ', ' &middot; ', ''); ?></p>
			</div><!--post-->


			<?php endwhile;?>
					
			<?php else : ?>
				<div class="post">
					<h2 class="page_header center">Not Found</h2>
		
					<div class="entry">
						<p class="center">Sorry, but you are looking for something that isn't here.</p>
						<?php include (TEMPLATEPATH . "/searchform.php"); ?>
					</div><!--entry-->
				</div><!--post-->
			<?php endif; ?>



		</div><!--category_box-->


	
		<div class="category_box">
	
<!--CONVERSATIONS-->
	
		<?php if (have_posts()) : ?>

			<?php query_posts('showposts=1&cat=18'); ?>

 			<h1><?php single_cat_title(); ?></h1>
			<p><?php echo category_description(18); ?></p>

			<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<h4></h4>
					<div class="entry">
						<?php szub_post_image('use_thumb=1') ?><?php the_excerpt('[Read more &rarr;]'); ?>
					</div><!--entry-->
				<p class="tagged"><?php the_tags('<strong>Tags:</strong> ', ' &middot; ', ''); ?></p>
			</div><!--post-->

			<?php endwhile;?>
					
			<?php else : ?>
				<div class="post">
					<h2 class="page_header center">Not Found</h2>
		
					<div class="entry">
						<p class="center">Sorry, but you are looking for something that isn't here.</p>
						<?php include (TEMPLATEPATH . "/searchform.php"); ?>
					</div><!--entry-->
				</div><!--post-->

			<?php endif; ?>

	
<!--TEXTS-->
	
		<?php if (have_posts()) : ?>

			<?php query_posts('showposts=1&cat=65'); ?>

 			<h1><?php single_cat_title(); ?></h1>
			<p><?php echo category_description(65); ?></p>

			<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<h4></h4>
					<div class="entry">
						<?php szub_post_image('use_thumb=1') ?><?php the_excerpt('[Read more &rarr;]'); ?>
					</div><!--entry-->
				<p class="tagged"><?php the_tags('<strong>Tags:</strong> ', ' &middot; ', ''); ?></p>
			</div><!--post-->

			<?php endwhile;?>
					
			<?php else : ?>
				<div class="post">
					<h2 class="page_header center">Not Found</h2>
		
					<div class="entry">
						<p class="center">Sorry, but you are looking for something that isn't here.</p>
						<?php include (TEMPLATEPATH . "/searchform.php"); ?>
					</div><!--entry-->
				</div><!--post-->

			<?php endif; ?>

<!--DOWNLOADS-->

			<?php if (have_posts()) : ?>
		
			<?php query_posts('showposts=1&cat=21'); ?>
 			<h1><?php single_cat_title(); ?></h1>
			<p><?php echo category_description(21); ?></p>

			<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<h4></h4>
					<div class="entry">
						<?php szub_post_image('use_thumb=1') ?><?php the_excerpt('[Read more &rarr;]'); ?>
					</div><!--entry-->
				<p class="tagged"><?php the_tags('<strong>Tags:</strong> ', ' &middot; ', ''); ?></p>
			</div><!--post-->


			<?php endwhile;?>
					
			<?php else : ?>
				<div class="post">
					<h2 class="page_header center">Not Found</h2>
		
					<div class="entry">
						<p class="center">Sorry, but you are looking for something that isn't here.</p>
						<?php include (TEMPLATEPATH . "/searchform.php"); ?>
					</div><!--entry-->
				</div><!--post-->
			<?php endif; ?>



		</div><!--category_box-->


	
		<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
		<?php include (TEMPLATEPATH . '/r_sidebar.php'); ?>

		</div><!--content_box-->

<?php get_footer(); ?>