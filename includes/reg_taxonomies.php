<?php
function create_project_taxonomies() {

	$args = array(
    'label'                     => 'Material',
    'hierarchical'               => false,
    'public'                     => true,
  );
//'product_material', ' product_size', ' product_model', ' product_sex'
  register_taxonomy( 'product_material', array('products'), $args );

  $args = array(
    'label'                     => 'Model',
    'hierarchical'               => false,
    'public'                     => true,
  );

  register_taxonomy( 'product_model', array('products'), $args );

  $args = array(
    'label'                     => 'Gender',
    'hierarchical'               => false,
    'public'                     => true,
  );

  register_taxonomy( 'product_sex', array('products'), $args );

}

add_action( 'init', 'create_project_taxonomies' );

 ?>
