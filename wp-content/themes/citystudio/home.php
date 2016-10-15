<?php
/**
 * Template Name: Blog
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- "info main top section -->
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
      <header class="title-banner blog-banner" style="background-image:  linear-gradient(to right, rgba(2,119,167,0.7) 0%,rgba(203,173,201,0.7) 100%), url( '<?php echo $thumb['0'];?> ' ); ">
				<div class="title-container">
	        <h1>CityStudio Blog</h1>
          <h4><span>Keep your finger on the pulse.</span> CityStudio news, upcoming opportunities to get involved and find out what we are up to.</h4>
				</div>
      </header>
      <div class="blog-content-container">
        <div class="blog-sidebar">
          <div class="sidebar-item">
						<?php wp_list_categories(); ?>
          </div>
          <div class="sidebar-item">
            <h4>Social Media</h4>
						<p>
							<a href="https://www.facebook.com/CityStudioVancouver/">FACEBOOK</a>
						</p>
						<p>
							<a href="https://twitter.com/CityStudioVan?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">TWITTER</a>
						</p>
						<p>
							<a href="https://www.instagram.com/citystudiovan/?hl=en">INSTAGRAM</a>
						</p>
          </div>
          <div class="sidebar-item">
            <h4>Newsboard</h4>
						<p>
							Check back soon :)...
						</p>
          </div>
        </div>

        <div class="blog-archive-feed">
					<?php
					  $args = array(
					  'post_type' => 'post',
					);
					$citystudio_blog = new WP_Query( $args ); ?>

					<?php if (   $citystudio_blog->have_posts() ) : ?>

					<?php /* Start the Loop */ ?>


					  <?php while ( $citystudio_blog->have_posts() ) : $citystudio_blog->the_post(); ?>
						<?php $blogfeatureimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
							<a href= '<?php echo get_permalink( $post->ID ); ?>'>
							<li class="blog-featured-image" style="background: url('<?php echo $blogfeatureimage['0'];?>') no-repeat center;
																										 background-size: cover;">
								<div class="blog-credits">
									<div class="date"><?php echo get_the_date('F j, Y'); ?></div>
									<h2>
										<?php the_title(); ?>
									</h2>
									<p><?php the_field('post_excerpt'); ?></p>
									<div class="category">
										<!-- <?php the_category(', '); ?> -->
									</div>
								</div>
							</li>
							</a>
					      <?php endwhile; ?>
					<?php else : ?>

					<?php endif; ?>


      </div> <!-- end blog content container -->

    </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>
