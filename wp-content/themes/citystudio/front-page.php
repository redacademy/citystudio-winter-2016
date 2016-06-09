<?php
/**
 *
 * Template Name: Front-page
 */
get_header(); ?>

<div class="front-page-main">
    <div class="hero">
        <div class="homepage-description">
            <p>
            <b class="orange-font">CityStudio</b> is an experimentation and innovation hub for the <b class="orange-font">City of Vancouver</b> where staff, students and community members design and launch <b class="orange-font">projects</b> and solutions for the City.<br/> These are our stories.
            </p>
        </div>
    </div>
</div> <!-- end hero -->


       <div class="homepage-partners">
          <h1>CityStudio Partners</h1>
          <p>
            CityStudio partners with local post-secondary schools to spur student-driven projects to make Vancouver a greener, healthier and liveable space. Check out what how you can get involved through your school, and what students have done in the past using the gallery below:
          </p>
            <button>NEC</button>
            <button>UBC</button>
            <button>BCIT</button>
            <button>SFU</button>
            <button>VCC</button>
            <button>LANGARA</button>
            <button>ECUAD</button>
          <hr>
          <h1>CityStudio Projects</h1>
        </div>
        
    </div>
  <div class="sticky-navigation">
    <?php get_template_part ('template-parts/content', 'nav'); ?>
      <p class="explore">explore our projects</p>
  </div>
  <div class="homepage-description">
      This is an <b>interactive gallery!</b> use the SORT to filter through the gallery.
  </div>
</div>

<div class="container">
    <ul class="grid">
        <?php
        $args = array(
          'post_type' => 'project',
          'numberposts' => 4,
          'meta_query' => array(
            'relation' => '=',
              array(
                'key' => 'featured_project',
                'value' => 1,
                'compare' => 'IN'
              )
          )
        );

        $latest_posts = get_posts( $args );
        ?>

        <?php foreach ( $latest_posts as $post ) : setup_postdata( $post ); ?>

          <a class="gallery-anchor <?php echo (CFS()->get( 'featured_project' ) === 1 ) ? 'featured-rectangle' : 'featured-square'; ?>" href="<?php echo esc_url( get_permalink() ); ?>" >

            <?php $background = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>

            <li style="background: url('<?php echo $background; ?>') no-repeat center; background-size: cover; border-top: 2px solid white; border-bottom: 2px solid white;border-right: 1px solid white; border-left: 1px solid white;">
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
