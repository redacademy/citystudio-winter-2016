<?php
/**
 * Template part for project summary
 *
 * @package RED_Starter_Theme
 */

?>

	<!-- The Header will be the gallery/banner image-->
	<header class="entry-header">

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'full' ); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="content-wrapper">
		<div class="section-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<span class="proj-subtitle"><?php echo CFS()->get( 'subtitle' ); ?></span>
		</div>
		<span class="	excerpt"><?php echo CFS()->get( 'excerpt' ); ?></span>
	</div>
