<meta charset="utf-8">
<?php
$url='http://osp.schr.fr/repos.json'; 
$repos = json_decode(get_data($url), true);
?>


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
