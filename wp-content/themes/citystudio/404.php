<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="not-found">




			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( 'Oops! That page can&rsquo;t be found.' ); ?></h1>
				</header><!-- .page-header -->

					<div class="404 page-content">
						<p id="redirect-not-found"><?php echo esc_html( 'It looks like nothing was found at this location, or the page you were looking for no longer exists. Maybe try a search?' ); ?></p>
							<?php get_search_form(); ?>
					</div><!-- .widget -->

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
</div>
