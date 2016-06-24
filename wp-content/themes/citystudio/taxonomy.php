<?php
/**
 * Template Name: Taxonomy Archives
 */
 get_header(); ?>

<div id="primary" class="content-area tag-archives">
  <main id="main" class="site-main" role="main">

  <?php if ( have_posts() ) : ?>

    <header class="page-header archive-header">
      <?php
            echo single_term_title('<h2><span>Tag:</span> ', '</h2>' );
      ?>
    </header><!-- .page-header -->

      <div class="section-archive">
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <ul>
          <a href="<?php echo esc_url( get_permalink() ); ?>">
            <li style="background: url('<?php the_field('banner_image'); ?>') no-repeat center center;
                      background-size: cover;
                      background-size: cover;
                      display: block;
                      "></li>
          </a>
        </ul>
        <?php endwhile; ?>

        <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>
      </div>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
