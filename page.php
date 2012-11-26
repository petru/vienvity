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
<?php get_header();?>
<div id="content">
	<div id="main-content">
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	        <div class="post" id="post-<?php the_ID(); ?>">
            <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			      <div class="entry">
              <?php the_content(__('Continue reading &#187;','vnv')); ?>
              <?php wp_link_pages(); ?>
              <?php $sub_pages = wp_list_pages( 'sort_column=menu_order&depth=1&title_li=&echo=0&child_of=' . $id );?>
              <?php if ($sub_pages <> "" ){?>
              <p class="meta">This page has the following sub pages:</p>
              <ul>
                <?php echo $sub_pages; ?>
              </ul>
              <?php }?>
            </div>
	        </div>
			<?php comments_template(); // Get wp-comments.php template ?>
      <?php endwhile; else: ?>
          <p><?php _e('Sorry, no posts matched your criteria.','vnv'); ?></p>
      <?php endif; ?>
      <!--<p style="text-align:center;"><?php posts_nav_link(' - ','&#171; Prev','Next &#187;') ?></p> -->
	</div>
		<?php get_sidebar(); ?>
	</div>
  <?php get_footer();?>