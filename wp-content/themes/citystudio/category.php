<?php
/**
* Category Template: Categories Template
*/
get_header();
?>

<section id="primary" class="site-content">
<div id="content" role="main">

<?php
// Check if there are any posts to display
if ( have_posts() ) : ?>

<header class="citystudio-banner">
  <div class="banner-inner">
    <h2 class="page-titles">Category: <?php single_cat_title(); ?></h2>
  </div>
</header>

<div class="blog-content-container">
  <div class="blog-sidebar">
    <div class="sidebar-item">
      <?php wp_list_categories(); ?>
    </div>
    <div class="social-media-item">
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
  </div><!-- end blog sidebar div -->

  <div class="category-post-container">
  <?php while ( have_posts() ) : the_post(); ?>

    <?php $blogfeatureimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb' );?>

    <a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">
    <div class="blog-featured-image" style="background: url('<?php echo $blogfeatureimage['0'];?>') no-repeat center;
                                  background-size: cover;">
      <div class="blog-credits">
	      <p class="date"><?php echo get_the_date('F j, Y'); ?></p>
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_field('post_excerpt'); ?></p>
      </div>

    </div><!-- end blog-featured-image div -->
    </a>

  <?php endwhile;
  else: ?>
  </div><!-- end category post container -->

<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div><!-- end blog content container -->


</div><!-- end content div -->
</section>


<?php get_footer(); ?>
