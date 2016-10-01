<!-- Project Details -->
<div class="section-credits content-wrapper">
  <div class="full-width-col">

    <div class="scalability-wrap">
      <h3>Description:</h3>
      <span class="proj-description"><?php the_field('full_description'); ?></span>
    </div>

    <?php $value = get_field('activate_scalability');
    if ($value) { ?>
      <div class="scalability-wrap">
        <h3><?php the_field('scalability_title'); ?></h3>
        <span class="proj-scalability"><?php the_field('scalability'); ?></span>
      </div>

    <?php } else {
      echo '';
    } ?>

    <?php $value = get_field('activate_stewardship');
    if ($value) { ?>

      <div class="scalability-wrap">
        <h3><?php the_field('stewardship_title'); ?></h3>
        <span class="proj-stewardship"><?php the_field('stewardship'); ?></span>
      </div>

    <?php } else {
      echo '';
    } ?>

    <!-- image bar -->
    <div class="image-bar">
      <?php if (have_rows('image_bar'));
        while (have_rows('image_bar')) : the_row(); ?>
          <img src ="<?php the_sub_field('additional_image') ?>" />
      <?php endwhile; ?>
    </div>

    <div class="tags-wrapper">
      <h3>Tags:</h3>

      <div class="tags">
        <?php if(get_the_tag_list()) {
          echo get_the_tag_list('<ul class="tag-list"><li class="tag-li">','</li><li>','</li></ul>');
        } ?>

        <?php $id = get_the_id(); ?>
        <?php  $terms = get_the_terms($id, 'partners');
          if (!empty($terms)) : ?>
            <?php foreach ($terms as $term)  :
              $name = $term->name;

              echo '<p class="tag-links">'.'<a class="tag-url" href="'.get_term_link($term->slug, 'partners').'">'.$name.'</a>'.'</p>'; ?>
            <?php endforeach; ?>
          <?php endif; ?>

          <?php  $terms = get_the_terms($id, 'season');
          if (!empty($terms)) : ?>
            <?php foreach ($terms as $term)  :
              $name = $term->name;
              echo '<p class="tag-links">'.'<a class="tag-url" href="'.get_term_link($term->slug, 'season').'">'.$name.'</a>'.'</p>';
              ?>
            <?php endforeach; ?>
          <?php endif; ?>

          <?php  $terms = get_the_terms($id, 'themes');
          if (!empty($terms)) : ?>
            <?php foreach ($terms as $term)  :
              $name = $term->name;
              echo '<p class="tag-links">'.'<a class="tag-url" href="'.get_term_link($term->slug, 'themes').'">'.$name.'</a>'.'</p>';
              ?>
            <?php endforeach; ?>
          <?php endif; ?>
      </div><!-- end .tags -->
    </div><!-- end .tags-wrapper -->
  </div><!-- end .full-width-col -->
</div><!-- end .section-credits -->
