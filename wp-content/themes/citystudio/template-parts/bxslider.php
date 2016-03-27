<ul class="bxslider">
		<?php query_posts(array('post_type' => 'project', 'posts_per_page' => 10));
    	 if(have_posts()) : while(have_posts()) : the_post(); ?>
    	<?php $background = wp_get_attachment_url( get_post_thumbnail_id( $page->ID[0] )); ?>

        <li style="background: url('<?php echo $background; ?>') no-repeat">
        </li>
  

       <?php endwhile; endif; wp_reset_query(); ?>

	
</ul>
