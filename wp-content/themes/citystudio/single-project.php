<?php
/**
 * Template Name: Single Project Post Type
 */
 get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>

  			<?php get_template_part( 'template-parts/project', 'sum' ); ?>

        <?php get_template_part( 'template-parts/project', 'credits' ); ?>

        <?php get_template_part( 'template-parts/project', 'details' ); ?>

      </article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
