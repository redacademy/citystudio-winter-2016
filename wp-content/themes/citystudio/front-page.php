<?php
/**
 * The main template file.
 *
 * Template Name: Front-page
 */
get_header(); ?>

<div class="front-page-main">

    <div class="hero">
     
        <div class="homepage-description">
            <p>
            <b class="orange">CitySudio</b> is an experimentation and innovation hub for the <b class="orange">City of Vancouver</b> where staff, students and community members design and launch <b class="orange">projects</b> and solutions for the City.
            </p>
        </div>
    </div>
  
       <div class="homepage-partners">
          <h1>CityStudio Partners</h1>
            <button>NEC</button>
            <button>UBC</button>
            <button>BCIT</button>
            <button>SFU</button>
            <button>VCC</button>
            <button>LANGARA</button>
            <button>ECUAD</button>
          <h1>CityStudio Projects</h1>
        </div>
    <div class="sticky-navigation">
      <?php get_template_part ('template-parts/content', 'nav'); ?>
    </div>

<div class="container">
    <ul class="grid">
        <?php
        $args = array(
          'post_type' => 'project',
          'numberposts' => 12,
          'meta_query_args' => array(
              array(
                'key' => 'featured_project',
                'value' => 'true',
                'compare' => 'IN',
                'numberposts' => 4
              )
          )
        );

        $latest_posts = get_posts( $args );
        ?>

        <?php foreach ( $latest_posts as $post ) : setup_postdata( $post ); ?>

          <a class="gallery-anchor <?php echo (CFS()->get( 'featured_project' ) === 1 ) ? 'featured-rectangle' : 'featured-square'; ?>" href="<?php echo esc_url( get_permalink() ); ?>" >

            <?php $background = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>

            <li style="background: url('<?php echo $background; ?>') no-repeat center; background-size: cover; border: 1px solid lightgrey;">
                  <div class="description"><?php the_title( '<h2 class="description-title">', '</h2>'); ?>
                    <div class="subtitle"><?php echo CFS()->get( 'subtitle' ); ?></div>
                    <br />
                    <!-- <span class="home-description"><?php echo CFS()->get( 'excerpt' ); ?></span> -->
                  </div>
              </li>
          </a>

          <?php endforeach; wp_reset_postdata(); ?>
    </ul>
</div>
<?php get_footer(); ?>
