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
<form method="get" action="<?php bloginfo('home'); ?>/" name="search-form" id="search-form" >
	<p>
		<label for="s"><?php _e('Search','vnv'); ?>:</label>
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="input-text" />
		<input name="submit" type="submit" id="submit" value="<?php _e('Search','vnv'); ?>" />
	</p>
</form>