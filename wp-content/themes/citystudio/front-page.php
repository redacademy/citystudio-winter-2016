<?php
/**
 *
 * Template Name: Front-page
 */
get_header(); ?>

<div class="front-page-main">

  <?php get_template_part ('template-parts/page-home/hero-banner'); ?>

  <?php get_template_part ('template-parts/page-home/intro'); ?>

  <?php get_template_part ('template-parts/page-home/sort-bar'); ?>

  <?php get_template_part ('template-parts/page-home/project-grid'); ?>

<<<<<<< HEAD
  <?php get_template_part ('template-parts/page-home/schools'); ?>

  <!-- <?php get_template_part ('template-parts/recent-news-block'); ?> -->
=======
  <?php get_template_part ('template-parts/recent-news-block'); ?>

  <?php get_template_part ('template-parts/page-home/schools'); ?>
>>>>>>> 98a885c6f6638cdafde44a740e78cab0adaf3da5

<?php get_footer(); ?>
