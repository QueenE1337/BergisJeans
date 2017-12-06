<?php
/* Template Name:  Contact
* Description:    Template for Contact
*/

get_header(); ?>

  <main>
    <div class="about-description-container">
      <div class="content">
        <h1 class="title underline"><?php the_field( "description_title" ); ?></h1>
        <p class="drop-cap"><?php the_field( "description" ); ?></p>
      </div>
      <figure class="description_image"><?php the_post_thumbnail('mobile_grid'); ?></figure>
    </div>
    <ul class="contactinformation">
      <li>
        <h4 class="title">Email Us At:</h4>
        <p><?php the_field( "contactinfo" ); ?></p>
      </li>
      <li>
        <h4 class="title">Or Call Us:</h4>
        <p><?php the_field( "openhours" ); ?></p>
      </li>
    </ul>

  </main>

<?php get_footer(); ?>
