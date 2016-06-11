<?php
/**
 * Template part for displaying single tag taxonomies.
 *
 * @package RED_Starter_Theme
 */

?>

	<div class="menu-list-items">

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'medium' ); ?>
		<?php endif; ?>

    <div class="list-item-info">
  		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
      <?php the_content(); ?>

    </div>
	</div><!-- .menu-list-items -->
