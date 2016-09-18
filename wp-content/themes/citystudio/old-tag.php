<?php
/**
 * Template Name: Tags
 */
 get_header(); ?>

<div id="primary" class="content-area tag-archives">
  <main id="main" class="site-main" role="main">



  <header class="page-header archive-header">
      <?php
        echo single_tag_title('<h2><span>Tag:</span> ', '</h2>' );
      ?>
    </header><!-- .page-header -->

<?php
  $args = array(
  'post_type' => 'project',
  'order'   => 'ASC',

);
$tags = new WP_Query( $args ); ?>

<?php if ( $tags->have_posts() ) : ?>

<?php /* Start the Loop */ ?>

  <ul class="partner-projects-gallery">

  <?php while ( $tags->have_posts() ) : $tags->the_post(); ?>



    <a href="<?php echo esc_url( get_permalink() ); ?>" >
    <li style=
      "background: url('<?php the_field('banner_image'); ?>') no-repeat center;
       background-size: cover;
       box-shadow: 0 4px 12px 0 rgba(0,0,0,.2);">

       <div class="tag-description">
         <?php the_title( '<h2 class="tag-description-title">', '</h2>'); ?>
         <div class="subtitle"><p><?php the_field( 'excerpt' ); ?></p></div>
       </div>
    </li>
    </a>

      <?php endwhile; ?>
  </ul>

<?php else : ?>

<?php endif; wp_reset_postdata(); ?>
<?php get_footer(); ?>
