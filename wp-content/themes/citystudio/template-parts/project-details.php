<?php
/**
 * Template part for project details
 *
 * @package RED_Starter_Theme
 */

//google custom taxonomy loop // not going to be CFS anymore // look at product type loop in red bread
?>
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
 				    
 				    <?php  $terms = get_the_terms( $post, 'partners' );

				      if ( !empty($terms)) : ?>

				        <?php foreach ( $terms as $term )  :
				        	$name = $term->name; 
				       		echo '<p class="tag-links">' . '<a class="tag-url" href="' . get_term_link($term->slug, 'partners') . '">' . $name . '</a>' . '</p>';
					     ?>



					      <?php endforeach; ?>
					    <?php endif; ?>
					      <?php  $terms = get_the_terms( $post, 'season' );
				      if ( !empty($terms)) : ?>

				        <?php foreach ( $terms as $term )  : 
							$name = $term->name; 
				       		echo '<p class="tag-links">' . '<a class="tag-url" href="' . get_term_link($term->slug, 'season') . '">' . $name . '</a>' . '</p>'; 

				            ?>

				      <?php endforeach; ?>
				      <?php endif; ?>
				      <?php  $terms = get_the_terms( $post, 'year' );
				      if ( !empty($terms)) : ?>

				        <?php foreach ( $terms as $term )  : 
				        	$name = $term->name; 
				       		echo '<p class="tag-links">' . '<a class="tag-url" href="' . get_term_link($term->slug, 'year') . '">' . $name . '</a>' . '</p>'; 
							?>

				      <?php endforeach; ?>
				      <?php endif; ?>
				      <?php  $terms = get_the_terms( $post, 'neighbourhoods' );
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
