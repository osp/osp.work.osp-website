<?php
$url='http://osp.schr.fr/repos.json'; 
$repos = json_decode(get_data($url), true);
?>


 <?php
 
 $iceberg_repos = array();
 foreach($repos as $repo) {
     if ($repo['iceberg']) {
        $iceberg_repos[] = $repo;
     }
 }

$iceberg_repos = array_slice($iceberg_repos, 0, 8);
 
 foreach($iceberg_repos as $repo) {
     
     if(strtotime($repo["last_updated"]) > strtotime("Last Month")) {
         //echo "is from last month";
     }

     $ids = explode('.', $repo['slug']);
     $type = $ids[1];
     echo "
         <div class='project'>
            <p class='project-type'>$type</p>
            <h2 class='project-title'>
                <a href='http://osp.schr.fr/$repo[web_path]/'>
                    $repo[title]
                </a>
            </h2>
            <div class='iceberg'>";
            $iceberg_img = array_slice($repo["iceberg"], 0, 4);
            foreach($iceberg_img as $img) {
                echo "<img class='iceberg-pict' src='http://osp.schr.fr/$repo[web_path]/thumbnail/latest/iceberg/$img' />";
            }
     echo "
            </div>
            <p class='project-source'><a href='http://osp.schr.fr/$repo[web_path]/view/latest/'>Source files</a></p>
            <div class='commit-list'>";
                $commit_list = array_slice($repo["commits"], 0, 3);
                foreach($commit_list as $commit) {

                    echo "
                        <div class='commit'>
                            <p class='commit-author'>$commit[author] <span class='commit-author-said'>said&thinsp;:</span></p>
                            <p class='commit-message'>$commit[message]</p>
                            <p class='commit-date'>".date('l, j F Y', strtotime($commit[date]))."</p>
                        </div>
                    ";
                }


            echo "        
            </div>
        </div>";
     //}
  }
 ?>
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
