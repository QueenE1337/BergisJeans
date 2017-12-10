

  <?php
  if(have_posts() ):
  echo "<ul class='post-grid'>";
     while ( have_posts() ) : the_post(); ?>
      <li>
          <a href="<?php the_permalink();?>"><?php the_post_thumbnail('desktop_grid'); ?> </a>
          <a href="<?php the_permalink();?>"><?php the_title(); ?> </a>
      </li>
      <?php endwhile;
        echo "</ul>";
    endif;
  ?>
