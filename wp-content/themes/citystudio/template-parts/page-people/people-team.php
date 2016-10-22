<?php
  $args = array(
  'post_type' => 'people',
  'order'   => 'ASC',
  'tax_query' => array(
    array(
      'taxonomy' => 'team',
      'field'    => 'slug',
      'terms'    => 'citystudio-team',
    ),
  ),
);
$citystudio_team = new WP_Query( $args ); ?>

<?php if ( $citystudio_team->have_posts() ) : ?>

<?php /* Start the Loop */ ?>

<div class="team-container">

  <h2 class="section-one-title">CityStudio Vancouver Team</h2>

  <ul class="people-list">

  <?php while ( $citystudio_team->have_posts() ) : $citystudio_team->the_post(); ?>

                <li class="team">
                  <a href="<?php the_permalink(); ?>">

                    <div class="team-pic">

                      <?php if( get_field('team_member_image') ): ?>
                        <img src="<?php the_field( 'team_member_image' ); ?>" />
                      <?php endif; ?>

                    </div>

                    <?php the_title( '<h3 class="people-title">' , '</h3>' ); ?>

                  </a>

                    <p class="role"><?php the_field( 'team_member_role' ); ?></p>

                </li>

      <?php endwhile; ?>
      <hr class="separate">
  </ul>

</div>


<?php else : ?>

<?php endif; ?>
