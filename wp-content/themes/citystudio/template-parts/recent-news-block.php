<div class="recent-posts-block">
  <h1 class="homepage-titles extra-margin">Recent News</h1>
  <ul class="recent-posts-list">
  <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>

  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
  <a href="<?php the_permalink() ?>">
  <li> <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('thumb'); ?>
    <?php endif; ?>
    <div class="title-div">
        <p><?php the_title(); ?></p>
    </div>

  </li>
  </a>

<?php endwhile;wp_reset_postdata();?>
  </ul>
</div>
