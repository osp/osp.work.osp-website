<ul>

	<li>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
		<?php endif; ?>
	</li>

  <li class="widget">
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
  </li>

  <li class="widget"><h2><?php _e('Admin'); ?></h2>
    <ul>
      <?php wp_register(); ?>
      <li><?php wp_loginout(); ?></li>
      <?php wp_meta(); ?>
    </ul>
  </li>
</ul>

