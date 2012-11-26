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
			<p class="string"><?php _e('The page you are looking for doesn\'t exist. Sorry.','vnv'); ?></p>
			<a href="<?php echo home_url(); ?>/" class="back"><?php _e('Back home','vnv'); ?></a>
			<h2 class="error"><?php _e('Try a different search or look in the categories below.','vnv'); ?></h2>
		</div><!-- close:main-content -->
		<?php get_sidebar(); ?>
	</div><!-- close:content -->
<?php get_footer(); ?>