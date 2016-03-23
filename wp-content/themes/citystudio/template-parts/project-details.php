<?php
/**
 * Template part for project details
 *
 * @package RED_Starter_Theme
 */

?>
<div class="section-credits content-wrapper">
	<div class="col-one">
		<h3>Description:</h3><span class="proj-description"><?php echo CFS()->get( 'full_description' ); ?></span>
	</div>

	<div class="col-two">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<h3>Scalability:</h3><span class="proj-scalability"><?php echo CFS()->get( 'scalability' ); ?></span>
	</div>

	<div class="full-width-col">
		<h3>Stewardship:</h3><span class="proj-	stewardship"><?php echo CFS()->get( 'stewardship' ); ?></span>

		<div class="tags-wrapper">
			<h3>Tags:</div>
		</div>
	</div>
</div>
