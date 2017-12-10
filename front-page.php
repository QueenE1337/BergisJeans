<?php get_header(); ?>
<main>


<!-- This is where we print out our News section -->
<h1>News</h1>
<?php
$args = array(
  'post_type' => 'news',
  'posts_per_page' => 2
);
?>
<?php echo "<ul class='post-grid'>";  ?>

<?php
$mq=new WP_Query($args);
if($mq->have_posts() ):
   while ( $mq->have_posts() ) : $mq->the_post(); ?>
   <li>
       <a href="<?php the_permalink();?>"><?php the_post_thumbnail('desktop_grid'); ?> </a>
       <a href="<?php the_permalink();?>"><?php the_title(); ?> </a>
   </li>

<?php
endwhile;
endif;
?>

</ul>
</main>


<?php get_footer(); ?>
