<?php
/*if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_products',
		'title' => 'Product',
		'fields' => array (
			array (
				'key' => 'field_5a268d96582fe',
				'label' => 'Material',
				'name' => 'material',
				'type' => 'checkbox',
				'required' => 0,
				'choices' => array (
					'Challis' => 'Challis',
					'Chambray' => 'Chambray',
					'Denim' => 'Denim',
					'Dobby' => 'Dobby',
					'Knit' => 'Knit',
					'Twill' => 'Twill',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_5a268e82582ff',
				'label' => 'Sizes',
				'name' => 'sizes',
				'type' => 'checkbox',
        'layout' => 'horizontal',
				'choices' => array (
					23 => 23,
					24 => 24,
					25 => 25,
					26 => 26,
					27 => 27,
					28 => 28,
					29 => 29,
					30 => 30,
					31 => 31,
					32 => 32,
					33 => 33,
					34 => 34,
					35 => 35,
					36 => 36,
					37 => 37,
					38 => 38,
					39 => 39,
					40 => 40,
					41 => 41,
					42 => 42,
					43 => 43,
					44 => 44,
					45 => 45,
					46 => 46,
					47 => 47,
					48 => 48,
					49 => 49,
					50 => 50,
					51 => 51,
					52 => 52,
					53 => 53,
					54 => 54,
					55 => 55,
					56 => 56,
					'XS' => 'XS',
					'S' => 'S',
					'M' => 'M',
					'L' => 'L',
					'XL' => 'XL',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_5a268eaf58300',
				'label' => 'Model',
				'name' => 'model',
				'type' => 'checkbox',
				'required' => 0,
				'choices' => array (
					'Skinny' => 'Skinny',
					'Slim fit' => 'Slim fit',
					'Regular' => 'Regular',
					'Boyfriend' => 'Boyfriend',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_5a268ef658301',
				'label' => 'Gender',
				'name' => 'gender',
				'type' => 'checkbox',
				'required' => 0,
				'choices' => array (
					'Men' => 'Men',
					'Women' => 'Women',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_5a268f3658302',
				'label' => '',
				'name' => '',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
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
}*/

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_acf-about',
		'title' => 'acf-about',
		'fields' => array (
			array (
				'key' => 'field_5a26cb3c3b947',
				'label' => 'Description title',
				'name' => 'description_title',
				'type' => 'text',
				'instructions' => 'Write the title for the description.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Who are Bergis?',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a26c1fa2a885',
				'label' => 'Description',
				'name' => 'description',
				'type' => 'textarea',
				'instructions' => 'Write a short description about what Bergis is.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5a26c29f2a886',
				'label' => 'Vision',
				'name' => 'vision',
				'type' => 'textarea',
				'instructions' => 'Write a short description of the company vision.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5a26c2ed2a887',
				'label' => 'Mission',
				'name' => 'mission',
				'type' => 'textarea',
				'instructions' => 'Write a short description about the mission.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5a26c30e2a888',
				'label' => 'History label',
				'name' => 'history_label',
				'type' => 'text',
				'instructions' => 'Write the lable for history of the company.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'It all started...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a26c3892a889',
				'label' => 'History description',
				'name' => 'history_description',
				'type' => 'textarea',
				'instructions' => 'A short description about the history.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5a26c3b12a88a',
				'label' => 'History image',
				'name' => 'history_image',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'object',
				'preview_size' => 'desktop_grid',
				'library' => 'all',
			),
		),
		'location' => array (
					array (
						array (
							'param' => 'page_template',
							'operator' => '==',
							'value' => 'about.php',
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
 ?>
