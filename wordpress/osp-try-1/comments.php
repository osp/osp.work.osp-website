<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
	?>

<?php	return; } }


	/* Function for seperating comments from track- and pingbacks. */
	function k2_comment_type_detection($commenttxt = 'Comment', $trackbacktxt = 'Trackback', $pingbacktxt = 'Pingback') {
		global $comment;
		if (preg_match('|trackback|', $comment->comment_type))
			return $trackbacktxt;
		elseif (preg_match('|pingback|', $comment->comment_type))
			return $pingbacktxt;
		else
			return $commenttxt;
	}

	$templatedir = get_bloginfo('template_directory');
	
	$comment_number = 1;
?>

<!-- You can start editing here. -->
<?php if (($comments) or ('open' == $post-> comment_status)) { ?>

<div class="comments">
	<ul>

<li class="widget">
<h2>
<?php comments_number();?> &darr;</h2>
</li>


	<?php if ($comments) { ?>

		<?php $count_pings = 1; foreach ($comments as $comment) { ?>
	
		<li>
			<p>
				<h3><?php echo($comment_number); ?>. <?php comment_author_link() ?></h3>
				<p class="meta"><?php comment_date('M j, Y') ?> at <?php comment_time() ?>
			</p>

			<div class="entry">
				<?php comment_text() ?> 
				<?php if ($comment->comment_approved == '0') : ?>
				<p><strong>Your comment is awaiting moderation.</strong></p>
				<?php endif; ?>
			</div>

		</li>
		
		<?php $comment_number++; } /* end for each comment */ ?>
	
	</ul>
		
	<?php } else { // this is displayed if there are no comments so far ?>

		<?php if ('open' == $post-> comment_status) { ?> 
			<!-- If comments are open, but there are no comments. -->
<!--				<li>
					<div class="entry">
						<p>There are no comments yet</p>
					</div>
				</li>-->

		<?php } else { // comments are closed ?>

			<!-- If comments are closed. -->

			<?php if (is_single) { // To hide comments entirely on Pages without comments ?>
				<li>
					<div class="entry">
						<p>Comments are closed.</p>
					</div>
				</li>
			<?php } ?>
	
		<?php } ?>

	</ul>

	<?php } ?>


	<!-- Comment Form -->
	<?php if ('open' == $post-> comment_status) : ?>
	
		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	
			<p>You must <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">log in</a> to post a comment.</p>
	
		<?php else : ?>

			<h3>Leave a Comment</h3>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment_form">
			
			<?php if ( $user_ID ) { ?>
	
				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Logout &raquo;</a></p>
	
			<?php } ?>

			<?php if ( !$user_ID ) { ?>
				<label for="author">Name</label><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" />
				<label for="email">e-mail</label><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" />
				<label for="url">Website</label><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" />
			<?php } ?>
				<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->
			
				<label for="comment">
				Comment</label><textarea name="comment" id="comment" rows="8" tabindex="4"></textarea>
			
				<?php if (function_exists('show_subscription_checkbox')) { show_subscription_checkbox(); } ?>

<?php do_action('comment_form', $post->ID); ?>
			
					<input name="submit" type="submit" id="submit" src="<?php bloginfo('template_url') ?>/images/submit_comment.gif" tabindex="5" value="Submit" />
					<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
				
	
			</form>

		<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
<?php } ?>
</div><!--comments-->
