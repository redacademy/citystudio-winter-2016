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
						<?php
							$page_id = get_the_title();


							echo $page_id;

							if ( is_page() && ! is_archive() ) {
								$page_title = get_the_title( $page_id->ID ) ?>
								<!-- <h1 class="hero-title center col"><?php // echo $page_title; ?></h1> -->
								<h2 class="page-titles"><?php echo $page_title; ?></h2>
							<?php
								} else {

								}
						?>
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
