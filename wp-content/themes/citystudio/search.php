<?php
/**
* Template Name: Project Archive Search Page
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

					</p>
				</div>

				<div class="search-list">
					<?php if ( have_posts() ) : ?>
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

					<a href="<?php echo get_the_permalink();?>">
			      <?php if (has_post_thumbnail()) : ?>
				      <?php the_post_thumbnail('medium', 'style=width:360px;height:280px;margin: 0 auto;margin-bottom:1.5rem;'); ?>
				    <?php endif; ?>
					</a>

				<?php endwhile; ?>

				<?php endif; ?>
			
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
