<?php
/*
Template Name: Portfolio
*/
?>

<style>
body {background: white; text-align: center;}
img {max-width: 100px; max-height: 100px; border: 0;}
.sq {width: 100px; height: 100px; overflow: none; float:left;}
a {color: white;}
</style>

<div id="page">

	<?php

$post_parent = get_post($post->ID, ARRAY_A);
$parent = $post_parent['post_parent'];
$linkid = $post_parent['ID'];

$attachments = get_children(array('post_parent' => $post_id, 'post_type' => 'attachment', 'orderby' => 'menu_order ASC, post_date', 'order' => 'DESC') );

	foreach($attachments as $id => $attachment) :

	echo "<div class=\"sq\"><a href=\"http://ospublish.constantvzw.org/?p=".$linkid."\">".wp_get_attachment_image($id,'thumbnail',false,true)."</a></div>\n";

	endforeach;

?>

</div>

</body>
</html>
