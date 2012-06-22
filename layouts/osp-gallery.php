<?php
require_once('simplepie.inc');
$feed = new SimplePie();

$feed->set_feed_url('http://osp.constantvzw.org/images/rss/feed/gallery/latest');

$feed->init();

$feed->handle_content_type();
?>
<meta charset="utf-8">
<ul>
	<?php
	$feed_items = $feed->get_items();
	$feed_items = array_slice($feed_items, 0, 1);
	foreach ($feed_items as $item):

 if ($enclosure = $item->get_enclosure()) {
	?>
		<li>
		<a href="<?php echo $item->get_permalink(); ?>">
		<img src="<?php echo $enclosure->get_thumbnail(); ?>" title="<?php echo $item->get_title(); ?>" alt="<?php echo $item->get_description() ? $item->get_description() : $item->get_title() ; ?>" />
		</a>
		</li>
 <?php
 }
 ?>
 
<?php endforeach; ?>
</ul>
