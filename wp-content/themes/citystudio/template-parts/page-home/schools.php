
<h1 class="homepage-titles">Partners</h1>

  <div class="homepage-partners-container">
    <ul class="featured">
      <?php
        if( have_rows('partner_row') );
        while ( have_rows('partner_row') ) : the_row(); ?>
        <a href="<?php the_sub_field('partner_link'); ?>"><li style="background: url( '<?php the_sub_field('school_logo'); ?> ' ) no-repeat center center; background-size: contain; ">
        </li></a>
      <?php endwhile; ?>
    </ul>

    <ul class="featured-two">
        <?php
          if( have_rows('partner_row_two') );
          while ( have_rows('partner_row_two') ) : the_row(); ?>
          <a href="<?php the_sub_field('partner_link'); ?>"><li style="background: url( ' <?php the_sub_field('school_logo') ?> ' )no-repeat center center; background-size: contain; ">
          </li></a>
        <?php endwhile; ?>
    </ul>

    <ul class="featured-two">
        <?php
          if( have_rows('partner_row_three') );
          while ( have_rows('partner_row_three') ) : the_row(); ?>
          <a href="<?php the_sub_field('partner_link'); ?>"><li style="background: url( ' <?php the_sub_field('school_logo') ?> ' )no-repeat center center; background-size: contain; ">
          </li></a>
        <?php endwhile; ?>
    </ul>

  </div>
