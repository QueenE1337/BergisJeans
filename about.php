<?php
/* Template Name:  About
* Description:    Template for about
*/

get_header(); ?>

  <main class="about">
    <div class="about-description-container">
      <div class="content">
        <h1 class="title underline"><?php the_field( "description_title" ); ?></h1>
        <p class="drop-cap"><?php the_field( "description" ); ?></p>
      </div>
      <figure class="description_image"><?php the_post_thumbnail('mobile_grid'); ?></figure>
    </div>
    <ul class="values top-border">
      <li>
        <h4 class="title">Vision</h4>
        <p><?php the_field( "vision" ); ?></p>
      </li>
      <li>
        <h4 class="title">Mission</h4>
        <p><?php the_field( "mission" ); ?></p>
      </li>
    </ul>

    <div class="history-container top-border">
      <h4 class="title underline"><?php the_field( "history_label" ); ?></h4>
      <p class="drop-cap"><?php the_field( "history_description" ); ?></p>
      <div class="timeline">
        <?php the_field("history_year_by_year") ?>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
