<?php
/**
 * Template Name: Partner Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- "info main top section -->
      <header class="title-banner">
				<div class="blue-overlay">
	        <h1>CityStudio Partner: <span><?php echo CFS()->get( 'school_name' ); ?></span>
	        </h1>
				</div>
      </header>
      <div class="info-main">
        <div class="school-mission-container">
          <h3>School's mission or vision</h3>
          <div class="school-mission">
            <?php echo CFS()->get( 'school_mission' ); ?>
          </div>
        </div>
        <div class="campus-course-container">
          <div class="logo">
					<img src="<?php the_field( 'logo' ); ?>" alt="School Logo" />
          </div>
          <div class="campus-courses">
            <h3>Campus Courses</h3>
            <ul class="campus-courses">
              <li><?php echo CFS()->get( 'course_one' ); ?></li>
              <li><?php echo CFS()->get( 'course_two' ); ?></li>
              <li><?php echo CFS()->get( 'course_three' ); ?></li>
              <li><?php echo CFS()->get( 'course_four' ); ?></li>
            </ul>
          </div>
        </div>

      </div> <!-- close info-main -->

<!-- start past projects display -->
    <div class="projects-container">
			<div class="title-block-container">
	      <div class="title-block">
	        <h2>Past Projects By: <span><?php echo CFS()->get( 'school_abrev' ); ?></span></h2>
	      </div>
			</div>
<!-- loop for displaying projects -->
			<div class="section-archive">
				<?php $query = new WP_Query( array( 'partners' => 'eucad' ) );
			  // The Loop
			  while ( $query->have_posts() ) { $query->the_post(); ?>
				<a href="<?php echo get_the_permalink();?>">
					<?php echo '<li>' . the_post_thumbnail('medium','style=width:340px;height:250px;margin: 0 auto;margin-bottom:1.5rem;') . '</li>';
				  } ?>
				</a>
			<?php wp_reset_postdata(); ?>
			</div>
		<hr class="separate-white">
<!-- media links -->
		<h3 class ="media-links-title"><?php echo CFS()->get( 'school_abrev' ); ?> in the media, publications, and press...</h3>
		<div class="media-links-container">
			<div class="media-link">
				<p><?php echo CFS()->get( 'media_link_1' ); ?></p>
			</div>
			<div class="media-link">
				<p><?php echo CFS()->get( 'media_link_2' ); ?></p>
			</div>
			<div class="media-link">
				<p><?php echo CFS()->get( 'media_link_3' ); ?></p>
			</div>
		</div>

  	</div><!-- end projects-container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
