<?php
/* Template Name:  About
* Description:    Template for about
*/

get_header(); ?>

  <main>
    <?php dynamic_sidebar('about-info') ?>
    <?php dynamic_sidebar('vision-info') ?>
    <?php dynamic_sidebar('mission-info') ?>
    <?php dynamic_sidebar('history-info') ?>

  </main>

<?php get_footer(); ?>
