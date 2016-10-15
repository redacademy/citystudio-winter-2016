	<?php
/**
 * Template Name: Template One
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="citystudio-banner">
				<div class="banner-inner">
					<h2 class="page-titles"><?php the_title(); ?></h2>
				</div>
			</header>
			<div class="hero-wrap">
				<img class="template-hero" src="<?php the_field( 'banner_image' ); ?>" alt="banner image"/>
			</div>
			<div class="wwd-content">
				<div class="inner-column">
					<?php
                        // check if the repeater field has rows of data
                        if( have_rows('main_section') );
                             // loop through the rows of data
                            while ( have_rows('main_section') ) : the_row(); ?>
                          	<h3><?php the_sub_field('title') ?></h3>
	                          	<?php the_sub_field('content') ?>
							<hr class="separate">
                     <?php  endwhile; ?>
				</div>
			</div>
			<div class="call-to-action">

			<?php if(get_field('activate_cta') ): ?>
		      	<?php get_template_part('template-parts/content', 'template'); ?>
			<?php endif; ?>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
