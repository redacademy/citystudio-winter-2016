<?php
/**
 * The main template file.
 *
 * Template Name: Front-page
 */

get_header(); ?>

<div class="front-page-main">
	<div class="hero">
		<div class="hero-logo">
		</div> 	
		<button id="button" class="toggle-class"></button>
		<div class="loader">
			<i class="fa fa-circle-o-notch fa-spin fa-3x"></i>
		</div>
	</div>

</div>

<div class="container">

<section class="gallery">
	<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/content' ); ?>

	<?php endwhile; ?>
</section>
</div>