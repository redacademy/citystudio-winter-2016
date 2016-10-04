<?php
/**
 * Template Name: Partner Page.
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- "info main top section -->
      <header class="title-banner partners-banner" style="background-image: url( '<?php the_field('partner_banner_image'); ?> ' ); ">
				<div class="blue-overlay">
	        <h1>CityStudio Partner: <span><?php the_field('school_name'); ?></span>
	        </h1>
				</div>
      </header>

      <div class="info-main">
        <div class="school-mission-container">
          <h3>School's mission or vision</h3>

					<div class="school-mission">
            <?php the_field('school_mission'); ?>
          </div>
        </div>

				<div class="campus-course-container">
          <div class="school-logo">
						<img src="<?php the_field('logo'); ?>" alt="School Logo" />
          </div>

          <div class="campus-course-div">
            <h3>Campus Courses</h3>
            	<ul class="campus-courses">
								<?php if (have_rows('school_courses'));
                  while (have_rows('school_courses')) : the_row(); ?>
										<li>
											<a href ="<?php the_sub_field('course_link') ?>"><?php the_sub_field('course_name') ?> </a>
										</li>
									<?php endwhile; ?>

									<p><?php the_field('no_courses_option'); ?></p>
            	</ul>
          </div>
        </div>
      </div> <!-- close info-main -->

			<!-- start past projects display -->
    	<div class="projects-container">
				<div class="title-block-container">
	      	<div class="title-block">
	        	<h2>Past Projects By: <span><?php the_field('school_abrev'); ?></span></h2>
	      	</div>
			</div>

			<!-- loop for displaying projects -->
			<div class="section-archive-partners">
				<?php global $post;
          $school = $post_slug = $post->post_name;

						if (is_single($school)) {
              get_template_part('template-parts/page-schools/school', $school);
                } else {
                    //everything else
                }
          	?>

		</div><!-- .section-archive -->
	<hr class="separate-white">

<!-- media links -->
				<h3 class ="media-links-title"><span><?php echo the_field('school_abrev'); ?></span> in the media, publications, and press...</h3>
					<div class="media-links-container">
						<?php
                            // check if the repeater field has rows of data
                            if (have_rows('media_links'));
                            // loop through the rows of data
                            while (have_rows('media_links')) : the_row(); ?>
							<p class="media-links">

								<a href ="<?php the_sub_field('media_link') ?>"><?php the_sub_field('media_text') ?> </a>
							</p>
							<?php endwhile; ?>
							<div class="no-media">
									<?php the_field('no_media_option'); ?>
							</div>
				 </div> <!--end media links container -->

  	</div><!-- end projects-container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
