<?php get_header(); ?>

<main>
  <?php
    if( have_posts() ) {
      while ( have_posts() ){
        the_post();
        the_content();
      }
    }
  ?>
  <?php
    echo do_shortcode('[smartslider3 slider=1]');
  ?>
</main>


<?php get_footer(); ?>
