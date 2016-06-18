<?php
/**
* Template Page for People
*/
get_header();
?>

<div id="primary" class="content-area single-projects">
	<main id="main" class="site-main" role="main">
    <div class="">
      <div class="people-archive">

        <header class="citystudio-banner">
          <div class="banner-inner">
            <h2 class="page-titles">People</h2>
          </div>
        </header>

      <?php get_template_part( 'template-parts/people', 'team' ); ?>

      <?php get_template_part( 'template-parts/people', 'leadership' ); ?>

      <?php get_template_part( 'template-parts/people', 'operations' ); ?>

      <?php get_template_part( 'template-parts/people', 'founders' ); ?>


      </div><!-- .people-archive -->
    </div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
