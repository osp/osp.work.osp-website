<?php
require_once('simplepie.inc');

// get blog_feed

$feed_b = new SimplePie();

$feed_b->set_feed_url('http://osp.constantvzw.org/feed');
$feed_b->init();
$feed_b->handle_content_type();

// get gallery3_feed

$feed_g = new SimplePie();

$feed_g->set_feed_url('http://osp.constantvzw.org/images/rss/feed/gallery/latest');
$feed_g->init();
$feed_g->handle_content_type();

// get repositories

$repos = json_decode(get_data('http://osp.schr.fr/repos.json'), true);

// get commits

$commits = json_decode(get_data('http://osp.schr.fr/commits.json'), true);


?>
<meta charset="utf-8">

<!-- Icebergs -->

<dl>
<?php

foreach($repos as $repo) {
    if ($repo['iceberg']) {
       echo "<dt><img src='http://osp.schr.fr/$repo[web_path]/thumbnail/latest/iceberg/{$repo[iceberg][0]}' /></dt>\n
      <dd>$repo[title]</dd>\n";
    }
}
?>
</dl>

<!-- Commits -->

<?php
$ids = explode('.', $repo['slug']);
$type = $ids[1];
?>
<dl>
<?php 
 foreach($commits as $commit) {
     echo "<dt><span class='author'>$commit[author]</span> <span class='commit-info'>$commit[date] — from the <a href='http://osp.schr.fr/$type/'>$type</a> <a href='http://osp.schr.fr/$repo[web_path]/'>$repo[title]</a></span></dt>
     <dd class='commit-message'>—— $commit[message]</dd>\n\n";
 }
?>
</dl>

<!-- Blog Post -->

<?php
$item = $feed_b->get_item(0);
?>
<h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
<p><?php echo $item->get_description(); ?></p>

<!-- Gqllery 3 Imqges -->

<ul>
<?php
foreach ($feed_g->get_items() as $item):

if ($enclosure = $item->get_enclosure()) {
?>
  <li>
		<a href="<?php echo $item->get_permalink(); ?>">
		  <img src="<?php echo $enclosure->get_thumbnail(); ?>" title="<?php echo $item->get_title(); ?>" alt="<?php echo $item->get_description() ? $item->get_description() : $item->get_title() ; ?>">
		</a>
	</li>
<?php
} 
endforeach; ?>
</ul>

<?php
/* gets the data from a URL */
 
function get_data($url)
{
$ch = curl_init();
$timeout = 5;
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
$data = curl_exec($ch);
curl_close($ch);
return $data;
}
?>