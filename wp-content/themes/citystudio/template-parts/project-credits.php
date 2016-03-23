<?php
/**
 * Template part for project summary
 *
 * @package RED_Starter_Theme
 */

?>

<div class="section-credits content-wrapper">

  <div class="page-two-title">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </div>

  <div class="col-one">
  	<h3>School &amp; Course:</h3><span class="proj-partners"><?php echo CFS()->get( 'partners' ); ?></span>

    <h3>Faculty Member:</h3><span class="proj-faculty"><?php echo CFS()->get( 'faculty_member' ); ?></span>

    <h3>Staff &amp; Partners</h3><span class="proj-staff"><?php echo CFS()->get( 'staff_partners' ); ?></span>

    <h3>Student Team:</h3><span class="proj-subtitle"><?php echo CFS()->get( 'student_team' ); ?></span>
  </div> <!-- end .col-one -->

  <div class="col-two">

    <h3>Date Completed:</h3><span class="proj-date"><?php echo CFS()->get( 'season_completed' ); ?><?php echo CFS()->get( 'date' ); ?></span>

    <h3>Initiative:</h3><span class="proj-subtitle"><?php echo CFS()->get( 'initiative' ); ?></span>

    <h3>Neighbourhood:</h3><span class="proj-subtitle"><?php echo CFS()->get( 'neighbourhood' ); ?></span>

    <h3>Media:</h3><span class="proj-subtitle"><?php echo CFS()->get( 'media' ); ?></span>

  </div> <!-- end .col-two -->
</div>
