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

  <?php get_template_part ('template-parts/page-home/schools'); ?>

<?php get_footer(); ?>
