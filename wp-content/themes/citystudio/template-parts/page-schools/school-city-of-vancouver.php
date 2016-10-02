
<?php
  $args = array(
  'post_type' => 'project',
  'order'   => 'ASC',
  'tax_query' => array(
    array(
      'taxonomy' => 'partners',
      'field'    => 'slug',
      'terms'    => 'city-of-vancouver'
    ),
  ),
);
$school_vancouver = new WP_Query( $args ); ?>

<?php if ( $school_vancouver->have_posts() ) : ?>

<?php /* Start the Loop */ ?>

    <ul class="partner-projects-gallery">

  <?php while ( $school_vancouver->have_posts() ) : $school_vancouver->the_post(); ?>

    <a href="<?php echo esc_url( get_permalink() ); ?>" >
    <li style=
      "background: url('<?php the_field('banner_image'); ?>') no-repeat center;
       background-size: cover;
       box-shadow: 0 4px 12px 0 rgba(0,0,0,.2);">

       <div class="tag-description">
         <?php the_title( '<h2 class="tag-description-title">', '</h2>'); ?>
       </div>
    </li>
    </a>

      <?php endwhile; ?>
  </ul>

<?php else : ?>

<?php endif; wp_reset_postdata(); ?>
