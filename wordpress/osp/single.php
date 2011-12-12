<?php get_header(); ?>

	<div id="content_box">
		<div id="left_side">			
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<?php include (TEMPLATEPATH . '/navigation.php'); ?>
			
	<div class="wide_post">
		<div class="post">
			<h1><?php the_title(); ?></h1>
			<p class="meta"><?php the_category(' &middot; '); ?> &middot; <?php the_time('F jS, Y') ?> &middot;  <?php coauthors_posts_links(); ?></p>
			<div class="entry">
				<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
				<?php
$git = get_post_meta(get_the_ID(), 'git', true);

            if ($git) {
                echo "<pre>git clone git://git.constantvzw.org/$git</pre>\n";
                echo "<p><a href=\"http://git.constantvzw.org/?p=$git.git;a=snapshot;h=HEAD;sf=tgz\">Download snapshot</a></p>\n";
            }
            ?>
			</div>
			<p class="meta">Tags: <?php the_tags(' &middot; ') ?><?php edit_post_link('Edit',' &middot; ',''); ?></p>
		</div>
			<div class="clear"></div>
		
		<?php endwhile; else: ?>
		
			<h2 class="page_header">Something went wrong</h2>
			<div class="entry">
				<p>Sorry, no posts matched your criteria. do you want to search instead?</p>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</div>
			
		<?php endif; ?>
		</div><!--wide_post-->
</div><!--left_side-->

<div class="sidebar">
		<?php include (TEMPLATEPATH . '/s_sidebar.php'); ?>
	</div>
<div class="r_sidebar">
		<?php include (TEMPLATEPATH . '/t_sidebar.php'); ?>
	</div>
<div class="commentbar">
		<?php comments_template(); ?>
	</div>	
	</div>

<?php get_footer(); ?>
