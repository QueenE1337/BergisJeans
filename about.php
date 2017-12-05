<?php
/* Template Name:  About
* Description:    Template for about
*/

get_header(); ?>

  <main>
    <h1><?php the_field( "description_title" ); ?></h1>
    <p><?php the_field( "description" ); ?></p>
    <?php the_post_thumbnail('mobile_grid'); ?>
    <ul class="values">
      <li>
        <h4>Vision</h4>
        <p><?php the_field( "vision" ); ?></p>
      </li>
      <li>
        <h4>Mission</h4>
        <p><?php the_field( "mission" ); ?></p>
      </li>
    </ul>

    <div class="timeline">
      <h4><?php the_field( "history_label" ); ?></h4>
      <p><?php the_field( "history_description" ); ?></p>
    </div>
  </main>

<?php get_footer(); ?>
