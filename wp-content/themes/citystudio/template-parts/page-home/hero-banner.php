<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<div class="hero" style="background-image: linear-gradient(to right, rgba(0,100,147,0.70) 0%,rgba(123,188,209,0.70) 100%), url('<?php echo $thumb['0'];?>')">
  <div class="hero-blurb">
    <h3><b>CityStudio</b> is an experimentation and innovation hub for the <b>City of Vancouver</b> where staff, students and community members design and launch <b>projects</b> and solutions for the City.
    </h3>
  </div>
</div> <!-- end hero -->

  <h1 class="homepage-titles"><span>Explore</span> CityStudio Projects</h1>