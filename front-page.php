<?php get_header(); ?>

<main>
  <h1>Frontpage</h1>
  <p>Launch in <span id="date"></span> days.</p>

  <script type="text/javascript">
    var launchDate = new Date( "<?php the_field( "launch_date" ); ?>" );
    var today = new Date();
    var timeDiff = Math.abs(launchDate.getTime() - today.getTime());
    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
    if(diffDays < 0){
      diffDays = 0;
    }
    document.getElementById("date").innerHTML = diffDays;

  </script>



</main>


<?php get_footer(); ?>
