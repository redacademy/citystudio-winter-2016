<?php
/**
* Template Name: People
*/
get_header();
?>

<div id="primary" class="content-area single-projects">
	<main id="main" class="site-main" role="main">

	<?php while (have_posts()) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  
  </article><!-- #post-## -->

	<?php endwhile; // End of the loop. ?>
</div><!-- end single proj view container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
