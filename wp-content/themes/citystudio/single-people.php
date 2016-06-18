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
			<img src="<?php the_field( 'team_member_image' ); ?> " />
		</div>

		<div class="person-right">

			<div class="person-name">
				<h1 class="people-title"><?php the_field( 'team_member_name' ); ?></h1>
				<p class="role"><?php the_field( 'team_member_role' ); ?></p>

        <hr class="separate" />
			</div>

			<p>
				<?php the_field( 'team_member_bio' ); ?>
			</p>

		</div>

    <div class="static-return-button">
      <a href="<?php the_permalink();  ?>/people "> << Back To People Page</a>
    </div>


  </article><!-- #post-## -->

	<?php endwhile; // End of the loop. ?>
</div><!-- end single proj view container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
