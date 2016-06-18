<?php
  $args = array(
  'post_type' => 'people',
  'tax_query' => array(
    array(
      'taxonomy' => 'team',
      'field'    => 'slug',
      'terms'    => 'operations-council',
    ),
  ),
);
$citystudio_operations = new WP_Query( $args ); ?>

<?php if (   $citystudio_operations->have_posts() ) : ?>

<?php /* Start the Loop */ ?>

<div class="citystudio-teams team-container">

  <h2 class="section-titles">Operations Council</h2>

  <ul>

  <?php while ( $citystudio_operations->have_posts() ) : $citystudio_operations->the_post(); ?>

          <li class="operations">
            <h3 class="people-title"><?php the_field( 'operations_council_member_name' ); ?></h3>
            <p class="role"><?php the_field( 'operations_council_member_position' ); ?></p>
          </li>

      <?php endwhile; ?>
  </ul>
  <hr class="separate" />
</div>
<?php else : ?>

<?php endif; ?>
