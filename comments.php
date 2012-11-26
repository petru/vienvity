<?php
/*
	vienvity - a minimalistic WordPress theme
	Copyright (C) 2007-2010 Javier Canada, Ruben Lozano and Mark MacKay
	Copyright (C) 2010-2012 Petru Madar <petru@vienvity.net>
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
<div class="comment-navigation">
<?php paginate_comments_links(); ?>
</div>
<ol class="commentslist">
<?php wp_list_comments(); ?> 
</ol>
<div class="comment-navigation">
<?php paginate_comments_links(); ?>
</div>
</div>
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
	<div id="respond">
	<div id="commentform">
		<?php
		
			$commenter = wp_get_current_commenter();
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );
			
			$fields =  array(
	'author' => '<p class="comment-form-author">' . '<input class="input-text" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="22"' . $aria_req . ' />' . '<label for="author">' . __( 'Name', 'vnv' ) . '</label>' . ( $req ? '<span class="required">*</span>' : '' ) .
	            '</p>',
	'email'  => '<p class="comment-form-email">' . '<input class="input-text" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="22"' . $aria_req . ' />' . '<label for="email">' . __( 'Email', 'vnv' ) . '</label>' . ( $req ? '<span class="required">*</span>' : '' ) . '</p>',
	'url'    => '<p class="comment-form-url">' . '<input class="input-text" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="22" />' . '<label for="url">' . __( 'Website (if you have one)', 'vnv' ) . '</label>' . '</p>',
);

			$comment_form_args = array('id_form' => 'comment-form',
									   'label_submit' => 'Send comment',
									   'id_submit' => 'submit-comment',
									   'comment_field' => '<p>
														   <textarea name="comment" id="comment" cols="100" rows="10"></textarea>
			                                                </p>',
										'title_reply' => 'Write a comment',
										'title_reply_to' => 'Reply to %s',
										'cancel_reply_link' => '(cancel reply)',
										'fields' => $fields,
										//'comment_notes_before' => ''
			
									);
			comment_form($comment_form_args); 
		?>
	</div>
	</div>
	<?php endif; // if you delete this the sky will fall on your head ?>