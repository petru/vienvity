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
<?php get_header(); ?>
	<div id="content">
		<div id="main-content">
	<?php if (have_posts()) : ?>
		<p class="string"><?php _e('You searched for the following','vnv'); ?>: "<strong><?php echo esc_html($s); ?></strong>"</p>
		<a href="<?php echo home_url(); ?>/" class="back"><?php _e('Back home','vnv'); ?></a>
		<h2 class="error"><?php _e('Search results','vnv'); ?></h2>
		<?php while (have_posts()) : the_post(); ?>
		<div class="post"  id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<span class="date"><?php the_time(__('F jS, Y','vnv')) ?></span>
			<div class="entry">
				<?php the_excerpt(); ?>
			</div>
			<span class="number-of-comments"><a href="<?php the_permalink() ?>#comments" title="title"><?php comments_number(__('No comments','vnv'), __('One comment','vnv'), __('% comments','vnv'));?></a></span>
		</div>
		<?php endwhile; ?>
		<div class="pagination clearfix">
			<div class="prev"><?php next_posts_link('&laquo; '.__('Previous articles','vnv')) ?></div>
			<div class="next"><?php previous_posts_link(__('More recent articles','vnv').' &raquo;') ?></div>
		</div>
	<?php else : ?>
		<p class="string"><?php _e('You searched for the following','vnv') ?>: "<strong><?php echo esc_html($s); ?></strong>"</p>
		<a href="<?php echo home_url(); ?>/" class="back"><?php _e('Back home','vnv'); ?></a>
		<h2 class="error"><?php _e('We didn\'t find anything. Try a different search or look in the categories below.','vnv'); ?></h2>
	<?php endif; ?>
		</div>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>