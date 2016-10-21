<?php
/**
 * Template part for displaying the call to action
 *
 * @package RED_Starter_Theme
 */

?>

<?php
    // check if the repeater field has rows of data
    if( have_rows('call_to_action') );
         // loop through the rows of data
        while ( have_rows('call_to_action') ) : the_row(); ?>
    <div class="cta_blurb">
  		<div class="cta-heading">
            	<h3><?php the_sub_field('cta_heading') ?></h3>
      </div>
      <div class="cta-content">
        <?php the_sub_field('cta_content') ?>
      </div>
  </div>
<div class="connect">
  <label class="become-involved">Become Involved!</label>
  <?php $urls = get_field('cta_link'); ?>
  <a href="<?php echo $urls ?>" class="connect-button"><p>Connect</p></a>
</div>
<?php  endwhile; ?>
