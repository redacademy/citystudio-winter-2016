
<h1 class="homepage-titles">Participating Schools</h1>

  <div class="homepage-partners-container">
    <ul class="featured">
      <?php
        if( have_rows('partner_row') );
        while ( have_rows('partner_row') ) : the_row(); ?>
        <li style="background: url( '<?php the_sub_field('school_logo'); ?> ' ) no-repeat center center;background-size: contain; ">
        </li>
      <?php endwhile; ?>
    </ul>

    <ul class="featured-two">
        <?php
          if( have_rows('partner_row_two') );
          while ( have_rows('partner_row_two') ) : the_row(); ?>
          <li style="background: url( ' <?php the_sub_field('school_logo') ?> ' )no-repeat center center;background-size: contain; ">
          </li>
        <?php endwhile; ?>
    </ul>

    <!-- <ul class="featured-two">
        <?php
          if( have_rows('partner_row_three') );
          while ( have_rows('partner_row_three') ) : the_row(); ?>
          <li style="background: url( ' <?php the_sub_field('school_logo') ?> ' )no-repeat center center;background-size: contain; ">
          </li>
        <?php endwhile; ?>
    </ul> -->
  </div>
