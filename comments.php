<?php
/*
	vienvity - a minimalistic WordPress theme
	Copyright (C) 2007-2010 Javier Cañada, Rubén Lozano and Mark MacKay
	Copyright (C) 2010-2011 Petru Madar <petru@vienvity.net>
    This file is part of vienvity.

    vienvity is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    vienvity is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with vienvity.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die (__('Please do not load this page directly. Thanks!','vnv'));
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>
			<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','vnv'); ?></p>
			<?php
			return;
		}
	}
	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>
<!-- You can start editing here. -->
<?php if ($comments) : ?>
	<div id="comments">
		<h3><?php comments_number(__('No comments yet','vnv'), __('There is one comment for this article','vnv'), __('There are % comments for this article','vnv') );?></h3>
		<ol>
		<?php foreach ($comments as $comment) : ?>
			<li id="comment-<?php comment_ID() ?>"  class="comment <?php if (function_exists('author_highlight')) { author_highlight($comment); }?>">
				<?php if ($comment->comment_approved == '0') : ?>
				<p class="moderation"><?php _e('Your comment will be published when it is approved.','vnv'); ?></p>
				<?php endif; ?>
				<cite><span class="date"><?php comment_date(__('F jS, Y','vnv')) ?></span><?php comment_author_link() ?> said:</cite>
				<blockquote>
					<?php comment_text() ?>
				</blockquote>
			</li>
		<?php endforeach; /* end for each comment */ ?>
		</ol>
	</div><!-- close:comments -->
 <?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
	<div id="comments">
		<h3><?php _e('No comments yet','vnv'); ?></h3>
	</div><!-- close:comments -->
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
	<div id="comments">
		<h3><?php _e('Comments are closed','vnv'); ?></h3>
	</div><!-- close:comments -->
	<?php endif; ?>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
	<div id="commentform">
		<h3><?php _e('Write a comment','vnv'); ?></h3>
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p><?php _e('You have to','vnv'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>"><?php _e('log in','vnv'); ?></a> <?php _e('to write a comment.','vnv'); ?></p>
	<?php else : ?>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" name="comment-form">
		<?php if ( $user_ID ) : ?>
			<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account','vnv') ?>"><?php _e('Log out?','vnv') ?></a></p>
		<?php else : ?>
			<p>
				<input type="text" name="author" id="author" class="input-text" value="<?php echo $comment_author; ?>" size="22" />
				<label for="author"><?php _e('Name','vnv'); ?><?php if ($req) _e(' (required)','vnv'); ?></label>
			</p>
			<p>
				<input type="text" name="email" id="email" class="input-text" value="<?php echo $comment_author_email; ?>" size="22" />
				<label for="email"><?php _e('Email','vnv'); ?> <?php if ($req) _e(' (required, but it will not be published)','vnv'); ?></label>
			</p>
			<p>
				<input type="text" name="url" id="url" class="input-text" value="<?php echo $comment_author_url; ?>" size="22" />
				<label for="url"><?php _e('Website (if you have one)','vnv'); ?></label>
			</p>
		<?php endif; ?>
			<p>
				<textarea name="comment" id="comment" cols="100" rows="10"></textarea>
			</p>
			<p class="input-submit">
				<input name="submit-comment" type="submit" id="submit-comment" value="<?php _e('Send comment','vnv'); ?>" />
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			</p>
		<?php do_action('comment_form', $post->ID); ?>
		</form>
	</div><!-- close:commentform -->
	<?php endif; // If registration required and not logged in ?>
	<?php endif; // if you delete this the sky will fall on your head ?>