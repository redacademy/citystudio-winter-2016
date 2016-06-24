<?php
/**
 * Template Name: Taxonomy Archives
 */
 get_header(); ?>

<div id="primary" class="content-area tag-archives">
  <main id="main" class="site-main" role="main">

    <header class="page-header archive-header">

      <h2><span>Tag:</span> <?php single_tag_title(); ?></h2>

    </header><!-- .page-header -->

  <?php if ( have_posts() ) : ?>

      <div class="section-archive">
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <ul>
          <li>
            <a href="<?php echo esc_url( get_permalink() ); ?>"><li style="background: url('<?php the_field('project_featured_image'); ?>') no-repeat; ">
          </li></a>
        </ul>
        <?php endwhile; ?>

        <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>
      </div>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
