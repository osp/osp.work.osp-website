<?php
require_once('simplepie.inc');
$feed = new SimplePie();

$feed->set_feed_url('http://osp.constantvzw.org/blog/feed');

$feed->init();

$feed->handle_content_type();
?>
<meta charset="utf-8">
	<?php
	$item = $feed->get_item(0);
	?>
		<h2 class="post-title"><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
		<p><?php echo $item->get_description(); ?></p>

