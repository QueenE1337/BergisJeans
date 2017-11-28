<?php

  require('includes/reg_post_types.php');
  require('includes/reg_taxonomies.php');
  require('includes/reg_page_menu.php');

  add_image_size( 'desktop_grid', 300, 300, true );
  add_image_size( 'mobile_grid', 500, 500, true );
  add_image_size( 'desktop_single', 800, 800, false );
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
 ?>
