<?php
/**
 * Template Name: The Product-Type Taxonomy
 */
 get_header(); ?>

<div id="primary" class="content-area tag-archives">
  <main id="main" class="site-main" role="main">

  <?php if ( have_posts() ) : ?>

    <header class="page-header archive-header">
      <?php
        the_archive_title( '<h1 class="page-title">', '</h1>' );
        the_archive_description( '<div class="taxonomy-description">', '</div>' );
      ?>
    </header><!-- .page-header -->

      <div class="section-archive content-wrapper">
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <ul>
          <?php $background = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>

          <li style="background: url('<?php echo $background; ?>') no-repeat; ">
          </li>
        </ul>
        <?php endwhile; ?>

        <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>
      </div>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
