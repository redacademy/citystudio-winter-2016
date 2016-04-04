<?php
/**
 * The header for our theme.
 *
 * @package Red_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

	<style media="screen and (max-width: 782px)">
	            html {
	                margin-top:0 !important;
	            }
	    </style>
	    <style media="screen">
	            html {
	                margin-top:0 !important;
	            }
	    </style>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
			<div class="header-container">

			<div class="site-branding">
				<a href="<?php echo esc_url(home_url());?>">
					<img src="<?php bloginfo('template_directory'); ?>/images/citystudio-logo.png" class="logo" alt="Citystudio logo">
				</a>
			</div><!-- .site-branding -->
			<div class="search-gallery">
			<div class="hide-search">
				<span class="icon-search" aria-hidden="true">
					<a href="<?php echo esc_url(home_url('/search-page?s='));?>"><i class="fa fa-search"></i></a>
				</span>
			</div>
				<div class="icon-gallery">
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
