	<?php
/** 
 * Template Name: Template One
 */

get_header(); ?>
	


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		     <div class="page-title">
		    	<div class="wwd-page-wrapper">
				<h1>What We Do</h1>
			  </div>
			</div>
			<div class="wwd-hero">	
			</div>

			<div class="wwd-content">
				<div class="section-header">
					<?php
                        // check if the repeater field has rows of data
                        if( have_rows('main_section') );
                             // loop through the rows of data
                            while ( have_rows('main_section') ) : the_row(); ?>
                          	<h3>
	                          	<?php the_sub_field('title') ?>
	                        </h3>
	                          	<?php the_sub_field('content') ?>
							<hr class="separate">
                     <?php  endwhile; ?>
				</div>
			</div>
			<div class="call-to-action">
			
					<div class="connect">
						<label class="become-involved">Become Involved!</label>
						<button><p>Connect</p></button>
					</div>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
