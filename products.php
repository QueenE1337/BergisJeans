<?php
/* Template Name:  Products
* Description:    Template for Products
*/

get_header(); ?>

  <main>
    <h1> This is the products template</h1>
    <div id="icons">
      <div class="values"><i class="fa fa-globe" aria-hidden="true"></i><p><strong>Environmental Friendly</strong></p></div>
      <div class="values"><i class="fa fa-star" aria-hidden="true"></i><p><strong>Top Quality</strong></p></div>
      <div class="values"><i class="fa fa-arrows-h" aria-hidden="true"></i><p><strong>Well-Fitted</strong></p></div>
    </div>
    <?php get_template_part('partials/content'); ?>


  </main>



<?php get_footer(); ?>
