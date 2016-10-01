<?php
/**
* Template Name:Search Page
 */
//page id = 872
get_header(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="searchpage">
				<header class="search-archive-header">
					<div class="searchform-title">
						<h1>Project Archive</h1>
					</div>
					<div class="searchform-container">
						<?php dynamic_sidebar( 'searchform' ); ?>
					</div>
				</header>
				<div class="archive-blurb">
					<p>
						<?php the_field('archive_blurb') ?>
					</p>
				</div>
				<div class="search-list-container">
					<ul class="search-list">
						<?php $loop = new WP_Query(array('post_type' => 'project', 'posts_per_page' => 12)); ?>
						<?php while ($loop->have_posts()) : $loop->the_post(); ?>
						<a href="<?php echo get_the_permalink();?>">
							<li style=
			            "background: url('<?php the_field('banner_image'); ?>') no-repeat center;
			             background-size: cover; height: 100%; width: 100%;
									">
								<div class="tag-description">
							 	 <?php the_title( '<h2 class="tag-description-title">', '</h2>'); ?>
							 	 <div class="tag-subtitle"><p><?php the_field( 'excerpt' ); ?></p></div>
							  </div>
							</li>
						</a>
					<?php endwhile; wp_reset_query(); ?>
					</ul>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
