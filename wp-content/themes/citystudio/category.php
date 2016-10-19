<?php
/**
*
*/
get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <header class="citystudio-banner">
      <div class="banner-inner">
        <h2 class="page-titles">Category: <?php single_cat_title(); ?></h2>
      </div>
    </header>

    <div class="blog-content-container">

      <?php get_template_part('template-parts/component-sidebar'); ?>
      <!-- <div class="category-post-container"> -->
      <div class="blog-archive-feed">

      <?php
        if ( have_posts() ) :
        while ( have_posts() ) : the_post();

            $blogfeatureimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb' );
        ?>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">

              <div class="blog-featured-image" style="background: url('<?php echo $blogfeatureimage['0'];?>') no-repeat center; background-size: cover;">

                <div class="blog-credits">
                  <p class="date"><?php echo get_the_date('F j, Y'); ?></p>
                  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                  <p><?php the_field('post_excerpt'); ?></p>
                  <div class="category-links">
                    <?php the_category(', '); ?>
                  </div>
                </div>
              </div><!-- end blog-featured-image div -->
            </a>
        <?php
          endwhile;
          else:
        ?>
          <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
      </div><!-- end category post container -->
    </div><!-- end blog content container -->
  </main>
</div>


<?php get_footer(); ?>
