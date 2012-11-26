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
<?php load_theme_textdomain('vnv'); ?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php if (is_home()) { ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php } elseif (is_single() || is_page() || is_archive()) { ?><?php wp_title(''); ?> - <?php bloginfo('name'); ?><?php } elseif  (is_404()) { ?><?php _e('The page you are looking for doesn\'t exist. Sorry.','vnv'); ?> - <?php bloginfo('name'); ?><?php } elseif (is_search()) { ?><?php _e('You searched for the following','vnv'); ?>: "<?php echo wp_specialchars($s); ?>" - <?php bloginfo('name'); ?><?php } ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description') ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!--[if IE 7]>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles-ie7.css" type="text/css" media="screen" />
	<![endif]-->
	<!--[if IE 6]>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles-ie6.css" type="text/css" media="screen" />
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/print.css" type="text/css" media="print" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php bloginfo('name'); ?> <?php _e('RSS Feed','vnv'); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php bloginfo('name'); ?> <?php _e('Comments RSS Feed','vnv'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<p class="description"><?php bloginfo('description'); ?></p>
	</div><!-- close:header -->