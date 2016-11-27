<?php
/**
 * Template Name: Partner Page.
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php get_template_part('template-parts/page-schools/school-header'); ?>

      <?php get_template_part('template-parts/page-schools/school-description'); ?>

			<!-- start past projects display -->
    	<div class="projects-container full-width">
				<div class="title-block-container">
	      	<div class="title-block">
	        	<h2>Past Projects By: <span><?php the_field('school_abrev'); ?></span></h2>
	      	</div>
			</div>

			<!-- loop for displaying projects -->
			<div class="section-archive-partners">
				<?php global $post;
          $school = $post_slug = $post->post_name;

						if (is_single($school)) {
              get_template_part('template-parts/page-schools/school', $school);
                } else {
                    //everything else
                }
          	?>

		</div><!-- .section-archive -->
	<hr class="separate-white">

<!-- media links -->
				<h3 class ="media-links-title"><span><?php echo the_field('school_abrev'); ?></span> in the media, publications, and press...</h3>
					<div class="media-links-container">
						<?php
                            // check if the repeater field has rows of data
                            if (have_rows('media_links'));
                            // loop through the rows of data
                            while (have_rows('media_links')) : the_row(); ?>
							<p class="media-links">

								<a target="_blank" href="<?php the_sub_field('media_link') ?>"><?php the_sub_field('media_text') ?> </a>
							</p>
							<?php endwhile; ?>
							<div class="no-media">
									<?php the_field('no_media_option'); ?>
							</div>
				 </div> <!--end media links container -->

  	</div><!-- end projects-container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
