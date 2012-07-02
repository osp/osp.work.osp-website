<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title> Open Source Publishing </title>
    <meta name="description" content="page test">
    <meta name="keywords" content="draw me a shadow">
    <meta name="author" content="vous">
    <link rel="stylesheet" type="text/css" media="all" href="reset.css" />
    <link rel="stylesheet/less" type="text/css" href="styles-start.less">
    <!-- <link rel="stylesheet/less" type="text/css" href="http://osp.titanpad.com/ep/pad/export/160/latest?format=txt" /> -->
    <script src="less-1.3.0.min.js" type="text/javascript"></script>

   
</head>


<body>


<!--
	<div id="up-side"> 

        <div id="up-side-left">
            <div id="post-box"> 
                <div class="pieces">
                        Blog
                </div>
                <h2 class="post-title"><a href="http://osp.constantvzw.org/blog/news/switch">Switch</a></h2>
                <p>You’re witnessing the 21-22 June 2012 OSP live layouting session, we’re switching to the iceberg paradigm. Most of osper’s are here for it. Yeah. Crosswheels on ice. ¬ [...]</p>
            </div>

            <div id="pict-box"> 
                <div class="pieces">
                    Pict
                </div>
                 <?php //require "osp-gallery.php"; ?>
            </div>
        </div>

        <div id="iceberg"> 
            <div class="legende-box"> 
                Above water: portfolio ↓
            </div>
            <div class="pieces">
                Works
            </div>
            <?php //require "osp-iceberg.php"; ?>
        </div>
	</div>
-->


	<div id="active-projects">

		<div id="home-infos">
		What is that? Some says that those snapshots are to our work what the pictures of a cookbook are to the cooked meal. source files = ingredients. These arrangements of blocks of text and pictures tries harder to depict the most current projects, some interesting visual extracts and the source files that provide a convenient way to access to study it, change it, to redistribute copies of it, to improve it and release your improvements (and modified versions in general). Nous sommes embarqués.<a href="http://osp.constantvzw.org/about"> Read more about the way we work → </a>
		</div>
	
<!--
        <div class="legende-box"> 
            Below water: sources, tools, images, stories ↓
        </div>
-->
                <?php require "osp-iceberg.php"; ?>
                 <?php //require "osp-commits.php"; ?>
	</div>

    <ul id="menu">
        <li><a href="http://ospwork.constantvzw.org/work/">Works</a></li>
        <li><a href="http://osp.constantvzw.org/foundry/">Foundry</a></li>
        <li><a href="http://ospwork.constantvzw.org/workshop/">Workshops</a></li>
        <li><a href="http://ospwork.constantvzw.org/tools/">Tools</a></li>
        <li><a href="http://osp.constantvzw.org/blog/">Blog</a></li>
        <li><a href="http://osp.constantvzw.org/images/">Images</a></li>
        <li><a href="http://osp.constantvzw.org/about">About</a></li>

        <object type="image/svg+xml" style="width:60px;height:60px;" data="./pict/OSP_new-frog.svg">
            <img src="./pict/OSP_new-frog.png" style="width:60px;height:60px;" alt="A stylised image of a frog." />
        </object>
OSP, 
    <?php
$filename = "osp-baselines.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
$words = explode("---", $contents);
echo "<p id='#baseline'>".$words[rand(0, count($words)-1)]."</p>";
?>


    </ul>


</body>
</html>

