<?php
/**
* Template Page for People
*/
get_header();
?>
<div id="primary" class="content-area single-people">
	<main id="main" class="site-main" role="main">
      <div class="people-archive container">

        <header class="citystudio-banner people-margin">
            <h2 class="page-titles">People</h2>
        </header>

	      <?php get_template_part( 'template-parts/page-people/people', 'team' ); ?>
					<hr class="separate">
	      <?php get_template_part( 'template-parts/page-people/people', 'leadership' ); ?>
					<hr class="separate">
	      <?php get_template_part( 'template-parts/page-people/people', 'operations' ); ?>
					<hr class="separate">
	      <?php get_template_part( 'template-parts/page-people/people', 'founders' ); ?>

      </div><!-- .people-archive -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
