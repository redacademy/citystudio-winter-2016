<ul class="section-archive">
<?php $loop = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 6, ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<li>
    	<a href="<?php echo get_the_permalink();?>">
         	<?php if (has_post_thumbnail()) : ?>
        	 <?php the_post_thumbnail('medium', 'style=width:360px;height:280px;margin: 0 auto 2rem;'); ?>
        	 <?php endif; ?>
    	</a>
	</li>
<?php endwhile; wp_reset_query(); ?>
</ul>