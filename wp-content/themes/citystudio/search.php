<?php
/**
* Template Name: Archive/ Search Page
 *
 * @package RED_Starter_Theme
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
						<?php $loop = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 9, ) ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<li>
						<a href="<?php echo get_the_permalink();?>">
				      <?php if (has_post_thumbnail()) : ?>
					      <?php the_post_thumbnail('medium', 'style=width:360px;height:280px;margin: 0 auto 2rem;'); ?>
					    <?php endif; ?>
						</a>
						</li>
					<?php endwhile; wp_reset_query(); ?>
					</ul>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
