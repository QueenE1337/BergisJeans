<?php

 function add_widgets() {
  $args = array(
    'id'            => 'frontpage-info',
    /** Visible name in the Admin Dashboard Widget page */
    'name'          => __( 'Frontpage Info', 'post_theme' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'Frontpage information including some bragging about the company.', 'post_theme' ),

    /** HTML to wrap widget title in  */
    'before_title'  => '<h2 class="frontpage-info">',
    'after_title'   => '</h2>',
    /** HTML to wrap each widget  */
    'before_widget' => '<section>',
    'after_widget'  => '</section>',
  );
  register_sidebar( $args );

  /*About*/
  $args = array(
     'id'            => 'about-info',
     /** Visible name in the Admin Dashboard Widget page */
     'name'          => __( 'About text', 'post_theme' ),
     /** Visible description in the Admin Dashboard Widget page */
     'description'   => __( 'Who are Bergis?', 'post_theme' ),

     /** HTML to wrap widget title in  */
     'before_title'  => '<h2>',
     'after_title'   => '</h2>',
     /** HTML to wrap each widget  */
     'before_widget' => '<section>',
     'after_widget'  => '</section>',
   );
   register_sidebar( $args );


 $args = array(
    'id'            => 'vision-info',
    /** Visible name in the Admin Dashboard Widget page */
    'name'          => __( 'Company Vision', 'post_theme' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'Bergis Jeans vision.', 'post_theme' ),

    /** HTML to wrap widget title in  */
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
    /** HTML to wrap each widget  */
    'before_widget' => '<section class="values">',
    'after_widget'  => '</section>',
  );
  register_sidebar( $args );


 $args = array(
    'id'            => 'mission-info',
    /** Visible name in the Admin Dashboard Widget page */
    'name'          => __( 'Company Mission', 'post_theme' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'Bergis Jeans mission.', 'post_theme' ),

    /** HTML to wrap widget title in  */
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
    /** HTML to wrap each widget  */
    'before_widget' => '<section class="values">',
    'after_widget'  => '</section>',
  );
  register_sidebar( $args );

  $args = array(
     'id'            => 'history-info',
     /** Visible name in the Admin Dashboard Widget page */
     'name'          => __( 'Company History', 'post_theme' ),
     /** Visible description in the Admin Dashboard Widget page */
     'description'   => __( 'History of Bergis Jeans.', 'post_theme' ),

     /** HTML to wrap widget title in  */
     'before_title'  => '<h2>',
     'after_title'   => '</h2>',
     /** HTML to wrap each widget  */
     'before_widget' => '<section class="history-section about-section">',
     'after_widget'  => '</section>',
   );
   register_sidebar( $args );

   $args = array(
      'id'            => 'history-timeline',
      /** Visible name in the Admin Dashboard Widget page */
      'name'          => __( 'Company Timeline', 'post_theme' ),
      /** Visible description in the Admin Dashboard Widget page */
      'description'   => __( 'Timeline of Bergis Jeans.', 'post_theme' ),

      /** HTML to wrap widget title in  */
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
      /** HTML to wrap each widget  */
      'before_widget' => '<section class="timeline about-section">',
      'after_widget'  => '</section>',
    );
    register_sidebar( $args );

    $args = array(
       'id'            => 'history-images',
       /** Visible name in the Admin Dashboard Widget page */
       'name'          => __( 'History images', 'post_theme' ),
       /** Visible description in the Admin Dashboard Widget page */
       'description'   => __( 'Images for the timeline of Bergis Jeans.', 'post_theme' ),

       /** HTML to wrap widget title in  */
       'before_title'  => '<p>',
       'after_title'   => '</p>',
       /** HTML to wrap each widget  */
       'before_widget' => '<section class="timeline-img">',
       'after_widget'  => '</section>',
     );
     register_sidebar( $args );

 $args = array(
    'id'            => 'subscribe-form',
    /** Visible name in the Admin Dashboard Widget page */
    'name'          => __( 'Subscribe Form', 'post_theme' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'A subscribe form for the newsletter.', 'post_theme' ),

    /** HTML to wrap widget title in  */
    'before_title'  => '<h2 class="about-values>',
    'after_title'   => '</h2>',
    /** HTML to wrap each widget  */
    'before_widget' => '<section>',
    'after_widget'  => '</section>',
  );
  register_sidebar( $args );


 }
 add_action( 'widgets_init', 'add_widgets' );

?>
