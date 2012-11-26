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
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<span class="date"><?php the_time(__('F jS, Y','vnv')) ?></span>
				<div class="entry">
					<?php the_content(__('Read the rest of this article','vnv').' &raquo;'); ?>
					<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages','vnv').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<span class="number-of-comments">Part of <?php the_category(', ') ?> / <a href="<?php the_permalink() ?>#comments"><?php comments_number(__('No comments','vnv'), __('One comment','vnv'), __('% comments','vnv'));?></a></span>
				</div>
			</div>
		<?php comments_template(); ?>
		<?php endwhile; else: ?>
			<p class="string"><?php _e('Sorry, there are no articles.','vnv'); ?></p>
	<?php endif; ?>
		</div><!-- close:main-content -->
		<?php get_sidebar(); ?>
	</div><!-- close:content -->
<?php get_footer(); ?>