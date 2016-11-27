<div class="full-width">
  <div class="info-main inner-column-wide">
    <div class="school-mission-container">
      <h3><?php the_field('school_mission_title'); ?></h3>

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
                  <a target="_blank" href="<?php the_sub_field('course_link') ?>"><?php the_sub_field('course_name') ?> </a>
                </li>
              <?php endwhile; ?>

              <p><?php the_field('no_courses_option'); ?></p>
          </ul>
      </div>
    </div>
  </div>
</div> <!-- close info-main -->
