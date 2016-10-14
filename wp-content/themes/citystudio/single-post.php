<?php
/**
* Single Post Template: Single Blog Post
*/
get_header();
?>

<div id="primary" class="content-area single-projects">
	<main id="main" class="site-main" role="main">

	<?php $featimg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="blog-post-banner" style="background: url('<?php echo $featimg['0'];?>') no-repeat center center; height: 14em; width: 100%; background-size: cover;">

			<div class="blue-overlay-3">
        <h2 class="blog-page-titles"><?php the_title(); ?></h2>
				<p class="post_excerpt"><?php the_field('post_excerpt'); ?></p>
			</div>
    </header>

	<?php while (have_posts()) : the_post(); ?>

  <div class="blog-hero">
  		      <?php if (has_post_thumbnail()) : ?>
  			      <?php the_post_thumbnail('large'); ?>
  			    <?php endif; ?>
  </div>

  <div class="blog-content">
    <p class="date date2"><?php echo get_the_date('F j, Y'); ?></p>
    <hr class="seperate-top">
  	<p><?php the_content(); ?></p>
    <hr class="seperate">
		<div class="blog-nav">
			<?php previous_post_link(); ?>
			<?php next_post_link(); ?>
		</div>
  </div>

	<div class="recent-news-block">
	  <h2>Recent News</h2>
	  <ul class="recent-news-list">
	  <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>

	  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	  <a href="<?php the_permalink() ?>">
	  <li> <?php if (has_post_thumbnail()) : ?>
	      <?php the_post_thumbnail('small'); ?>
	    <?php endif; ?>
	    <div class="title-div">
	        <p><?php the_title(); ?></p>
	    </div>

	  </li>
	  </a>

	<?php endwhile;wp_reset_postdata();?>
	  </ul>
	</div>

</article>

		<?php endwhile;?>
  </main><!-- #main -->
</div><!-- #primary -->

    <?php get_footer(); ?>
