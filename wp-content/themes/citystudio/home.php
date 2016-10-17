<?php
/**
 * Template Name: Blog
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- "info main top section -->
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
      <header class="title-banner blog-banner" style="background-image: url( <?php echo $thumb['0'];?> ); ">
				<div class="gradient-overlay">
					<div class="title-container">
		        <h1>CityStudio Blog</h1>
	          <h4><span>Keep your finger on the pulse.</span> CityStudio news, upcoming opportunities to get involved and find out what we are up to.</h4>
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
						<?php echo paginate_links( $args ); ?>
	  			</div>

					<?php wp_reset_postdata(); ?>
					<?php else:  ?>
					  <p><?php _e( 'Sorry, no posts matched your criteria. You have reached the end of the blog! For more updates, check out our Twitter, Facebook, and other social media feeds!' ); ?></p>

					<?php endif; ?>


      </div> <!-- end blog content container -->

    </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>
