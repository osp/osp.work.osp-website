<?php get_header(); ?>

<div id="content_box">
<!--LATEST POST-->

	<div id="left_side">
	
		<div class="wide_post">	
		
		<?php if (have_posts()) : ?>	
		<?php query_posts('showposts=1'); ?>
		<?php while (have_posts()) : the_post(); ?>
		
			
						<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
						<p class="meta"><?php the_category(' &middot; '); ?> &middot; <?php the_time('F jS, Y') ?> &middot;  <?php the_author_posts_link(); ?>  &middot; <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
							<div class="entry">
							<?php the_content('[Read more &rarr;]'); ?>
							</div><!--entry-->
							<p class="meta"><?php the_tags('Tags: ', ' &middot; ', ''); ?><?php edit_post_link('Edit',' &middot; ',''); ?></p>
		
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
		
		<div class="column">
		<!--WORKS-->

					<?php if (have_posts()) : ?>
				
					<?php query_posts('showposts=4&cat=32'); ?>
					<h2><a href="<?php echo get_category_link(32);?>"><?php single_cat_title(); ?></a></h2>
					<p><?php echo category_description(32); ?></p>
		
					<?php while (have_posts()) : the_post(); ?>
		
					<div class="post">
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
						<p class="meta"><?php the_time('F jS, Y') ?></p>
							<div class="entry">
							<!--IF THERE IS A THUMBNAIL ATTACHED, DISPLAY IT-->
							<?php $thumb = get_post_meta($post->ID, "thumb", true); if ($thumb != "") 
							{ ?><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" alt="<?php the_title(); ?>" class="thumb" /></a><?php } ?>
							<?php the_excerpt('[Read more &rarr;]'); ?>
							</div><!--entry-->
						<p class="meta"><?php the_tags('Tags: ', ' &middot; ', ''); ?><?php edit_post_link('Edit',' &middot; ',''); ?></p>
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
		
		
				</div><!--column-->
			
				<div class="r_column">

		<!--CONVERSATIONS-->
			
				<?php if (have_posts()) : ?>
								<?php 
					$the_cat = 18; // Define the category ID for testimonials
					$query = "SELECT wp_posts.ID, wp_term_taxonomy.term_taxonomy_id, wp_term_relationships.object_id
							FROM wp_term_taxonomy, wp_term_relationships, wp_posts
							WHERE wp_term_taxonomy.term_taxonomy_id = wp_term_relationships.term_taxonomy_id
							AND wp_term_relationships.object_id = wp_posts.ID
							AND wp_posts.post_status = 'publish'
							AND wp_term_taxonomy.term_id =".$the_cat."
							ORDER BY RAND( )
							LIMIT 0 , 1
							";
		
					$the_id = $wpdb->get_var($query); // $test_id is now the id of the single post
					query_posts('p='.$the_id.'&cat=18'); ?>
		
					<h2><a href="<?php echo get_category_link($the_cat);?>"><?php single_cat_title(); ?></a></h2>
					<p><?php echo category_description($the_cat); ?></p>
		
					<?php while (have_posts()) : the_post(); ?>
		
					<div class="post">
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
						<p class="meta"><?php the_time('F jS, Y') ?></p>

							<div class="entry">
							<?php the_excerpt('[Read more &rarr;]'); ?>
							</div><!--entry-->
						<p class="meta"><?php the_tags('Tags: ', ' &middot; ', ''); ?><?php edit_post_link('Edit',' &middot; ',''); ?></p>
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
						<?php
				$the_cat = 65; // Define the category ID for testimonials
				$query = "
				SELECT wp_posts.ID, wp_term_taxonomy.term_taxonomy_id, wp_term_relationships.object_id
				FROM wp_term_taxonomy, wp_term_relationships, wp_posts
				WHERE wp_term_taxonomy.term_taxonomy_id = wp_term_relationships.term_taxonomy_id
				AND wp_term_relationships.object_id = wp_posts.ID
				AND wp_posts.post_status = 'publish'
				AND wp_term_taxonomy.term_id =".$the_cat."
				ORDER BY RAND( )
				LIMIT 0 , 1
				";
				$the_id = $wpdb->get_var($query); // $test_id is now the id of the single post
				query_posts('p='.$the_id.'&cat='.$the_cat); 
				?>
					<h2><a href="<?php echo get_category_link($the_cat);?>"><?php single_cat_title(); ?></a></h2>
					<p><?php echo category_description($the_cat); ?></p>
		
					<?php while (have_posts()) : the_post(); ?>
		
					<div class="post">
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
						<p class="meta"><?php the_time('F jS, Y') ?></p>

							<div class="entry">
							<?php the_excerpt('[Read more &rarr;]'); ?>
							</div><!--entry-->
						<p class="meta"><?php the_tags('Tags: ', ' &middot; ', ''); ?><?php edit_post_link('Edit',' &middot; ',''); ?></p>
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
						<?php
					$the_cat = 21; // Define the category ID for testimonials
					$query = "SELECT wp_posts.ID, wp_term_taxonomy.term_taxonomy_id, wp_term_relationships.object_id
							FROM wp_term_taxonomy, wp_term_relationships, wp_posts
							WHERE wp_term_taxonomy.term_taxonomy_id = wp_term_relationships.term_taxonomy_id
							AND wp_term_relationships.object_id = wp_posts.ID
							AND wp_posts.post_status = 'publish'
							AND wp_term_taxonomy.term_id =".$the_cat."
							ORDER BY RAND( )
							LIMIT 0 , 1
							";
		
					$the_id = $wpdb->get_var($query); // $test_id is now the id of the single post
					query_posts('p='.$the_id.'&cat=21'); ?>
		
					<h2><a href="<?php echo get_category_link($the_cat);?>"><?php single_cat_title(); ?></a></h2>
					<p><?php echo category_description($the_cat); ?></p>
		
					<?php while (have_posts()) : the_post(); ?>
		
					<div class="post">
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
						<p class="meta"><?php the_time('F jS, Y') ?></p>

							<div class="entry">
							<?php the_excerpt('[Read more &rarr;]'); ?>
							</div><!--entry-->
						<p class="meta"><?php the_tags('Tags: ', ' &middot; ', ''); ?><?php edit_post_link('Edit',' &middot; ',''); ?></p>
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
		
		
				</div><!--column-->
	
		</div><!--left_side-->
		<div class="sidebar">
			<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
		</div>
		<div class="r_sidebar">
			<?php include (TEMPLATEPATH . '/r_sidebar.php'); ?>
		</div>
</div><!--content_box-->
	
<?php get_footer(); ?>
