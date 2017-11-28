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


 $args = array(
    'id'            => 'vision-info',
    /** Visible name in the Admin Dashboard Widget page */
    'name'          => __( 'Company Vision', 'post_theme' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'Bergis Jeans vision.', 'post_theme' ),

    /** HTML to wrap widget title in  */
    'before_title'  => '<h2 class="about-values">',
    'after_title'   => '</h2>',
    /** HTML to wrap each widget  */
    'before_widget' => '<section>',
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
    'before_title'  => '<h2 class="about-values">',
    'after_title'   => '</h2>',
    /** HTML to wrap each widget  */
    'before_widget' => '<section>',
    'after_widget'  => '</section>',
  );
  register_sidebar( $args );


 }
 add_action( 'widgets_init', 'add_widgets' );

?>



