<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<div class="hero" style="background-image: url('<?php echo $thumb['0'];?>')">
  <div class="hero-blurb">
    <h3><?php the_field('hero_blurb'); ?></h3>
  </div>
</div> <!-- end hero -->

  <h1 class="homepage-titles"><?php the_field('explore_citystudio_projects_title'); ?></h1>
