<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>

<?php if ( is_day() ) : ?>
			<h2 class="page-title"><?php printf( __( 'Daily Archives: <span>%s</span>', 'sandbox' ), get_the_time(get_option('date_format')) ) ?></h2>
<?php elseif ( is_month() ) : ?>
			<h2 class="page-title"><?php printf( __( 'Monthly Archives: <span>%s</span>', 'sandbox' ), get_the_time('F Y') ) ?></h2>
<?php elseif ( is_year() ) : ?>
			<h2 class="page-title"><?php printf( __( 'Yearly Archives: <span>%s</span>', 'sandbox' ), get_the_time('Y') ) ?></h2>
<?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
			<h2 class="page-title"><?php _e( 'Blog Archives', 'sandbox' ) ?></h2>
<?php endif; ?>


<?php while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h3 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __( 'Permalink to %s', 'sandbox' ), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h3>
				<div class="entry-content">
<?php the_excerpt( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>

				</div>
				<?php include('meta.php'); ?>
			</div><!-- .post -->

<?php endwhile; ?>

		</div><!-- #content .hfeed -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>
