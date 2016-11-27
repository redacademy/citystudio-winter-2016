<div class="team-container">


  <h2 class="section-titles">Founder's Circle</h2>

  <ul class="people-list">
    <?php

    $posts = get_field('founders_circle');

    if( $posts ): ?>
        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>

          <li class="founders">
                  <h3 class="people-title"><?php the_field( 'founder_member_name' ); ?></h3>
                  <p class="role"><?php the_field( 'founder_member_position' ); ?></p>
          </li>

    <?php endforeach; ?>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>

  </ul>
</div>
