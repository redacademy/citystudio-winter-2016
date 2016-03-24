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


	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
			<div class="header-container">

			<div class="site-branding">
				<img width="250" height="52" src="<?php bloginfo('template_directory'); ?>/images/citystudio-logo.png" class="logo" width="300" heightt="60" alt="Le Red Bread logo">
			</div><!-- .site-branding -->

			<div class="search-gallery">
				<span class="icon-search" aria-hidden="true">
					<i class="fa fa-search"></i>
				</span>


				<span class="icon-gallery">
					<a href="<?php echo esc_url( home_url ( '/' )); ?>"><img src="<?php echo get_template_directory_uri() . '/images/gallery-blue.png'; ?>" width="45" height="45" class="gallery-image" alt="Gallery logo"></a>
				</span>
			</div>
		</div>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
