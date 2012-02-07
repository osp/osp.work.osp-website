<?php get_header(); ?>
		
<div id="content_box">

	<div id="left_side">
	
		<?php if (have_posts()) : ?>

			<?php //$post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	
			<?php /* If this is a category archive */ if (is_category()) { ?>				
			<h1><span class="label">Category:</span> <?php echo single_cat_title(); ?></h1>
			<p class="description"><?php echo category_description(); ?></p>
			
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h1><?php the_time('F Y'); ?></h1>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
			<?php 
			if(isset($_GET['author_name'])) :
			$curauth = get_userdatabylogin($author_name); // NOTE: 2.0 bug requires get_userdatabylogin(get_the_author_login());
			else : 
			$curauth = get_userdata(intval($author));
			endif ; ?>
			<h1><span class="label">Author:</span> <?php wp_title(''); ?></h1>

			<?php /* If this is a tag archive */ } elseif (is_tag()) { ?>
			<h1><span class="label">Tag:</span> <?php single_tag_title(); ?></h1>
			<p><?php echo $curauth->description; ?></p>
		
			<?php } ?>

		<div class="listing">

			<?php while (have_posts()) : the_post(); ?>
			<div class="post">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<p class="meta"><?php the_time('F jS, Y') ?> &middot; <?php the_tags('Tags: ', ' &middot; ', ''); ?> &middot; <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><?php edit_post_link('Edit',' &middot; ',''); ?></p>
				<div class="entry">
					<!--IF THERE IS A THUMBNAIL ATTACHED, DISPLAY IT-->
					<?php $thumb = get_post_meta($post->ID, "thumb", true); if ($thumb != "") 
					{ ?><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" alt="<?php the_title(); ?>" class="thumb" /></a><?php } ?>
					<?php the_excerpt() ?>
				</div><!--entry-->
				<div class="clear"></div>
			</div><!--post-->
			
		<?php endwhile; ?>
			
		<?php else : ?>
	
			<h1>Nothing found</h1>
			<div class="entry">
				<p><?php include (TEMPLATEPATH . '/searchform.php'); ?></p>
			</div>
		<?php endif; ?>
	</div><!--listing-->

	</div><!--left_side-->

    <div class="sidebar">
      <?php include (TEMPLATEPATH . '/sidebar.php'); ?>
    </div>
</div><!--content_box-->

<?php get_footer(); ?>