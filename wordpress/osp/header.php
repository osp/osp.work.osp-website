<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    
    <title><?php if (is_single() || is_page() || is_archive()) { wp_title('',true); } else { bloginfo('name'); echo(' &#8212; '); bloginfo('description'); } ?></title>
    
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <link rel="icon" type="image/gif" href="/wp-content/uploads/frog.gif">

  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/ospublish.js"></script>

    <?php wp_head(); ?>

</head>
<body>

<div id="container">

<div id="masthead">
    <table><tr><td id="mastheadleft">

<?php
$result_random=rand(1, 7);
?>

    <h1><a href="<?php echo get_settings('home'); ?>" title="Home"><?php bloginfo('name'); ?></a><a href="http://en.wikipedia.org/wiki/Tardigrada" class="star" title="Tardigrade"><img src="<?php echo get_settings('home'); ?>/wp-content/themes/osp/images/bear_<?php echo $result_random ?>.jpg"></a>


</h1>

    <h2><?php bloginfo('description'); ?></h2>
</td>
<td id="mastheadright">

    <ul id="nav">
      <li class="page_item page-item-2"><a href="/about">About</a></li>
      <li class="page_item page-item-241"><a href="/contact">Contact</a></li>
      <li><a href="/images/">Snapshots</a></li>
      <li><a href="/portfolio/">Portfolio</a></li>
      <li><a href="http://git.constantvzw.org/">Project Source Files</a></li>
      <li><a href="/foundry/">Foundry</a></li>
    </ul>
     
    </td></table>

</div><!--masthead-->

<!--<div id="head_bckgr"><img src="/wp-content/themes/osp/images/title.jpg"></a></div>-->
