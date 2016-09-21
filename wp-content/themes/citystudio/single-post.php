<?php
/**
* Single Post Template: Single Blog Post
*/
get_header();
?>

<div id="primary" class="content-area single-projects">
	<main id="main" class="site-main" role="main">

    <header class="citystudio-banner">
      <div class="banner-inner">
        <h2 class="page-titles"><?php the_title(); ?></h2>
      </div>
    </header>
	<?php while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="blog-hero">
  		      <?php if (has_post_thumbnail()) : ?>
  			      <?php the_post_thumbnail('large'); ?>
  			    <?php endif; ?>
  </div>

  <div class="blog-content">
    <p class="date date2"><?php echo get_the_date('F j, Y'); ?></p>
    <hr class="seperate-top">
    <div class="post_excerpt"><?php the_field('post_excerpt'); ?></div>
  	<p><?php the_content(); ?></p>
    <hr class="seperate">
  </div>

  <div class="static-return-button">
    <a href="<?php echo esc_url( home_url( 'home/blog' ) ); ?>"> << Back To Blog Archive</a>
  </div>

</article>

		<?php endwhile;?>
  </main><!-- #main -->
</div><!-- #primary -->

    <?php get_footer(); ?>
