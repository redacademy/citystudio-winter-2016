<?php
/**
 * Template Name: Search Page
 *
 *
 */

get_header(); ?>
<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="searchpage">

			<div class="search-container">
				<?php get_search_form(); ?>

				<div class="search-list">
					<?php $terms = get_terms( 'product_type' );?>
					<?php if ( ! empty( $terms ) ) : ?>
					<?php foreach ($terms as $term) : ?>
						<div class="search-item">
							<div clas="search-image">
										<?php $background = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

		</div>
		</div>
	</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>
