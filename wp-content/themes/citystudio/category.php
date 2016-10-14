<?php
/**
* Category Template: Categories Template
*/
get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

      <header class="citystudio-banner">
        <div class="banner-inner">
          <h2 class="page-titles">Category: <?php single_cat_title(); ?></h2>
        </div>
      </header>

      <div id="content" role="main">


        <div class="blog-sidebar">
          <div class="sidebar-item">
            <?php wp_list_categories(); ?>
          </div>
          <div class="sidebar-item">
            <h4>Social Media</h4>
            <p>
              <a href="https://www.facebook.com/CityStudioVancouver/">FACEBOOK</a>
            </p>
            <p>
              <a href="https://twitter.com/CityStudioVan?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">TWITTER</a>
            </p>
            <p>
              <a href="https://www.instagram.com/citystudiovan/?hl=en">INSTAGRAM</a>
            </p>
          </div>
          <div class="sidebar-item">
            <h4>Newsboard</h4>
          </div>
        </div>
      <div class="blog-content-container">
        <?php
        // Check if there are any posts to display
        if ( have_posts() ) : ?>
          <div class="category-post-container">
          </div><!-- end category post container -->
        <?php endif; ?>
      </div>
      </div><!-- end blog content container -->
  </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
