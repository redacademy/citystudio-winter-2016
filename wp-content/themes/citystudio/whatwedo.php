<?php
/** 
 * Template Name: What We Do
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
                        if( have_rows('section') );
                             // loop through the rows of data
                            while ( have_rows('section') ) : the_row(); ?>
                          	<h3>
	                          	<?php the_sub_field('section_heading') ?>
	                        </h3>
	                          	<?php the_sub_field('section_content') ?>
							<hr class="separate">
                     <?php  endwhile; ?>
				</div>
			</div>
			<div class="call-to-action">
					<?php
	            // check if the repeater field has rows of data
	            if( have_rows('call_to_action') );
	                 // loop through the rows of data
	                while ( have_rows('call_to_action') ) : the_row(); ?>
	            <div class="cta_blurb">
					<div class="cta-heading">
		              	<h3><?php the_sub_field('cta_heading') ?></h3>
		            </div>
		            <div class="cta-content">
		            	<?php the_sub_field('cta_content') ?>
					</div>
				</div>
	              <?php  endwhile; ?>
					<div class="connect">
						<label class="become-involved">Become Involved!</label>
						<button><p>Connect</p></button>
					</div>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
