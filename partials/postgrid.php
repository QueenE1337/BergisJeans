

  <?php

  if(have_posts() ):
  echo "<ul class='news-grid'>";
     while ( have_posts() ) : the_post(); ?>

     <li>
         <a href="<?php the_permalink();?>"><?php the_title(); ?> </a>
     </li>
      <li>
          <a href="<?php the_permalink();?>"><?php the_post_thumbnail('desktop_grid'); ?> </a>
      </li>
      <?php endwhile;
        echo "</ul>";
    endif;
  ?>
