<?php
// Register Custom Post Type
function news_post_type() {

$labels = array(
  'name'                  => _x( 'News', 'Post Type General Name', 'post_theme' ),
  'singular_name'         => _x( 'News', 'Post Type Singular Name', 'post_theme' ),
  'menu_name'             => __( 'News', 'post_theme' ),
  'name_admin_bar'        => __( 'Post Type', 'post_theme' ),
  'archives'              => __( 'News Archives', 'post_theme' ),
  'attributes'            => __( 'News Attributes', 'post_theme' ),
  'parent_item_colon'     => __( 'Parent Item:', 'post_theme' ),
  'all_items'             => __( 'All News', 'post_theme' ),
  'add_new_item'          => __( 'Add New News Item', 'post_theme' ),
  'add_new'               => __( 'Add New', 'post_theme' ),
  'new_item'              => __( 'New Item', 'post_theme' ),
  'edit_item'             => __( 'Edit Item', 'post_theme' ),
  'update_item'           => __( 'Update Item', 'post_theme' ),
  'view_item'             => __( 'View Item', 'post_theme' ),
  'view_items'            => __( 'View Items', 'post_theme' ),
  'search_items'          => __( 'Search Item', 'post_theme' ),
  'not_found'             => __( 'No news found', 'post_theme' ),
  'not_found_in_trash'    => __( 'No news found in Trash', 'post_theme' ),
  'featured_image'        => __( 'Featured Image', 'post_theme' ),
  'set_featured_image'    => __( 'Set featured image', 'post_theme' ),
  'remove_featured_image' => __( 'Remove featured image', 'post_theme' ),
  'use_featured_image'    => __( 'Use as featured image', 'post_theme' ),
  'insert_into_item'      => __( 'Insert into item', 'post_theme' ),
  'uploaded_to_this_item' => __( 'Uploaded to this item', 'post_theme' ),
  'items_list'            => __( 'Items list', 'post_theme' ),
  'items_list_navigation' => __( 'Items list navigation', 'post_theme' ),
  'filter_items_list'     => __( 'Filter items list', 'post_theme' ),
);
$args = array(
  'label'                 => __( 'News', 'post_theme' ),
  'description'           => __( 'Bergis latest news', 'post_theme' ),
  'labels'                => $labels,
  'supports'              => array( 'title', 'editor', 'thumbnail' ),
  'hierarchical'          => false,
  'public'                => true,
  'show_ui'               => true,
  'show_in_menu'          => true,
  'menu_position'         => 5,
  'show_in_admin_bar'     => true,
  'show_in_nav_menus'     => true,
  'can_export'            => true,
  'has_archive'           => true,
  'exclude_from_search'   => false,
  'publicly_queryable'    => true,
  'capability_type'       => 'page',
);
register_post_type( 'news', $args );

}
add_action( 'init', 'news_post_type', 0 );
 ?>
