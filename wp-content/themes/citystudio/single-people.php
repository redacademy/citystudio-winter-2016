<?php
/**
* Template Name: Single Person
*/
get_header();
?>

<div id="primary" class="content-area single-projects">
	<main id="main" class="site-main" role="main">

		<header class="citystudio-banner">
			<div class="banner-inner">
				<h2 class="page-titles">People</h2>
			</div>
		</header>

		<?php while (have_posts()) : the_post(); ?>

	  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="container">
	    <!-- Section Project Credits -->
	    <div class="person-left">
	      <?php if( get_field('team_member_image') ): ?>
	        <img src="<?php the_field( 'team_member_image' ); ?>" />
	      <?php endif; ?>
			</div>

			<div class="person-right">
				<div class="person-name">
					<?php the_title('	<h1 class="people-title">', '</h1>' ); ?>
					<p class="role"><?php the_field( 'team_member_role' ); ?></p>
				</div>

				<p><?php the_field( 'team_member_bio' ); ?></p>
			</div>

	    <div class="static-return-button">
	      <a href="<?php echo esc_url( home_url( '/people' ) ); ?>"> << Back To People Page</a>
	    </div>
	  </article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- end single proj view container -->
</div><!-- #primary -->

<?php get_footer(); ?>
