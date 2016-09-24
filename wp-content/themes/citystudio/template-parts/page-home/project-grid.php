
<?php $posts = get_field('gallery_featured_projects');

if( $posts ): ?>
    <ul class="grid">
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
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
    <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>

<div class="explore-section">
  <a class="button-blue" href="<?php get_template_directory(); ?>home/search/">See More Projects</a>
</div>
