<?php
/**
 * Template Name: Single Project Post Type
 */
get_header();
 ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
          <ul id="slider2">
            <li>
              <?php get_template_part( 'template-parts/project', 'sum' ); ?>
            </li>

            <li>
              <?php get_template_part( 'template-parts/project', 'credits' ); ?>
            </li>

            <li>
              <?php get_template_part( 'template-parts/project', 'details' ); ?>
            </li>
          </ul>

      </article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
