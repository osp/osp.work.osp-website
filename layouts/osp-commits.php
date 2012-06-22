<?php
$url='http://osp.schr.fr/commits.json'; 
$commits = json_decode(get_data($url), true);
$ids = explode('.', $repo['slug']);
$type = $ids[1];
 ?>
 <dl>
 <?php
 
 $commits = array_slice($commits, 0, 3);
 foreach($commits as $commit) {
     echo "<dt class='commit'><span class='author'>$commit[author]</span> <span class='commit-info'>$commit[date] — from the <a href='http://osp.schr.fr/$type/'>$type</a> <a href='http://osp.schr.fr/$repo[web_path]/'>$repo[title]</a></span></dt>
     <dd class='commit-message'>— $commit[message]</dd>\n\n";
 }
 ?>
 </dl>
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
