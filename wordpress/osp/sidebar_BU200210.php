	<ul>
<li>
 <a href="http://petition.stopsoftwarepatents.eu/231004630058/"><img
src="http://petition.stopsoftwarepatents.eu/banner/231004630058/ssp-181-30.gif"
alt="stopsoftwarepatents.eu petition banner"
width="181" height="30" /></a> <br/><br/>
</li>


		<li class="widget">
			<h2>Latest comments</h2>
			<ul><?php blc_latest_comments(3); ?></ul>
		</li>


<!--WORKS-->
		<li class="category">	
			<?php if (have_posts()) : ?>
				<?php 
				$the_cat = 32; // Define the category ID for testimonials
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
				query_posts('p='.$the_id.'&cat=32'); ?>
	
				<h2>Random <?php single_cat_title(); ?></h2>
				<div class="meta"><?php echo category_description($the_cat); ?></div>
	
				<?php while (have_posts()) : the_post(); ?>
	
				<div class="post">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<p class="meta"><?php the_time('F jS, Y') ?></p>
					<div class="entry">
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
				<p class="more"><a href="?cat=32">[More works &rarr;]</a></p>
		</li>

<!--CONVERSATIONS-->
		<li class="widget category">
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
		
					<h2>Random <?php single_cat_title(); ?></h2>
					<div class="meta"><?php echo category_description($the_cat); ?></div>
		
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
							<h2>Not Found</h2>
				
							<div class="entry">
								<p class="center">Sorry, but you are looking for something that isn't here.</p>
								<?php include (TEMPLATEPATH . "/searchform.php"); ?>
							</div><!--entry-->
						</div><!--post-->
		
					<?php endif; ?>
					<p class="more"><a href="?cat=18">[More conversations &rarr;]</a></p>

</li>


	<li class="widget">
		<h2>Contributors</h2>
		<ul>
			<?php wp_list_authors('show_fullname=1'); ?> 
		</ul>
	</li>


</ul>
