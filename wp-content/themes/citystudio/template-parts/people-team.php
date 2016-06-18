<?php
  $args = array(
  'post_type' => 'people',
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

<div class="citystudio-teams team-container">

  <h2 class="section-titles">CityStudio Vancouver Team</h2>

  <ul>

  <?php while ( $citystudio_team->have_posts() ) : $citystudio_team->the_post(); ?>

                <li class="team">
                  <a href="<?php the_permalink(); ?>">

                    <div class="team-pic">

                      <?php if( get_field('team_member_image') ): ?>
                        <img src="<?php the_field( 'team_member_image' ); ?>" />
                      <?php endif; ?>

                    </div>

                    <h3 class="people-title"><?php the_field( 'team_member_name' ); ?></h3>

                  </a>

                    <p class="role"><?php the_field( 'team_member_role' ); ?></p>

                </li>

      <?php endwhile; ?>
  </ul>
  <hr class="separate" />
</div>

<?php else : ?>

<?php endif; ?>
