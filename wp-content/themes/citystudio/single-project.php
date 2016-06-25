<?php
/**
* Template Name: Single Project
*/
get_header();
?>

<div id="primary" class="content-area single-projects">
	<main id="main" class="site-main" role="main">

	<?php while (have_posts()) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- title/herobanner -->

		<header class="citystudio-banner">
			<div class="banner-inner">
				<?php the_title( '<h1 class="page-titles">', '</h1>' ); ?>
			</div>
		</header>

			<div class="project-hero"
					 style="background: url('<?php the_field('banner_image'); ?>') no-repeat center center;
									background-size: cover;
									display: block;
	  						  height: 70vh;">
			</div>



<!-- Section Project Credits -->
	<div class="section-credits content-wrapper">
      <div class="excerpt"><?php the_field('excerpt'); ?></div>
      <div class="col-one">
        <span class="proj-partners proj-detail-wrap">
          <h3>School &amp; Course:</h3>
				<p><?php the_field('participating_school'); ?>
				 <?php if( have_rows('course_name') );
							while ( have_rows('course_name') ) : the_row(); ?>
						<?php the_sub_field('course_name') ?>
						<?php endwhile; ?></p>
        </span>
        <span class="proj-faculty proj-detail-wrap">
          <h3>Faculty Member:</h3>
          <p><?php the_field('faculty_members'); ?></p>
        </span>
				<span class="proj-date proj-detail-wrap">
					<h3>Semester Completed:</h3>
					<p><?php the_field('semester_completed'); ?> -
					<?php the_field('year_completed'); ?> </p>
				</span>
				<span class="proj-subtitle proj-detail-wrap">
					<h3>City Strategy &amp; Goal Area: </h3>
					<p><?php the_field('city_strategy'); ?> -
					<?php the_field('goal_area'); ?></p>
				</span>
				<span class="proj-subtitle proj-detail-wrap">
				  <h3>Neighbourhood:</h3>
					<?php the_field('neighbourhood'); ?>
				</span>
      </div> <!-- end .col-one -->

      <div class="col-two">
				<span class="proj-subtitle proj-detail-wrap">
					<h3>Student Team:</h3>
					<p><?php the_field('student_team'); ?></p>
				</span>
				<span class="proj-staff proj-detail-wrap">
          <h3>Staff Contact &amp; Partners:</h3>
          <?php the_field('staff_partners'); ?>
        </span>
<!-- media fields -->
        <span class="proj-subtitle proj-detail-wrap">
					<?php
						$value = get_field( 'activate_media' );
						if( $value ) { ?>
          <h3>Media:</h3>
<!-- linking media -->
					<?php
						if( have_rows('project_media') );
						while ( have_rows('project_media') ) : the_row(); ?>
						<p class="media-links">
							<a href ="<?php the_sub_field('media_link') ?>"><?php the_sub_field('media_title') ?> </a>
						</p>
						<?php endwhile; ?>
<!-- file media upload -->
						<?php
							if( have_rows('project_media_2') );
							while ( have_rows('project_media_2') ) : the_row(); ?>
							<p class="media-links">
								<?php if( get_sub_field('file_upload') ): ?>
									<a href="<?php the_sub_field('file_upload'); ?>" ><?php the_sub_field('file_name'); ?></a>
								<?php endif; ?>
							</p>
							<?php endwhile; ?>
<!-- embed video or image media-->
						<div class="embed-container">
							<?php the_field('embed_video'); ?>
						</div>
						<?php } else {
									echo '';
								}
						?>
        </span>
      </div> <!-- end .col-two -->
    </div> <!-- end section-credits content-wrapper -->

    <!-- Project Details -->
    <div class="section-credits content-wrapper">
    	<div class="full-width-col">
			<div class="scalability-wrap">
	    		<h3>Description:</h3>
						<span class="proj-description"><?php the_field('full_description'); ?></span>
			</div>

			<?php

						$value = get_field( 'activate_scalability' );

						if( $value ) { ?>
			<div class="scalability-wrap">
				<h3><?php the_field('scalability_title'); ?></h3>
					<span class="proj-scalability"><?php the_field('scalability'); ?></span>
			</div>
		<?php } else {
					echo '';
				}
		?>

		<?php

					$value = get_field( 'activate_stewardship' );

					if( $value ) { ?>
			<div class="scalability-wrap">
	    		<h3><?php the_field('stewardship_title'); ?></h3>
    				<span class="proj-stewardship"><?php the_field('stewardship'); ?></span>
			</div>
			<?php } else {
						echo '';
					}
			?>
<!-- image bar -->
<div class="image-bar">
	<?php
	if( have_rows('image_bar') );
	while ( have_rows('image_bar') ) : the_row(); ?>
		<img src ="<?php the_sub_field('additional_image') ?>" />
	<?php endwhile; ?>
</div>
  <div class="tags-wrapper">
		<h3>Tags:</h3>
	<div class="tags">
						<?php the_tags( '<p class="tag-links"><a class="tag-url" href="', '</a><p>'); ?>
    					<?php $id = get_the_id(); ?>
     				    <?php  $terms = get_the_terms	( $id, 'partners' );
    				      if ( !empty($terms)) : ?>
    				        <?php foreach ( $terms as $term )  :
    				        	$name = $term->name;
    				       		echo '<p class="tag-links">' . '<a class="tag-url" href="' . get_term_link($term->slug, 'partners') . '">' . $name . '</a>' . '</p>';
    					     ?>
    					      <?php endforeach; ?>
    					    <?php endif; ?>
    					      <?php  $terms = get_the_terms( $id, 'season' );
    				      if ( !empty($terms)) : ?>
    				        <?php foreach ( $terms as $term )  :
    							$name = $term->name;
    				       		echo '<p class="tag-links">' . '<a class="tag-url" href="' . get_term_link($term->slug, 'season') . '">' . $name . '</a>' . '</p>';
    				            ?>
    				      <?php endforeach; ?>
    				      <?php endif; ?>
    				  
    				      <?php  $terms = get_the_terms( $id, 'themes' );
    				      if ( !empty($terms)) : ?>
    				        <?php foreach ( $terms as $term )  :
    							$name = $term->name;
    				       		echo '<p class="tag-links">' . '<a class="tag-url" href="' . get_term_link($term->slug, 'themes') . '">' . $name . '</a>' . '</p>';
    				       		?>
    				      <?php endforeach; ?>
    				      <?php endif; ?>
    			  </div>

    		</div>
    		</div>
    	</div>


  </article><!-- #post-## -->

	<?php endwhile; // End of the loop. ?>
</div><!-- end single proj view container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
