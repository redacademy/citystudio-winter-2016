<?php
/**
 * Template Name: The Project Tags Taxonomy
 */
 get_header(); ?>


<div id="primary" class="content-area">
  <main id="main" class="site-main product-type-page" role="main">

    <div class="tag-archive content-wrapper">

      <header class="page-header single-product-category">
        <?php
          the_archive_title( '<h2 class="page-title">', '</h2>' );
        ?>
      </header><!-- .page-header -->

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php if ( have_posts() ) : ?>

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

      </article><!-- #post-## -->

    </div> <!-- end content-wrapper div -->

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
