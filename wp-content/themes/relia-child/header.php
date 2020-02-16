<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package relia
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'relia' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <div class="nav-wrapper" style=" width: 100%; margin: auto;">
            <nav>
                <a class="nav-item" href="<?php echo get_stylesheet_directory_uri(); ?>/furnishings">FURNISHINGS</a>
                <a class="nav-item" href="<?php echo get_stylesheet_directory_uri(); ?>/skis">SKIS</a>
                <a class="nav-item image" href="/">
                    <img style="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/vertical.png" alt="Civil And Wild">
                </a>
                <a class="nav-item" href="<?php echo get_stylesheet_directory_uri(); ?>/about">ABOUT</a>
                <a class="nav-item" href="<?php echo get_stylesheet_directory_uri(); ?>/contact">CONTACT</a>
            </nav>
        </div>  
	</header><!-- #masthead -->

	<div id="content" class="site-content">
