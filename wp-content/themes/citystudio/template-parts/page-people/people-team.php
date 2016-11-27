<div class="team-container">

  <h2 class="section-one-title">CityStudio Vancouver Team</h2>

  <ul class="people-list">
  <?php
  $posts = get_field('team_members');

  if( $posts ): ?>
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <li class="team">
          <a href="<?php the_permalink(); ?>">
            <div class="team-pic">
              <?php if( get_field('team_member_image') ): ?>
                <img src="<?php the_field( 'team_member_image' ); ?>" />
              <?php endif; ?>
            </div>
            <h3 class="people-title"><?php the_title(); ?></h3>
          </a>
          <p class="role"><?php the_field( 'team_member_role' ); ?></p>
        </li>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>

    <hr class="separate">
  </ul>
</div>
