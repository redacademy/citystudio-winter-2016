<?php
/**
 * Template Name: Contact Page
 *
 * @package CityStudio
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<header class="contact-header citystudio-banner">
		<div class="banner-inner">
			<h1 class="page-titles">Contact Us</h1>
		</div>
	</header>
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.2990139699914!2d-123.11715808431097!3d49.27073107933005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673d900fd7b4b%3A0xdc8ccf6833c92d26!2sCityStudio!5e0!3m2!1sen!2sca!4v1465424051704" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="contact-page-container">

	<div class="getintouch-container">
		<div class="getintouch-block">
			<h2>Get in touch</h2>
		</div>
	</div>

	<div class="contact-content">
		 <div class="contact-form-container">
			<?php echo FrmFormsController::show_form(5, $key = '5', $title=false, $description=false); ?>
		 </div>
			<div class="contact-info-container">

				<div class="contact-display">
					<h3 class="contact-title">
						<?php the_field('phone_title') ?>
					</h3>

					<p class="content">
						<?php the_field('phone_number') ?>
					</p>

					<h3 class="contact-title">
						<?php the_field('address_title') ?>
					</h3>
					<p class="content">
						<?php the_field('address') ?>
					</p>
				</div>
			</div>
	</div>

</div><!-- end contact-page-container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
