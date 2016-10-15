<div class="home-recent-news recent-news-block">
  <div class="inner-column-wide">
    <h2 class="homepage-titles">Recent News</h2>

    <ul class="recent-news-list">
      <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

      <a href="<?php the_permalink() ?>">
        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

        <li class="recent-post-image" style="background-image: url( '<?php echo $thumb['0'];?> ' );">
          <div class="title-div">
            <p><?php the_title(); ?></p>
          </div>
        </li>
      </a>
      <?php endwhile;wp_reset_postdata();?>
    </ul>
  </div>
</div>
