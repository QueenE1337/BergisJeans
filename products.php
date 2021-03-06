<?php
/* Template Name:  Products
* Description:    Template for Products
*/

get_header(); ?>

  <main>
    <div id="icons">
      <div class="product-qualities"><i class="icons fa fa-globe" aria-hidden="true"></i><p><strong>Sustainable</strong></p></div>
      <div class="product-qualities"><i class="icons fa fa-star" aria-hidden="true"></i><p><strong>Top Quality</strong></p></div>
      <div class="product-qualities"><i class="icons fa fa-arrows-h" aria-hidden="true"></i><p><strong>Well-Fitted</strong></p></div>
    </div>
    <?php get_template_part('partials/products-content'); ?>


  </main>



<?php get_footer(); ?>
