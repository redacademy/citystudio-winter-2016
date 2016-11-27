
<div class="homepage-partners-container">
  <h1 class="homepage-titles"><?php the_field('partners_title'); ?></h1>
    <?php
      if( have_rows('partner_row') ); ?>
        <ul class="home-partners">
          <?php while ( have_rows('partner_row') ) : the_row(); ?>
            <a class="feat-logo-link" href="<?php the_sub_field('partner_link'); ?>">
              <li class="feat-logo" style="background-image: url( '<?php the_sub_field('school_logo'); ?>' )"></li>
            </a>
          <?php endwhile; ?>
        </ul>

    <?php
    if( have_rows('partner_row_two') ); ?>
    <ul class="home-partners">
      <?php while ( have_rows('partner_row_two') ) : the_row(); ?>
        <a class="feat-logo-link" href="<?php the_sub_field('partner_link'); ?>">
          <li class="feat-logo" style="background-image: url( '<?php the_sub_field('school_logo') ?>' )"></li>
        </a>
        <?php endwhile; ?>
    </ul>

    <!-- <?php
    if( have_rows('partner_row_three') );?>
    <ul class="home-partners">
      <?php  while ( have_rows('partner_row_three') ) : the_row(); ?>
        <a class="feat-logo-link" href="<?php the_sub_field('partner_link'); ?>">
          <li class="feat-logo" style="background-image: url( '<?php the_sub_field('school_logo') ?>' ) "></li>
        </a>
      <?php endwhile; ?>
    </ul> -->
</div>
