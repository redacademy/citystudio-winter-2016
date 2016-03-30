<?php
/**
 * The main template file.
 *
 * Template Name: Front-page
 */
get_header(); ?>
<div class="front-page-main">
    <div class="hero">
        <div class="hero-logo">
        </div>
        <div class="site-description">
            <p>
                CitySudio is an innovation and leadership hub inside City Hall where staff, citizens and students from 6 universities and colleges co-create experiments and solutions for the City.
            </p>
        </div>
        <button id="button" class="toggle-class"></button>
    </div>
</div>
<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>

	<?php endwhile; ?>

	<ul class="bxslider">

		<?php
			 $args = array( 'post_type' => 'project', 'numberposts' => 10 );
			 $latest_posts = get_posts( $args ); // returns an array of posts
		?>
		<?php foreach ( $latest_posts as $post ) : setup_postdata( $post ); ?>

	      <a class="gallery-anchor" href="<?php echo esc_url( get_permalink() ); ?>" >
						<?php $background = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>

						<li style="background: url('<?php echo $background; ?>') no-repeat center; background-size: cover; border: 1px solid lightgrey;">
							<div class="description">
								<span class="home-description"><?php the_title( '<h2 class="description-title">', '</h2>'); ?>	<?php echo CFS()->get( 'subtitle' ); ?>
								</span>
							</div>
						</li>
	  		</a>

			<?php endforeach; wp_reset_postdata(); ?>



	</ul>
</div>
<?php get_footer(); ?>
