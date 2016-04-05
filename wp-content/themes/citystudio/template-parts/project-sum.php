<?php
/**
 * Template part for project summary
 *
 * @package RED_Starter_Theme
 */
?>

	<!-- The Header will be the gallery/banner image-->
	<?php $background = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>

	<header class="entry-header" style="background: url('<?php echo $background; ?>') no-repeat; ">
	</header><!-- .entry-header -->

	<div class="content-wrapper">
		<div class="section-header">
			<span>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<h2 class="proj-subtitle"><?php echo CFS()->get( 'subtitle' ); ?></h2>
		</span>
		</div>
		<span class="	excerpt"><?php echo CFS()->get( 'excerpt' ); ?></span>
	</div>

		<!-- <span class="proj-subtitle"><?php echo CFS()->get( 'subtitle' ); ?></span> -->
