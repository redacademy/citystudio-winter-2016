	<?php
/**
 * Template Name: Template One
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="citystudio-banner">
					<h1 class="page-titles"><?php the_field('page_title'); ?></h1>
			</header>
			<div class="hero-wrap">
			<?php if( get_field('banner_image') ): ?>
				<img class="template-hero" src="<?php the_field( 'banner_image' ); ?>" alt="banner image"/>
			<?php endif; ?>
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

				<div class="cta-inner">
					<?php if(get_field('activate_cta') ): ?>
								<?php get_template_part('template-parts/content', 'template'); ?>
					<?php endif; ?>
				</div>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
