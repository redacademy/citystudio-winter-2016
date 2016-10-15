<?php
/**
* Single Post Template: Single Blog Post
*/
get_header();
?>

<div id="primary" class="content-area single-projects">
	<main id="main" class="site-main" role="main">

	<?php $featimg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>


			<header class="blog-post-banner" style="background: url('<?php echo $featimg['0'];?>') no-repeat center center; background-size: cover;">
				<div class="blue-overlay-3">
					<h2 class="blog-page-titles"><?php the_title(); ?></h2>
					<p class="post_excerpt"><?php the_field('post_excerpt'); ?></p>
				</div>
			</header>

			<?php while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="inner-column">
						<div class="single-blog-hero">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('large'); ?>
							<?php endif; ?>
						</div>

						<div class="blog-content">
							<p class="date-single"><?php echo get_the_date('F j, Y'); ?></p>

							<p><?php the_content(); ?></p>

							<hr class="separate">

							<div class="blog-nav">
								<?php previous_post_link(); ?>
								<?php next_post_link(); ?>
							</div>
						</div>
					</div>
				</article>

				<div class="single-recent-news recent-news-block">
					<div class="inner-column-wide">
						<?php get_template_part('template-parts/components/recent-posts'); ?>
					</div>
				</div>
			<?php endwhile;?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
