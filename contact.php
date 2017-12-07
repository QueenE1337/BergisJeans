<?php
/* Template Name:  Contact
* Description:    Template for Contact
*/

get_header(); ?>

  <main>
    <div class="about-description-container">
      <div class="content">
        <h1 class="title underline"><?php the_field( "contact_title" ); ?></h1>
        <p class="drop-cap"><?php the_field( "contact_description" ); ?></p>
      </div>
      <figure class="description_image"><?php the_post_thumbnail('mobile_grid'); ?></figure>
    </div>
    <ul class="contactinformation top-border">
      <li>
        <h4 class="title">Email Us At</h4>
        <a href="mailto:<?php the_field( "email" ); ?>" target="_top"><?php the_field( "email" ); ?></a>
      </li>
      <li>
        <h4 class="title">Call Us At</h4>
        <a href="tel:<?php the_field( "phone_number" ); ?>" target="_top"><?php the_field( "phone_number" ); ?></a>
      </li>
    </ul>

  </main>

<?php get_footer(); ?>
