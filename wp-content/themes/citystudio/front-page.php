<?php
/**
 *
 * Template Name: Front-page
 */
get_header(); ?>

<div class="front-page-main">

    <div class="hero">

        <div class="hero-blurb">
            <p>
            <b class="orange-font">CityStudio</b> is an experimentation and innovation hub for the <b class="orange-font">City of Vancouver</b> where staff, students and community members design and launch <b class="orange-font">projects</b> and solutions for the City.
            </p>
        </div>
    </div> <!-- end hero -->

  <h1 class="homepage-titles">CityStudio Projects</h1>
  <p class="homepage-description" style="display: none;">
    We partner with local post-secondary schools to spur student-driven projects to make Vancouver a greener, healthier and liveable space. Check out what what students have done in the past using the gallery, and how you can get involved through your school below.
  </p>

  <div class="gallery-description-container">
    <div class="sticky-navigation">
      <?php get_template_part ('template-parts/content', 'nav'); ?>
    </div>
  </div>
  <div class="full-width">
    <ul class="grid">
        <?php
        $args = array(
          'post_type' => 'project',
          'numberposts' => 12,
          'taxonomy' => 'year'
        );

        // $loop = new WP_Query( array( 'post_type' => 'product', 'category_name' => 'year'));

        $latest_posts = get_posts( $args );?>

        <?php foreach ( $latest_posts as $post ) : setup_postdata( $post ); ?>
      <a class="gallery-anchor" href="<?php echo esc_url( get_permalink() ); ?>" >


        <li style=
            "background: url('<?php the_field('banner_image'); ?>') no-repeat center;
             background-size: cover;
             border-top: 2px solid white;
             border-bottom: 2px solid white;
             border-right: 2px solid white;">
          <div class="description"><?php the_title( '<h2 class="description-title">', '</h2>'); ?>
            <div class="subtitle"><?php the_field( 'excerpt' ); ?>
            </div>
          </div>
        </li>
      </a>
      <?php endforeach; wp_reset_postdata(); ?>
    </ul>
</div><!-- end grid container -->

    <h1 class="homepage-titles">Participating Schools</h1>

      <div class="homepage-partners-container">
        <ul class="featured">
          <?php
            if( have_rows('partner_row') );
            while ( have_rows('partner_row') ) : the_row(); ?>
            <li style="background: url( '<?php the_sub_field('school_logo'); ?> ' ) no-repeat center center;background-size: contain; ">
            </li>
          <?php endwhile; ?>
        </ul>

        <ul class="featured-two">
            <?php
              if( have_rows('partner_row_two') );
              while ( have_rows('partner_row_two') ) : the_row(); ?>
              <li style="background: url( ' <?php the_sub_field('school_logo') ?> ' )no-repeat center center;background-size: contain; ">
              </li>
            <?php endwhile; ?>
        </ul>

        <!-- <ul class="featured-two">
            <?php
              if( have_rows('partner_row_three') );
              while ( have_rows('partner_row_three') ) : the_row(); ?>
              <li style="background: url( ' <?php the_sub_field('school_logo') ?> ' )no-repeat center center;background-size: contain; ">
              </li>
            <?php endwhile; ?>
        </ul> -->
      </div>
<?php get_footer(); ?>
