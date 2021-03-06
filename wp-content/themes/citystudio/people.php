<?php
/**
* Template Name: People
*/
get_header();
?>

<div id="primary" class="content-area single-people">
	<main id="main" class="site-main" role="main">
      <div class="people-archive container">

        <header class="contact-header citystudio-banner">
        	<div class="banner-inner">
						<h2 class="page-titles"><?php the_title(); ?></h2>
          </div>
        </header>

	      <?php get_template_part( 'template-parts/page-people/people', 'team' ); ?>

	      <?php get_template_part( 'template-parts/page-people/people', 'leadership' ); ?>

	      <?php get_template_part( 'template-parts/page-people/people', 'operations' ); ?>

	      <?php get_template_part( 'template-parts/page-people/people', 'founders' ); ?>

      </div><!-- .people-archive -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
