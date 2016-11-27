<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<div class="hero" style="background-image: linear-gradient(to right, rgba(0,100,147,0.70) 0%,rgba(123,188,209,0.70) 100%), url('<?php echo $thumb['0'];?>')">
  <div class="hero-blurb">
    <h3><?php the_field('hero_blurb'); ?></h3>
  </div>
</div> <!-- end hero -->

  <h1 class="homepage-titles"><?php the_field('explore_citystudio_projects_title'); ?></h1>
