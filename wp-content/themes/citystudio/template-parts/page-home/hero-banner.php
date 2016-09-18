<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<div class="hero" style="background-image: url('<?php echo $thumb['0'];?>')">
  <div class="hero-blurb">
    <p><b class="orange-font">CityStudio</b> is an experimentation and innovation hub for the <b class="orange-font">City of Vancouver</b> where staff, students and community members design and launch <b class="orange-font">projects</b> and solutions for the City.
    </p>
  </div>
</div> <!-- end hero -->
