
<!-- Section Project Credits -->
<div class="section-credits content-wrapper">
  <div class="excerpt"><?php the_field('excerpt'); ?></div>

  <div class="column-wrap">
    <div class="col-one">
      <span class="proj-partners proj-detail-wrap">
        <h3>School &amp; Course:</h3>
        <p><?php the_field('participating_school'); ?>
        <?php if (have_rows('course_name'));
          while (have_rows('course_name')) : the_row(); ?>
            <?php the_sub_field('course_name') ?>
          <?php endwhile; ?></p>
      </span>

      <span class="proj-faculty proj-detail-wrap">
        <h3>Faculty Member:</h3>
        <p><?php the_field('faculty_members'); ?></p>
      </span>

      <span class="proj-date proj-detail-wrap">
        <h3>Semester Completed:</h3>
        <p><?php the_field('semester_completed'); ?> -
          <?php the_field('year_completed'); ?> </p>
      </span>

      <span class="proj-subtitle proj-detail-wrap">
        <h3>City Strategy &amp; Goal Area: </h3>
        <p><?php the_field('city_strategy'); ?> -
          <?php the_field('goal_area'); ?></p>
      </span>

      <span class="proj-subtitle proj-detail-wrap">
        <h3>Neighbourhood:</h3>
        <?php the_field('neighbourhood'); ?>
      </span>
    </div> <!-- end .col-one -->

    <div class="col-two">
      <span class="proj-subtitle proj-detail-wrap">
        <h3>Student Team:</h3>
        <p><?php the_field('student_team'); ?></p>
      </span>

      <span class="proj-staff proj-detail-wrap">
        <h3>Staff Contact &amp; Partners:</h3>
        <?php the_field('staff_partners'); ?>
      </span>

      <!-- media fields -->
      <span class="proj-subtitle proj-detail-wrap">
        <?php
          $value = get_field('activate_media');
          if ($value) { ?>

          <h3>Media:</h3>
          <!-- linking media -->
        <?php
          if (have_rows('project_media'));
            while (have_rows('project_media')) : the_row(); ?>
              <p class="media-links">
                <a href ="<?php the_sub_field('media_link') ?>"><?php the_sub_field('media_title') ?> </a>
              </p>
        <?php endwhile; ?>

        <!-- file media upload -->
        <?php
          if (have_rows('project_media_2'));
            while (have_rows('project_media_2')) : the_row(); ?>
              <p class="media-links">

                <?php if (get_sub_field('file_upload')): ?>
                  <a href="<?php the_sub_field('file_upload'); ?>" ><?php the_sub_field('file_name'); ?></a>
                <?php endif; ?>
              </p>
        <?php endwhile; ?>

        <!-- embed video or image media-->
        <div class="embed-container">
          <?php the_field('embed_video'); ?>
        </div>

        <?php
        } else {
        echo '';
        } ?>
      </span>
    </div> <!-- end .col-two -->
  </div><!-- end .column-wrap-->
</div> <!-- end section-credits content-wrapper -->
