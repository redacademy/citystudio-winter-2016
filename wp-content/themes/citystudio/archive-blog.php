<?php
/**
 * Template Name: Blog Archive Page.
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- "info main top section -->
      <header class="title-banner blog-banner" style="background-image: url( '<?php the_field('blog_banner_image'); ?> ' ); ">
				<div class="blue-overlay-2 title-container">
	        <h1>CityStudio Blog</h1>
          <h4><span>Keep your finger on the pulse.</span> CityStudio news, upcoming opportunities to get involved and find out what we are up to.</h4>
				</div>
      </header>
      <div class="blog-content-container">
        <div class="blog-sidebar">
          <div class="sidebar-item">
            <h4>Categories</h4>

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
        <div class="blog-archive-feed">

        </div>

      </div> <!-- end blog content container -->













    </main><!-- #main -->
    </div><!-- #primary -->

    <?php get_footer(); ?>
