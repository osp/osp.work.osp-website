<?php
$url='http://ospwork.constantvzw.org/repos.json'; 
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

$filename = "said.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
$words = explode("---", $contents);
 
 foreach($iceberg_repos as $repo) {
     
     if(strtotime($repo["last_updated"]) > strtotime("Last Month")) {

     $ids = explode('.', $repo['slug']);
     $type = $ids[1];
     echo "
         <div class='project'>
            <p class='project-type'>$type</p>
            <h2 class='project-title'>
                <a href='http://ospwork.constantvzw.org/$repo[web_path]/'>
                    $repo[title]
                </a>
            </h2>
            <div class='iceberg'>";
            $iceberg_img = array_slice($repo["iceberg"], 0, 4);
            foreach($iceberg_img as $index => $img) {
                if ($index == 0) {
                    echo "<a href='http://ospwork.constantvzw.org/$repo[web_path]/'><img class='iceberg-pict-big' src='http://ospwork.constantvzw.org/$repo[web_path]/thumbnail/latest/iceberg/$img' /></a>";
                } else {
                    echo "<a href='http://ospwork.constantvzw.org/$repo[web_path]/'><img class='iceberg-pict' src='http://ospwork.constantvzw.org/$repo[web_path]/thumbnail/latest/iceberg/$img' /></a>";
                }
            }
     echo "
            </div>
            <p class='project-source'><a href='http://ospwork.constantvzw.org/$repo[web_path]/view/latest/'>Source files</a></p>

            <div class='commit-list'>";

                $commit_list = array_slice($repo["commits"], 0, 5);
                $ellipse = 0;
                foreach($commit_list as $index => $commit) {
                    if ($index != 0) {
                        $ellipse = (strtotime($previous_commit) - strtotime($commit["date"]))/(24*60*60);
                        $ellipse = $ellipse *3;
                    }
                    echo "
                        <div class='ellipse' style='width: 5px; margin: auto; text-align: center; height: ".$ellipse."px; border-left: 1px solid springgreen;'>&nbsp;</div>
                        <div class='commit'>
                        <p><span class='commit-author'>$commit[author]</span><span class='commit-author-said'>".$words[rand(0, count($words)-1)]."
                        </span></p>
                            <p class='commit-message'>&mdash; $commit[message]</p>
                            <p class='commit-date'>".date('l, j F Y', strtotime($commit[date]))."</p>
                        </div>
                    ";
                    $previous_commit = $commit["date"];
                }


            echo "        
            </div>
        </div>";
     }
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
