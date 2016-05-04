<?php
/**
* Template Name: Single Project Post Type.
*/
get_header();
?>

<div id="primary" class="content-area single-projects">
	<main id="main" class="site-main" role="main">

	<?php while (have_posts()) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php $background = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>

    <div class="main-carousel">

      <div class="carousel-cell">
        <header class="entry-header" style="background: url('<?php echo $background; ?>') no-repeat; "></header>
      </div>
      <div class="carousel-cell">

      </div>
      <div class="carousel-cell">

      </div>

    </div><!-- end main-carousel -->

    <!-- Section Project Summary -->
    <div class="content-wrapper">
      <div class="section-header">
        <span>
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <h2 class="proj-subtitle"><?php echo CFS()->get( 'subtitle' ); ?></h2>
      </span>
      </div>
      <span class="	excerpt"><?php echo CFS()->get( 'excerpt' ); ?></span>
    </div>

    <!-- Section Project Credits -->
    <div class="section-credits content-wrapper">

      <div class="page-title">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      </div>

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

        <span class="proj-staff proj-detail-wrap">
          <h3>Staff &amp; Partners:</h3>
          <?php echo CFS()->get( 'staff_partners' ); ?>
        </span>

        <span class="proj-subtitle proj-detail-wrap">
          <h3>Student Team:</h3>
          <?php echo CFS()->get( 'student_team' ); ?>
        </span>

      </div> <!-- end .col-one -->

      <div class="col-two">

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

        <span class="proj-subtitle proj-detail-wrap">
          <h3>City Strategy:</h3>
          <?php echo CFS()->get( 'city_strategy' ); ?>
        </span>

        <span class="proj-subtitle proj-detail-wrap">
          <h3>Initiative:</h3>
          <?php echo CFS()->get( 'initiative' ); ?>
        </span>

        <span class="proj-subtitle proj-detail-wrap">
          <h3>Neighbourhood:</h3>
          <?php  $terms = get_the_terms( $post, 'neighbourhoods' );
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
    </div>

    <!-- Project Details -->
    <div class="section-credits content-wrapper">

    	<div class="page-title">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      </div>

    	<div class="col-one">
    		<h3>Description:</h3><span class="proj-description"><?php echo CFS()->get( 'full_description' ); ?></span>
    	</div>

    	<div class="col-two">
    		<?php if ( has_post_thumbnail() ) : ?>
    			<?php the_post_thumbnail( 'large' ); ?>
    		<?php endif; ?>

    		<h3>Scalability:</h3><span class="proj-scalability"><?php echo CFS()->get( 'scalability' ); ?></span>
    	</div>
    </div>

    	<div class="section-credits content-wrapper">
    		<div class="full-width-col">
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
    				      <?php  $terms = get_the_terms( $id, 'neighbourhoods' );
    				      if ( !empty($terms)) : ?>

    				        <?php foreach ( $terms as $term )  :

    							$name = $term->name;
    				       		echo '<p class="tag-links">' . '<a class="tag-url" href="' . get_term_link($term->slug, 'neighbourhoods') . '">' . $name . '</a>' . '</p>';
    				       		?>

    				      <?php endforeach; ?>
    				      <?php endif; ?>
    			      </div>

    			</div>
    		</div>
    	</div>


  </article><!-- #post-## -->

	<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
