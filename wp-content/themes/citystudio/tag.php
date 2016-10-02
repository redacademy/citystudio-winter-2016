<?php
/**
 * The main template file.
 *
 * Template Name: Tag
 */

get_header(); ?>

  <div id="primary" class="content-area tag-archives">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

    <header class="page-header archive-header">
      <?php echo single_term_title('<h2><span>Tag:</span> ', '</h2>' ); ?>
    </header><!-- .page-header -->

        <div class="section-archives">

        <ul class="tag-gallery">
        <?php while ( have_posts() ) : the_post(); ?>

            <a href="<?php echo esc_url( get_permalink() ); ?>">
              <li style="background: url('<?php the_field('banner_image'); ?>') no-repeat center center;
                        background-size: cover;
                        background-size: cover;
                        display: block;
                        border-radius: 5px;
                        ">
                <div class="tag-description">
                  <?php the_title( '<h2 class="tag-description-title">', '</h2>'); ?>

                </div>
              </li>
            </a>

      <?php endwhile; ?>

    <?php else : ?>
        </ul><!-- .tag-gallery -->

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

     </div><!-- .section-archives -->

  </main><!-- #main -->
</div><!-- #primary -->



<?php get_footer(); ?>
