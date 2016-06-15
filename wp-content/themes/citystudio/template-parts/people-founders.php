<?php
  $args = array(
  'post_type' => 'people',
  'tax_query' => array(
    array(
      'taxonomy' => 'team',
      'field'    => 'slug',
      'terms'    => 'founders-circle',
    ),
  ),
);
$citystudio_founders = new WP_Query( $args ); ?>

<?php if (   $citystudio_founders->have_posts() ) : ?>

<?php /* Start the Loop */ ?>


<div class="citystudio-team container">

  <h2 class="section-titles">Founder's Circle</h2>

  <ul>

  <?php while ( $citystudio_founders->have_posts() ) : $citystudio_founders->the_post(); ?>

          <li class="team">
                  <h3 class="people-title"><?php the_sub_field( 'founder_member_name' ); ?></h3>
                  <p class="role"><?php the_sub_field( 'leadership_council_member_position' ); ?></p>
          </li>

      <?php endwhile; ?>
  </ul>
</div>
<?php else : ?>

<?php endif; ?>
