<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="searchpage">
			<br>

					<?php get_search_form(); ?>

					<div class="search-list">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<a href="<?php echo the_permalink($project);?>">
		      <?php if (has_post_thumbnail()) : ?>
			      <?php the_post_thumbnail('medium', 'style=width:360px;height:280px;margin:.5rem;'); ?>
			    <?php endif; ?>
				</a>

			<?php endwhile; ?>

		<?php else : ?>

		<?php endif; ?>

			</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
