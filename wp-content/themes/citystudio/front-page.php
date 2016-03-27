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
		<div class="site-description">
			<p>
				CitySudio is an innovation and leadership hub inside City Hall where staff, citizens and students from 6 universities and colleges co-create experiments and solutions for the City.
			</p>
		</div>
		<button id="button" class="toggle-class"></button>
	<!-- 	<div class="loader">
			<i class="fa fa-circle-o-notch fa-spin fa-3x"></i>
		</div> -->
	</div>
</div>



<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>

	<?php endwhile; ?>

<?php get_template_part( 'template-parts/bxslider' ); ?>

</div>


<?php get_footer(); ?>
