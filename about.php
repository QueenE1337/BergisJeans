<?php
/* Template Name:  About
* Description:    Template for about
*/

get_header(); ?>

  <main>
    <h1><?php the_field( "description_title" ); ?></h1>
    <p><?php the_field( "description" ); ?></p>
  </main>

<?php get_footer(); ?>
