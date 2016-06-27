<?php
/**
* Template Name: Archive/ Search Page.
 */
get_header(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="searchpage">
				<header class="search-archive-header">
					<h1>Project Archive</h1>
					<div class="searchform-container">
						<?php get_search_form(); ?>
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
						<li style=
		            "background: url('<?php the_field('banner_image'); ?>') no-repeat center;
		             background-size: cover;
								">
						<a href="<?php echo get_the_permalink();?>">
						</a>
						</li>
					<?php endwhile; wp_reset_query(); ?>
					</ul>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
