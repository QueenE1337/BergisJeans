<?php get_header(); ?>
<main>
  <h1>Frontpage</h1>
  <p>Launch in <span id="date"></span> days.</p>

  <script type="text/javascript">
    var launchDate = new Date( "<?php the_field( "launch_date" ); ?>" );
    var today = new Date();
    var timeDiff = launchDate.getTime() - today.getTime();
    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
    diffDays = diffDays < 0 ? 0 : diffDays;//Sets the days until launch to zero if launch date has been reached already.
    document.getElementById("date").innerHTML = diffDays;

  </script>


  <!-- This is where we print out our News section -->
   
     <a href="/news"><h1>News</h1> </a>

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
