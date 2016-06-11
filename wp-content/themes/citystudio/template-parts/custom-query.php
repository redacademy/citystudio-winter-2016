<?php
/**
 * Template part for displaying single tag taxonomy
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<ul class="menu-list-items">

    <?php  $args = array('post-type' => 'project-tags');
          $all_seasons = get_posts ($args);
    ?>

    <?php foreach($all_season as $post) : setup_postdata( $post ); ?>

    <li class="list-item-info">

  		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
      <?php the_content(); ?>

    </li>
  <?php endforeach; wp_reset_postdata(); ?>
	</ul><!-- .menu-list-items -->

</article><!-- #post-## -->
