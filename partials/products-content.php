<?php
$args = array(
  'post_type' => 'products',
  'posts_per_page' => -1
);
?>

<?php
$mq=new WP_Query($args);
if($mq->have_posts() ):
   echo "<ul class='products-container'>";
   while ( $mq->have_posts() ) : $mq->the_post(); ?>
    <li class="product-container top-border">
      <div>
        <a href="<?php echo esc_url(get_permalink()); ?>">
          <?php the_post_thumbnail('mobile_grid'); ?>
        </a>
      </div>
      <div>
        <a href="<?php echo esc_url(get_permalink()); ?>">
          <h4 class="title underline"><?php the_title(); ?></h4>
        </a>

        <?php the_content(); ?>

        <?php ?>


      </div>
    </li>
<?php endwhile;
  echo "</ul>";
endif;
?>
