<ul class="bxslider">

		<?php query_posts(array('post_type' => 'project', 'posts_per_page' => 10));
    	 if(have_posts()) : while(have_posts()) : the_post(); ?>
    	<?php $background = wp_get_attachment_url( get_post_thumbnail_id( $page->ID[0] )); ?>

        
		<a class="gallery-anchor" href="<?php echo esc_url( get_permalink() ); ?>" >
			<li style="background: url('<?php echo $background; ?>') no-repeat; "></li>

			<div class="description"><span class="home-description><?php the_title( '<h2 class="description-title"> , </h2>' ); ?> <?php echo CFS()->get( 'subtitle' ); ?></span></div>

        </a>
  

       <?php endwhile; endif; wp_reset_query(); ?>

	
</ul>
