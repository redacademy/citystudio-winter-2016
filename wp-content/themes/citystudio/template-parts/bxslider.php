<ul class="bxslider">

		<?php query_posts(array('post_type' => 'project', 'posts_per_page' => 10));
    	 if(have_posts()) : while(have_posts()) : the_post(); ?>


      <a class="gallery-anchor" href="<?php echo esc_url( get_permalink() ); ?>" >
					<?php $background = wp_get_attachment_url( get_post_thumbnail_id( $page->ID[0] )); ?>

					<div class="project-img-div">

					<li style="background: url('<?php echo $background; ?>') no-repeat center; background-size: cover; border: 1px solid lightgrey;"></li>

					</div>

					<div class="description">
        		<span class="home-description"><?php the_title( '<h2 class="description-title">', '</h2>'); ?>	 		<?php echo CFS()->get( 'subtitle' ); ?>
        		</span>
  		</a>


       <?php endwhile; endif; wp_reset_query(); ?>

</ul>
