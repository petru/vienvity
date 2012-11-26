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
<?php load_theme_textdomain('vnv'); ?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<title><?php if (is_home()) { ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php } elseif (is_single() || is_page() || is_archive()) { ?><?php wp_title(''); ?> - <?php bloginfo('name'); ?><?php } elseif  (is_404()) { ?><?php _e('The page you are looking for doesn\'t exist. Sorry.','vnv'); ?> - <?php bloginfo('name'); ?><?php } elseif (is_search()) { ?><?php _e('You searched for the following','vnv'); ?>: "<?php echo esc_html($s); ?>" - <?php bloginfo('name'); ?><?php } ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description') ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!--[if IE 7]>
		<link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/css/styles-ie7.css" type="text/css" media="screen" />
	<![endif]-->
	<!--[if IE 6]>
		<link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/css/styles-ie6.css" type="text/css" media="screen" />
	<![endif]-->
	<link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/css/print.css" type="text/css" media="print" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php add_theme_support( 'automatic-feed-links' ); ?>
	<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
	<?php if ( ! isset( $content_width ) ) $content_width = 900; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
	<div id="header">
		<h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
		<p class="description"><?php bloginfo('description'); ?></p>
	</div><!-- close:header -->