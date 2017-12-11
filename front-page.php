<?php get_header(); ?>
<main>

  <?php
    //This is the frontpage slider, created with the plugin MetaSlider.

    if(have_posts()){
      while(have_posts()){
        the_post();
        the_content();
      }
    }
    ?>

  <div class="date-container">
    <span class="title" id="date"></span>
    <p>days</p>
    <p class="title">until launch of...</p>
  </div>

  <script type="text/javascript">
    var launchDate = new Date( "<?php the_field( "launch_date" ); ?>" );
    var today = new Date();
    var timeDiff = launchDate.getTime() - today.getTime();
    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
    diffDays = diffDays < 0 ? 0 : diffDays;//Sets the days until launch to zero if launch date has been reached already.
    document.getElementById("date").innerHTML = diffDays;
  </script>

  <!-- This is where we print out our News section -->
<a href="/news"><h1 class="title underline">News</h1> </a>
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

<a href="/news"><p class="readmore"> More News</p> </a>

</main>


<?php get_footer(); ?>
