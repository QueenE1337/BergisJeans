<?php

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
				'key' => 'field_5a27c0e33d085',
				'label' => 'History year by year',
				'name' => 'history_year_by_year',
				'type' => 'wysiwyg',
				'instructions' => 'Write the year and the text about that specific year. Make sure to make the year bold.',
				'placeholder' => '',
				'required' => 1,
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
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
							0 => 'the_content',
						),
				),
				'menu_order' => 0,
			));
}
 ?>
