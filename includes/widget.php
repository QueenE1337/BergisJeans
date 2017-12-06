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

  $args = array(
     'id'            => 'ceo-info',
     /** Visible name in the Admin Dashboard Widget page */
     'name'          => __( 'CEO Info', 'post_theme' ),
     /** Visible description in the Admin Dashboard Widget page */
     'description'   => __( 'A short decription of Annelie', 'post_theme' ),

     /** HTML to wrap widget title in  */
     'before_title'  => '<h3>',
     'after_title'   => '</h3>',
     /** HTML to wrap each widget  */
     'before_widget' => '<section>',
     'after_widget'  => '</section>',
   );
   register_sidebar( $args );

   $args = array(
      'id'            => 'contact-time',
      /** Visible name in the Admin Dashboard Widget page */
      'name'          => __( 'Contact time', 'post_theme' ),
      /** Visible description in the Admin Dashboard Widget page */
      'description'   => __( 'Write your contact information when you are available', 'post_theme' ),

      /** HTML to wrap widget title in  */
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
      /** HTML to wrap each widget  */
      'before_widget' => '<section>',
      'after_widget'  => '</section>',
    );
    register_sidebar( $args );

    $args = array(
      'id'            => 'footer-contact',
      /** Visible name in the Admin Dashboard Widget page */
      'name'          => __( 'Contact in footer', 'post_theme' ),
      /** Visible description in the Admin Dashboard Widget page */
      'description'   => __( 'The contact information in the footer.', 'post_theme' ),

      /** HTML to wrap widget title in  */
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
      /** HTML to wrap each widget  */
      'before_widget' => '<section>',
      'after_widget'  => '</section>',
    );
    register_sidebar( $args );


    $args = array(
      'id'            => 'footer-socialmedia',
      /** Visible name in the Admin Dashboard Widget page */
      'name'          => __( 'Social Media in footer', 'post_theme' ),
      /** Visible description in the Admin Dashboard Widget page */
      'description'   => __( 'The social media information in the footer.', 'post_theme' ),

      /** HTML to wrap widget title in  */
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
      /** HTML to wrap each widget  */
      'before_widget' => '<section>',
      'after_widget'  => '</section>',
    );
    register_sidebar( $args );


 }
 add_action( 'widgets_init', 'add_widgets' );

?>
