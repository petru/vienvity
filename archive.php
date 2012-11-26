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
<?php get_header(); ?>
	<div id="content">
		<div id="main-content">
			<?php if (have_posts()) : ?>
			 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<?php /* If this is a category archive */ if (is_category()) { ?>
			<p class="string"><?php _e('Archive of articles classified as','vnv'); ?> "<strong><?php echo single_cat_title(); ?></strong>"</p>
			<a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','vnv'); ?></a>
	 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<p class="string"><?php _e('Archive of published articles on','vnv'); ?> <strong><?php the_time('F jS, Y'); ?></strong></p>
			<a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','vnv'); ?></a>
		 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p class="string"><?php _e('Archive of published articles in','vnv'); ?> <strong><?php the_time('F, Y'); ?></strong></p>
			<a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','vnv'); ?></a>
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p class="string"><?php _e('Archive of published articles in','vnv'); ?> <strong><?php the_time('Y'); ?></strong></p>
			<a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','vnv'); ?></a>
		  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
			<p class="string"><?php _e('Archive of published articles by ','vnv'); ?></p>
			<a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','vnv'); ?></a>
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p class="string"><?php _e('Blog archives','vnv'); ?></p>
			<a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','vnv'); ?></a>
			<?php } ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="post"  id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<span class="date"><?php the_time('F jS, Y') ?></span>
				<div class="entry">
					<?php the_content(__('Read the rest of this article','vnv').' &raquo;'); ?>
				</div>
				<span class="number-of-comments"><a href="<?php the_permalink() ?>#comments"><?php comments_number(__('No comments','vnv'), __('0ne comment','vnv'), __('% comments','vnv'));?></a></span>
			</div>
			<?php endwhile; ?>
			<div class="pagination clearfix">
				<div class="prev"><?php next_posts_link('&laquo; '.__('Previous articles','vnv')) ?></div>
				<div class="next"><?php previous_posts_link(__('More recent articles','vnv').' &raquo;') ?></div>
			</div>
		<?php else : ?>
			<h2>Not found</h2>
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		<?php endif; ?>
		</div><!-- close:main-content -->
	<?php get_sidebar(); ?>
	</div><!-- close:content -->
<?php get_footer(); ?>