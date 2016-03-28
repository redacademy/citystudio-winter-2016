<?php
/**
 * Template Name: The Project Tags Taxonomy
 */
 get_header(); ?>


<div id="primary" class="content-area">
  <main id="main" class="site-main product-type-page" role="main">

  <?php if ( have_posts() ) : ?>

    <header class="page-header single-product-category">
      <?php
        the_archive_title( '<h1 class="page-title">', '</h1>' );
      ?>
    </header><!-- .page-header -->

    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <?php
        get_template_part( 'template-parts/archive-type' );
      ?>

    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>

  <?php else : ?>

    <?php get_template_part( 'template-parts/content', 'none' ); ?>

  <?php endif; ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
