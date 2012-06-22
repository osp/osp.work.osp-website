<?php
$url='http://osp.schr.fr/commits.json'; 
$commits = json_decode(get_data($url), true);
 ?>
 <dl>
 <?php
 
 $commits = array_slice($commits, 0, 5);
foreach($commits as $commit) {
    $ids = explode('.', $commit["parent_repo_slug"]);
    $type = $ids[1];
    $title = $ids[2];
     echo "<dt class='commit'><span class='commit-author'>$commit[author]</span> said:</dt>
         <dd class='commit-message'>— $commit[message]</dd>\n\n
         <dd class='commit-info'>". date("l, j F Y",strtotime($commit[date]))." — from the $type <a href='$commit[parent_repo_url]'>$commit[parent_repo_title]</a></dd>
         <dd class='commit-source'><a href='$commit[parent_repo_url]view/latest/'>Source files</a></dd>";
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
