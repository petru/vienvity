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
<div id="sidebar" class="clearfix">

	<div id="sb-1">
		<ul>
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
			<?php wp_list_categories('show_count=1&title_li=&exclude=2'); ?>
		<?php endif; ?>
		</ul>
	</div><!-- close:sb-1 -->
	

	<div id="sb-2">
		<ul>
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
			<li><?php include (TEMPLATEPATH . '/searchform.php'); ?></li>
			<li class="rss"><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('RSS Feed of the articles','vnv'); ?></a></li>
			<li class="rss"><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('RSS Feed of the comments','vnv'); ?></a></li>
		<?php endif; ?>
		</ul>
	</div><!-- close:sb-2 -->
</div><!-- close:sidebar -->