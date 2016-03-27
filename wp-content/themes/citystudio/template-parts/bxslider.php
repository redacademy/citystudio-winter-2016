<ul class="bxslider">
<<<<<<< HEAD


      <li class="featured-square yimby">
      </li>
      <li class="upper-mini">
        <img src="<?php echo get_template_directory_uri().'/images/colouring-mini.png';?>" class="" alt="Colouring Program Shot" />
      </li>
      <li class="upper-mini">
        <img src="<?php echo get_template_directory_uri().'/images/bonfire-mini.png';?>" class="" alt="Bonfire Program Shot" />
      </li>
      <li class="featured-square">
        <img src="<?php echo get_template_directory_uri().'/images/YIMBY-featureshot.png';?>" class="" alt="Pianos in the Park Program Shot" />
      </li>
      <li class="lower-regular">
        <img src="<?php echo get_template_directory_uri().'/images/couch-lower.png';?>" class="" alt="Couch in street" />
      </li>
      <li class="lower-regular">
        <img src="<?php echo get_template_directory_uri().'/images/grow-lower.png';?>" class="" alt="YIMBY Program Shot" />
      </li>
      <li class="lower-regular">
        <img src="<?php echo get_template_directory_uri().'/images/raining-lower.png';?>" class="" alt="YIMBY Program Shot" />
      </li>
=======
		<?php query_posts(array('post_type' => 'project', 'posts_per_page' => 10));
    	 if(have_posts()) : while(have_posts()) : the_post(); ?>
    	<?php $background = wp_get_attachment_url( get_post_thumbnail_id( $page->ID[0] )); ?>

        <li style="background: url('<?php echo $background; ?>') no-repeat">
        </li>
  
>>>>>>> feature-branch

       <?php endwhile; endif; wp_reset_query(); ?>

	
</ul>
