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
      <header class="title-banner blue-overlay">
        <h1>CityStudio Partner:<span><?php echo CFS()->get( 'school_name' ); ?></span>
        </h1>
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
          <?php if ( has_post_thumbnail() ) : ?>
    				<?php the_post_thumbnail( 'medium' ); ?>
    			<?php endif; ?>
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
      <div class="title-block">
        <h2>Past Projects By <span><?php echo CFS()->get( 'school_abrev' ); ?></span></h2>
      </div>
      

    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
