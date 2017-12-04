<?php
$args = array(
  'post_type' => 'products',
  'posts_per_page' => -1
);
?>

<?php
$mq=new WP_Query($args);
if($mq->have_posts() ):
   while ( $mq->have_posts() ) : $mq->the_post(); ?>
<div class="column-container">
  <div class="content-column">
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
  </div>
  <div class="thumbnailpic">
    <?php the_post_thumbnail('desktop_grid'); ?>
  </div>

</div>

<?php endwhile;
endif;
?>