
<h1 class="homepage-titles">Partners</h1>

<div class="homepage-partners-container">
    <ul class="home-partners">
      <?php
        if( have_rows('partner_row') );
        while ( have_rows('partner_row') ) : the_row(); ?>
        <a class="feat-logo-link" href="<?php the_sub_field('partner_link'); ?>">
          <li class="feat-logo" style="background-image: url( '<?php the_sub_field('school_logo'); ?>' )"></li>
        </a>
      <?php endwhile; ?>
    </ul>

    <ul class="home-partners">
        <?php
          if( have_rows('partner_row_two') );
          while ( have_rows('partner_row_two') ) : the_row(); ?>
          <a class="feat-logo-link" href="<?php the_sub_field('partner_link'); ?>">
            <li class="feat-logo" style="background-image: url( '<?php the_sub_field('school_logo') ?>' )"></li>
          </a>
        <?php endwhile; ?>
    </ul>

    <ul class="home-partners">
        <?php
          if( have_rows('partner_row_three') );
          while ( have_rows('partner_row_three') ) : the_row(); ?>
          <a class="feat-logo-link" href="<?php the_sub_field('partner_link'); ?>">
            <li class="feat-logo" style="background-image: url( '<?php the_sub_field('school_logo') ?>' ) "></li>
          </a>
        <?php endwhile; ?>
    </ul>
</div>
