<?php
/**
 * Template part for project summary
 *
 * @package RED_Starter_Theme
 */

?>

	<!-- The Header will be the gallery/banner image-->
	<?php $background = wp_get_attachment_url( get_post_thumbnail_id( $page->ID[0] )); ?>

	<header class="entry-header" style="background: url('<?php echo $background; ?>') no-repeat; ">
	</header><!-- .entry-header -->

	<div class="content-wrapper">
		<div class="section-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<span class="proj-subtitle"><?php echo CFS()->get( 'subtitle' ); ?></span>
		</div>
		<span class="	excerpt"><?php echo CFS()->get( 'excerpt' ); ?></span>
	</div>
