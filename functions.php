
<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_material',
		'title' => 'Material',
		'fields' => array (
			array (
				'key' => 'field_5a25660ca2447',
				'label' => 'Material',
				'name' => 'Material',
				'type' => 'checkbox',
				'required' => 1,
				'choices' => array (
					'mocka' => 'Mocka',
					'denim' => 'Denim',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'products',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

  require('includes/reg_post_types.php');
  require('includes/reg_taxonomies.php');
  require('includes/reg_page_menu.php');
  require('includes/widget.php');

  add_image_size( 'desktop_grid', 300, 300, true );
  add_image_size( 'mobile_grid', 500, 500, true );
  add_image_size( 'desktop_single', 800, 800, false );
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
 ?>
