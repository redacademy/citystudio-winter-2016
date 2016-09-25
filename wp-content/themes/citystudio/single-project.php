<?php
/**
* Template Name: Single Project.
*/
get_header();
?>

<div id="primary" class="content-area single-projects">
	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>

		  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php get_template_part('template-parts/page-project-single/hero-section') ?>

				<?php get_template_part('template-parts/page-project-single/credits') ?>

				<?php get_template_part('template-parts/page-project-single/details') ?>

				<?php get_template_part('template-parts/page-project-single/back-button') ?>

		  </article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
