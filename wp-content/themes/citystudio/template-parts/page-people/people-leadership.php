<div class="team-container">
  <h2 class="section-titles">Leadership Council</h2>


    <ul class="people-list">

    <?php

    $posts = get_field('leadership_council');

    if( $posts ): ?>
        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>

      <li class="leaders">
        <h3 class="people-title"><?php the_field( 'leadership_council_member_name' ); ?></h3>
        <p class="role"><?php the_field( 'leadership_council_member_role' ); ?></p>
      </li>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
      <hr class="separate">
    </ul>
</div>
