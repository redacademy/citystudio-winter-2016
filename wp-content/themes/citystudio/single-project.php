<?php
/**
* Template Name: Single Project Page Template
*/
get_header();
?>

<div id="primary" class="content-area single-projects">
	<main id="main" class="site-main" role="main">

	<?php while (have_posts()) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		      <div class="page-title">
		        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</div>
		<?php
		    global $post;
		    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
		?>
				<div class="project-hero"
						 style="background: url(<?php echo $src[0]; ?> ) no-repeat center center;
										background-size: cover;
										display: block;
									  height: 70vh;">

				</div>



	<div class="section-credits content-wrapper">
      <div class="excerpt"><?php echo CFS()->get( 'excerpt' ); ?></div>
    <!-- Section Project Credits -->
      <div class="col-one">
        <span class="proj-partners proj-detail-wrap">
          <h3>School &amp; Course:</h3>

        <?php  $terms = get_the_terms( $post, 'partners' );
          if ( !empty($terms)) : ?>
            <?php foreach ( $terms as $term )  : ?>
                <?php echo $term->name; ?>
          <?php endforeach; ?>
          <?php endif; ?>
        </span>
        <span class="proj-faculty proj-detail-wrap">
          <h3>Faculty Member:</h3>
          <?php echo CFS()->get( 'faculty_member' ); ?>
        </span>
				<span class="proj-date proj-detail-wrap">
					<h3>Date Completed:</h3>
					<?php  $terms = get_the_terms( $post, 'season' );
						if ( !empty($terms)) : ?>
							<?php foreach ( $terms as $term )  : ?>
									<?php echo $term->name; ?>
						<?php endforeach; ?>
						<?php endif; ?>
					<?php  $terms = get_the_terms( $post, 'year' );
						if ( !empty($terms)) : ?>
							<?php foreach ( $terms as $term )  : ?>
									<?php echo $term->name; ?>
						<?php endforeach; ?>
						<?php endif; ?>
				</span>
        <span class="proj-staff proj-detail-wrap">
          <h3>Staff &amp; Partners:</h3>
          <?php echo CFS()->get( 'staff_partners' ); ?>
        </span>
      </div> <!-- end .col-one -->

      <div class="col-two">
				<span class="proj-subtitle proj-detail-wrap">
          <h3>Student Team:</h3>
          <?php echo CFS()->get( 'student_team' ); ?>
        </span>
        <span class="proj-subtitle proj-detail-wrap">
          <h3>City Strategy:</h3>
          <?php echo CFS()->get( 'city_strategy' ); ?>
        </span>
        <span class="proj-subtitle proj-detail-wrap">
          <h3>Initiative:</h3>
          <?php echo CFS()->get( 'initiative' ); ?>
        </span>
        <span class="proj-subtitle proj-detail-wrap">
          <h3>Themes:</h3>
          <?php  $terms = get_the_terms( $post, 'themes' );
            if ( !empty($terms)) : ?>
              <?php foreach ( $terms as $term )  : ?>
                  <?php echo $term->name; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </span>
        <span class="proj-subtitle proj-detail-wrap">
          <h3>Media:</h3>
          <?php echo CFS()->get( 'media' ); ?>
        </span>
      </div> <!-- end .col-two -->
    </div> <!-- end section-credits content-wrapper -->

    <!-- Project Details -->
    <div class="section-credits content-wrapper">
    	<div class="full-width-col">
	    		<h3>Description:</h3>
						<span class="proj-description"><?php echo CFS()->get( 'full_description' ); ?></span>
			<div class="scalability-wrap">
				<h3>Scalability:</h3>
					<span class="proj-scalability"><?php echo CFS()->get( 'scalability' ); ?></span>
			</div>
	    		<h3>Stewardship:</h3>
    				<span class="proj-stewardship"><?php echo CFS()->get( 'stewardship' ); ?></span>
    			<div class="tags-wrapper">
    				<h3>Tags:</h3>
    			<div class="tags">
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
    				      <?php  $terms = get_the_terms( $id, 'year' );
    				      if ( !empty($terms)) : ?>
    				        <?php foreach ( $terms as $term )  :
    				        	$name = $term->name;
    				       		echo '<p class="tag-links">' . '<a class="tag-url" href="' . get_term_link($term->slug, 'year') . '">' . $name . '</a>' . '</p>';
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
