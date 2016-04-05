<?php
/**
 * Template part for project summary
 *
 * @package RED_Starter_Theme
 */

?>

<div class="section-credits content-wrapper">

  <div class="page-title">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </div>

  <div class="col-one">
    <span class="proj-partners proj-detail-wrap">
      <h3>School &amp; Course:</h3>

    <?php  $terms = get_the_terms( $post, 'partners' );
      if ( !empty($terms)) : ?>

        <?php foreach ( $terms as $term )  : ?>

            <?php echo $term->name; ?>

      <?php endforeach; ?>
      <?php endif; ?>

    </span>


    <span class="proj-faculty proj-detail-wrap">
      <h3>Faculty Member:</h3>
      <?php echo CFS()->get( 'faculty_member' ); ?>
    </span>

    <span class="proj-staff proj-detail-wrap">
      <h3>Staff &amp; Partners:</h3>
      <?php echo CFS()->get( 'staff_partners' ); ?>
    </span>

    <span class="proj-subtitle proj-detail-wrap">
      <h3>Student Team:</h3>
      <?php echo CFS()->get( 'student_team' ); ?>
    </span>

  </div> <!-- end .col-one -->

  <div class="col-two">

    <span class="proj-date proj-detail-wrap">
      <h3>Date Completed:</h3>
      <?php  $terms = get_the_terms( $post, 'season' );
        if ( !empty($terms)) : ?>

          <?php foreach ( $terms as $term )  : ?>

              <?php echo $term->name; ?>

        <?php endforeach; ?>
        <?php endif; ?>

      <?php  $terms = get_the_terms( $post, 'year' );
        if ( !empty($terms)) : ?>

          <?php foreach ( $terms as $term )  : ?>

              <?php echo $term->name; ?>

        <?php endforeach; ?>
        <?php endif; ?>
    </span>

    <span class="proj-subtitle proj-detail-wrap">
      <h3>City Strategy:</h3>
      <?php echo CFS()->get( 'city_strategy' ); ?>
    </span>

    <span class="proj-subtitle proj-detail-wrap">
      <h3>Initiative:</h3>
      <?php echo CFS()->get( 'initiative' ); ?>
    </span>

    <span class="proj-subtitle proj-detail-wrap">
      <h3>Neighbourhood:</h3>
      <?php  $terms = get_the_terms( $post, 'neighbourhoods' );
        if ( !empty($terms)) : ?>

          <?php foreach ( $terms as $term )  : ?>

              <?php echo $term->name; ?>

        <?php endforeach; ?>
        <?php endif; ?>
    </span>

    <span class="proj-subtitle proj-detail-wrap">
      <h3>Media:</h3>
      <?php echo CFS()->get( 'media' ); ?>
    </span>

  </div> <!-- end .col-two -->
</div>
