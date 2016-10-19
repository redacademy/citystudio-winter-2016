<?php
/**
 * Template part for displaying single tag taxonomies.
 *
 * @package RED_Starter_Theme
 */

?>

	<div class="tag-archives">

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'medium' ); ?>
		<?php endif; ?>

	</div><!-- .menu-list-items -->
