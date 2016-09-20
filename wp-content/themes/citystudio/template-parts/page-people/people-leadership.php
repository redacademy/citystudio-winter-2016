<?php
  $args = array(
  'post_type' => 'people',
  'tax_query' => array(
    array(
      'taxonomy' => 'team',
      'field'    => 'slug',
      'terms'    => 'leadership-council',
    ),
  ),
);
$citystudio_leadership = new WP_Query( $args ); ?>

<?php if (   $citystudio_leadership->have_posts() ) : ?>

<?php /* Start the Loop */ ?>
<div class="citystudio-teams">

  <div class="citystudio-team team-container">
    <h2 class="section-titles">Leadership Council</h2>

    <ul class="people-list">

    <?php while ( $citystudio_leadership->have_posts() ) : $citystudio_leadership->the_post(); ?>

      <li class="leaders">
        <h3 class="people-title"><?php the_field( 'leadership_council_member_name' ); ?></h3>
        <p class="role"><?php the_field( 'leadership_council_member_role' ); ?></p>
      </li>

    <?php endwhile; ?>
    </ul>
</div>

<?php else : ?>

<?php endif; ?>
