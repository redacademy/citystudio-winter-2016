<?php
/**
* Template Name: Single Person
*/
get_header();
?>

<div id="primary" class="content-area single-projects">
	<main id="main" class="site-main" role="main">

	<?php while (have_posts()) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- Section Project Credits -->
    <div class="section-credits content-wrapper">

      <div class="page-title">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>

      <div class="excerpt"><?php echo CFS()->get( 'excerpt' ); ?></div>

      <div class="col-one">

      </div> <!-- end .col-one -->

      <div class="col-two">


      </div> <!-- end .col-two -->
    </div> <!-- end section-credits content-wrapper -->




  </article><!-- #post-## -->

	<?php endwhile; // End of the loop. ?>
</div><!-- end single proj view container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
