<?php
/**
 * Template Name: Search Page
 *
 *@package RED_Starter_Theme
 */
get_header(); ?>
<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="searchpage">

			<div class="search-container">
				<?php get_search_form(); ?>


			<div class="search-list">
				<?php query_posts(array('post_type' => 'project', 'posts_per_page' => 10));
    	 if(have_posts()) : while(have_posts()) : the_post(); ?>
    	<?php $background = wp_get_attachment_url( get_post_thumbnail_id( $post->get_the_ID[0]));?>
			<a class="search-anchor" href="<?php echo esc_url( get_permalink() ); ?>" >
			<div class="search-item" style="background: url('<?php echo $background; ?>') no-repeat; "></li>
    	</a>
		</div>

       <?php endwhile;

		 endif; wp_reset_query(); ?>

	 	</div>
		</div>
	</main><!-- #main -->
</section><!-- #primary -->
<?php get_footer(); ?>
