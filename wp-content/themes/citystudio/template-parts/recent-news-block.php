<div class="recent-news-block">
  <h2>Recent News</h2>
  <ul class="recent-news-list">
  <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>

  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
  <a href="<?php the_permalink() ?>">
  <li> <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('small'); ?>
    <?php endif; ?>
    <div class="title-div">
        <p><?php the_title(); ?></p>
    </div>

  </li>
  </a>

<?php endwhile;wp_reset_postdata();?>
  </ul>
</div>
