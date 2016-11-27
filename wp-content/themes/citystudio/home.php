<?php
/**
 * Template Name: Blog
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- "info main top section -->
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($page->slug), 'full' );?>
      <header class="title-banner blog-banner" style="background-image: url( <?php echo $thumb['0'];?> ); ">
				<div class="gradient-overlay">
					<div class="title-container">
		        <h1><?php the_field('blog_title', get_option('page_for_posts')); ?></h1>
	          <h4><?php the_field('blog_description', get_option('page_for_posts')); ?></h4>
					</div>
				</div>
      </header>
      <div class="blog-content-container">

				<?php get_template_part('template-parts/component-sidebar') ?>

        <div class="blog-archive-feed">
					<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					  $args = array(
					  'post_type' => 'post',
						'posts_per_page' => 5,
 						'paged' => $paged,
						'orderby' => 'date',
						'page_slug' => 'blog',
 						'post__not_in' => array('project','people','Partners')
					);

					$citystudio_blog = new WP_Query( $args ); ?>

					<?php if (   $citystudio_blog->have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
				  <?php while ( $citystudio_blog->have_posts() ) : $citystudio_blog->the_post(); ?>

						<?php $blogfeatureimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
							<a href= '<?php echo get_permalink( $post->ID ); ?>'>
							<div class="blog-featured-image" style="background: url('<?php echo $blogfeatureimage['0'];?>') no-repeat center;
																										 background-size: cover;">
								<div class="blog-credits">
									<div class="date"><?php echo get_the_date('F j, Y'); ?></div>
									<h2>
										<?php the_title(); ?>
									</h2>
									<p><?php the_field('post_excerpt'); ?></p>
									<div class="category-links">
										<?php the_category(', '); ?>
									</div>
								</div>
							</div>
							</a>
					      <?php endwhile; ?>

					<div class="blog-pagination">
						<div class="newer-posts-link">
							<?php previous_posts_link( '<< Newer posts' ); ?>
						</div>
						<div class="older-posts-link">
							<?php next_posts_link( 'Older posts >>' ); ?>
						</div>
	  			</div>

					<?php wp_reset_postdata(); ?>
					<?php else:  ?>
					  <p class="end-of-blog-msg"><?php _e( 'You have reached the end of the blog! Thank you for your interest in CityStudio Vancouver. For more updates, follow us on Twitter, Facebook, and Instagram!' ); ?></p>

					<?php endif; ?>


      </div> <!-- end blog content container -->

    </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>
