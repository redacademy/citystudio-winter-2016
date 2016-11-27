<?php
/**
 * Template part for displaying the call to action
 *
 * @package RED_Starter_Theme
 */

?>

<div class="cta_blurb">
  <div class="cta-heading">
    <h3><?php the_field('cta_heading') ?></h3>
  </div>

  <div class="cta-content">
    <?php the_field('cta_content') ?>
  </div>
</div>

<div class="connect">
  <label class="become-involved">Become Involved!</label>
  <?php $urls = get_field('cta_link'); ?>
  <a href="<?php echo $urls ?>" class="connect-button"><p>Connect</p></a>
</div>
