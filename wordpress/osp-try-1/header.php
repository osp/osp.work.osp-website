<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<title><?php if (is_single() || is_page() || is_archive()) { wp_title('',true); } else { bloginfo('name'); echo(' &#8212; '); bloginfo('description'); } ?></title>
	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link rel="icon" type="image/gif" href="http://ospublish.constantvzw.org/wp-content/uploads/frog.gif">

	<?php wp_head(); ?>

</head>
<body>

<div id="container">

<div id="masthead">

<?php
$result_random=rand(1, 7);
?>

	<h1><a href="<?php echo get_settings('home'); ?>" title="Home"><?php bloginfo('name'); ?></a><a href="http://en.wikipedia.org/wiki/Tardigrada" class="star" title="Tardigrade"><img src="<?php echo get_settings('home'); ?>/wp-content/themes/osp/images/bear_<?php echo $result_random ?>.jpg"></a>


</h1>

	<h2><?php bloginfo('description'); ?></h2>
</div><!--masthead-->

<!--<div id="head_bckgr"><img src="http://ospublish.constantvzw.org/wp-content/themes/osp/images/title.jpg"></a></div>-->

		<ul id="subnav"><li><a <?php if (is_home()) echo('class="current" '); ?>href="<?php bloginfo('url'); ?>">Home</a></li><?php wp_list_pages('depth=1&title_li=&exclude=2125,3959'); ?><li><a href="/recipes">Recipes</a></li><li><a href="/image">Snapshots</a></li><li><a href="/works">Works</a></li><li><a href="http://git.constantvzw.org/">Code</a></li><li><a href="/foundry">Foundry</a></li></ul>

	<ul id="nav">
		<?php wp_list_categories('sort_column=name&depth=1&title_li=&exclude=129,32'); ?>
	</ul>
