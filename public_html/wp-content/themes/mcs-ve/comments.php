<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'kubrick'); ?></p> 
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h2 id="comments"><?php comments_number(__('No Responses', 'kubrick'), __('One Response', 'kubrick'), __('% Responses', 'kubrick'));?> <?php printf(__('to &#8220;%s&#8221;', 'kubrick'), the_title('', '', false)); ?></h2>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
	<ol class="commentlist section">
	<?php wp_list_comments(); ?>
	</ol>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed.', 'kubrick'); ?></p>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div id="respond" class="respond">

<h2><?php comment_form_title( __('Leave a Reply', 'kubrick'), __('Leave a Reply for %s' , 'kubrick') ); ?></h2>

<div class="meta cancel-comment-reply">
    <?php cancel_comment_reply_link(); ?>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p class="notice"><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'kubrick'), wp_login_url( get_permalink() )); ?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea></p>
<?php if ( is_user_logged_in() ) : ?>

<span class="meta logininfo"><?php printf(__('Logged in as <a href="%1$s">%2$s</a>.', 'kubrick'), get_option('siteurl') . '/wp-admin/profile.php', $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account', 'kubrick'); ?>"><?php _e('Log out &raquo;', 'kubrick'); ?></a></span>

<?php else : ?>

<ul class="loginform">
	<li>
		<label for="author"><?php _e('Name', 'kubrick'); ?> <?php if ($req) _e("(required)", "kubrick"); ?></label>
		<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
	</li>
	<li>
		<label for="email"><?php _e('Mail (will not be published)', 'kubrick'); ?> <?php if ($req) _e("(required)", "kubrick"); ?></label>
		<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
	</li>
	<li>
		<label for="url"><?php _e('Website', 'kubrick'); ?></label>
		<input type="text" name="url" id="url" value="<?php echo  esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
	</li>
</ul>
<?php endif; ?>

<!--<p><small><?php printf(__('<strong>XHTML:</strong> You can use these tags: <code>%s</code>', 'kubrick'), allowed_tags()); ?></small></p>-->



<span><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment', 'kubrick'); ?>" />
<?php comment_id_fields(); ?>
</span>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
