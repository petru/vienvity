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
	<div id="footer">
		<p>&copy; Copyright <?php echo date('Y') . ' '?> <?php bloginfo('name');?>. All rights reserved.</p>
		<p><?php bloginfo('name'); ?> <?php _e('is powered by','vnv'); ?> <a href="http://www.wordpress.org" hreflang="en">WordPress</a> <?php _e('and the ','vnv'); ?><a href="http://www.vienvity.net" hreflang="en">vienvity Theme</a>.</p>
	</div><!-- close:footer -->
</div><!-- close:wrapper -->
<?php wp_footer(); ?>
</body>
</html>