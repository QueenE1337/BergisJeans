<?php

if(have_posts()){
  echo "<ul class='products-container'>";
  while(have_posts()){
    the_post();
?>
    <li class="product-container">
      <div>
        <a href="<?php echo esc_url(get_permalink()); ?>">
          <?php the_post_thumbnail('mobile_grid'); ?>
        </a>
      </div>
      <div>
        <a href="<?php echo esc_url(get_permalink()); ?>">
          <h4 class="title underline"><?php the_title(); ?></h4>
        </a>
        <?php

          if(  get_post_type( get_the_ID() ) == "news"){/*Adds the date for when the post was added if news post stype*/
            the_date('Y-m-d', '<p class="date title">', '</p>');
          }
         ?>
        <?php the_content(); ?>
      </div>
    </li>
<?php
  }
  echo "</ul>";
}
?>
