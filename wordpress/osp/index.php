 <?php get_header(); ?>
  
  <div id="content_box">
   <!--LATEST POST-->
  
           <div id="left_side">
            
                  <div class="wide_post"> 
                      <h2 class="sitetype">OSP-blog</h2>


                      <ul class="blognav">
                            <?php wp_list_categories('sort_column=name&depth=1&title_li=&exclude=129,32'); ?>
                            <li class="page_item page-item-83"><a href="/archives">Archives</a></li>
                            <li class="page_item page-item-938"><a href="/tags">Tags</a></li>
                            <li class="page_item page-item-4838"><a href="/library">Library</a></li>
                            <li class="page_item page-item-81"><a href="/links">Links</a></li>
                            <li><a href="/recipes">Recipes</a></li>
                          </ul>
                          <div style="clear:both;"></div>
                          <div style="margin-bottom:20px;"></div>
                           
                   <?php if (have_posts()) : ?>    
                  <?php query_posts('showposts=3'); ?>
                  <?php while (have_posts()) : the_post(); ?>
                  
                                                  <div class="post">
                                                         <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
                                                         <p class="meta"><?php the_category(' &middot; '); ?> &middot; <?php the_time('F jS, Y') ?> &middot;  <?php  coauthors_posts_links(); ?>  &middot; <?php comments_number(); ?></p>
                                                                 <div class="entry">
                                                                <?php the_content('[Read more &rarr;]'); ?>

<?php
$git = get_post_meta(get_the_ID(), 'git', true);

if ($git) {
  echo "<pre>git clone git://git.constantvzw.org/$git</pre>\n";
  echo "<p><a href=\"http://git.constantvzw.org/?p=$git.git;a=snapshot;h=HEAD;sf=tgz\">Download snapshot</a></p>\n";
}
?>
                                                                 </div><!--entry-->
                                                                  <p class="meta"><?php the_tags('Tags: ', ' &middot; ', ''); ?><?php edit_post_link('Edit',' &middot; ',''); ?></p>
                                                </div>
                                          <?php endwhile;?>
                                                          
                                         <?php else : ?>
                                                 <div class="post">
                                                         <h2 class="page_header center">Not Found</h2>
                                 
                                                          <div class="entry">
                                                                 <p class="center">Sorry, but you are looking for something that isn't here.</p>
                                                                 <?php include (TEMPLATEPATH . "/searchform.php"); ?>
                                                         </div><!--entry-->
                                                 </div><!--post-->
                                           <?php endif; ?>
                  
                  </div><!--widepost-->
                   
                 <div class="listing">   
                  
                  <?php if (have_posts()) : ?>    
                  <?php query_posts('showposts=5&offset=3'); ?>
                  <?php while (have_posts()) : the_post(); ?>
                  
                          
                         <div class="post">
                                 <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                 <p class="meta"><?php the_category(' &middot; '); ?> &middot; <?php the_time('F jS, Y') ?> &middot; <?php the_tags('Tags: ', ' &middot; ', ''); ?> &middot; <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><?php edit_post_link('Edit',' &middot; ',''); ?></p>
                                  <div class="entry">
                                          <!--IF THERE IS A THUMBNAIL ATTACHED, DISPLAY IT-->
                                         <?php $thumb = get_post_meta($post->ID, "thumb", true); if ($thumb != "") 
                                        { ?><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" alt="<?php the_title(); ?>" class="thumb" /></a><?php } ?>
                                          <?php the_excerpt() ?>
                                 </div><!--entry-->
                                 <div class="clear"></div>
                          </div><!--post-->
 
                 
                                         <?php endwhile;?>
                                       
                                        <?php endif; ?>
                 
                 </div><!--listing-->

                         <p class="more">
                                 <?php
                                 $arc_year = get_the_time('Y');
                                 $arc_month = get_the_time('m');
                                  ?>
                                <a href="<?php echo get_month_link("$arc_year", "$arc_month"); ?>">[More posts from the archive &rarr;]</a>
                        </p>
          
                 </div><!--left_side-->
                  <div id="right_side">
                          <?php include (TEMPLATEPATH . '/sidebar.php'); ?>
                  </div>
  </div><!--content_box-->
         
 <?php get_footer(); ?>
