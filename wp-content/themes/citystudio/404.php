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

			<section class="not-found">

				<header class="404-header">
					<h2 class="404-oops"><?php echo esc_html( 'Oops! That page can&rsquo;t be found.' ); ?></h2>
				</header><!-- .page-header -->

					<div class="404-page-content">
						<p id="redirect-not-found"><?php echo esc_html( 'It looks like nothing was found at this location, or the page you were looking for no longer exists. Maybe try a search?' ); ?></p>
						<div class="404-searchform-container">
							<?php dynamic_sidebar( 'searchform' ); ?>
						</div>
					</div><!-- .widget -->

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
</div>
