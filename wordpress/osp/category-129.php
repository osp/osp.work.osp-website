<?php include('header_foundry.php') ?>

	
<div id="page">

<div id="header">
	<h2><?php echo single_cat_title(); ?></h2>
	<p class="description"><?php echo category_description(); ?></p>
</div><!--header-->

<div class="leftcolumn">
	
<?php query_posts('cat=148') ?>

<?php while (have_posts()) : the_post(); ?>
	
		<div class="post" id="post-<?php the_ID(); ?>">
			<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
			
			<?php the_excerpt(); ?>
					
		</div>
<?php endwhile; ?>



	</div><!--leftcolumn-->


	<div class="rightcolumn">
<h3>Foundry news</h3>

	<ul>

<?php rewind_posts(); ?>


<?php query_posts('cat=149&orderby=date&showposts=5') ?>
		<?php while (have_posts()) : the_post(); ?>
		
		

			<li>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
				<div class="postmetadata"><?php the_time(get_option('date_format')) ?><?php edit_post_link(__('Edit'), '&nbsp;|&nbsp;', ''); ?></div>
			</li>

		<?php endwhile; ?>
	</ul>
		<div class="infobox">
<h3>Infobox</h3>
	<ul>
		<li>Info</li>
	</ul>
		</div><!--infobox-->
	</div><!--rightcolumn-->
<div class="clear"></div>
<?php get_footer(); ?>