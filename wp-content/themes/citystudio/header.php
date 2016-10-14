<?php
/**
 * The header for our theme.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

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
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html('Skip to content'); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="header-container">

				<div class="site-branding">
					<a href="<?php echo esc_url(home_url([1]));?>">
				    <img src="<?php bloginfo('template_directory'); ?>/images/citystudio-logo.png" class="logo" alt="Citystudio logo">
				  </a>
				</div>
				<div class="site-navigation">
					<button onclick="showMenu()" class="hamburger" id="hamburgerMenu"><i class="fa fa-bars"></i>
						<div class="header-menu-title">Menu</div>
					</button>

					<div class="dropdown-content">
						<nav class="header-nav">
		  				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav>
					</div>

				</div><!-- close search gallery -->
			</div> 	<!--close header container -->
		</header><!-- #masthead -->
