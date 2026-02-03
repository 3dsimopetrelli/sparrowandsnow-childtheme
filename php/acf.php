<?php

if( function_exists('acf_add_local_field_group') ):

/* CAMPI PER IL BLOG */

acf_add_local_field_group(array(
	'key' => 'group_5a21ce1dedf50',
	'title' => 'Post',
	'fields' => array(
		array(
			'key' => 'field_5a21ce287b8ef',
			'label' => 'Read Time',
			'name' => 'read_time',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

/* CAMPI PER PRODOTTO WP THEME */

acf_add_local_field_group(array(
	'key' => 'group_59e9c830b92cc',
	'title' => 'Prodotto',
	'fields' => array(
		array(
			'key' => 'field_59e9c83652176',
			'label' => 'Url Demo link',
			'name' => 'demo_link_url',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		
		
		array(
			'key' => 'field_5a3bac29517f7',
			'label' => 'Versione',
			'name' => 'versione',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Theme Version: 1.0.0',
			'placeholder' => 'Theme Version: 1.0.0',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a3bac29517f73',
			'label' => 'Documentazione',
			'name' => 'Documentazione',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Documentation: Freyja',
			'placeholder' => 'Documentation: Freyja',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),

		
		array(
			'key' => 'field_5a3bac29517f73345',
			'label' => 'Video Tutorial',
			'name' => 'video-tutorial',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Video tutorial: Playlist',
			'placeholder' => 'Video tutorial: Playlist',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),

		array(
			'key' => 'field_5a3bac29517f733445',
			'label' => 'Compatibility',
			'name' => 'compatibility',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Software: WordPress 4.8 +',
			'placeholder' => 'Software: WordPress 4.8 +',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
			array(
				array(
					'param' => 'post_taxonomy',
					'operator' => '==',
					'value' => 'product_cat:wordpress-themes',
				),
			),
		),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));



acf_add_local_field_group(array(
	'key' => 'product_settings_group',
	'title' => 'Product Settings - Immagine della pagina my admin',
	'fields' => array (
		array (
			'key' => 'product_images_key',
			'label' => 'Images',
			'name' => 'product_images',
			'type' => 'repeater',
			'sub_fields' => array(
				array(
					'key' => 'product_image_key',
					'label' => 'Image',
					'name' => 'product_image',
					'type' => 'image',
				),
			),
		)
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'product',
			),
		),
	),
));
	
	
	
//
// CAMPO PER INSERIRE PRODOTTO FREE
//
	
	add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key' => 'group_6454c6d521f58',
		'title' => 'Pulsante Free products nella pagina prodotti',
		'fields' => array(
			array(
				'key' => 'field_6454c7890baa1',
				'label' => 'Campo sezione HTML pulsante Prodotti FREE',
				'name' => 'campo_sezione_html_pulsante',
				'aria-label' => '',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'rows' => '',
				'placeholder' => '',
				'new_lines' => '',
			),
			array(
				'key' => 'field_6454ea0fed990',
				'label' => 'HTML da copiare',
				'name' => '',
				'aria-label' => '',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '<div class="wrap_free_box">
	<h2 class="elementor-heading-title elementor-size-default">
	Personal / Demo version
	</h2>
	<a href="#" class="freebiedownload single_add_to_cart_button button alt wp-element-button" role="button">
	Free Download
	</a>
	</div>',
				'new_lines' => 'wpautop',
				'esc_html' => 1,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	) );
} );



// Campo per creare immagine prodotto stile GIF


	acf_add_local_field_group(array(
		'key' => 'group_64246403ade8a',
		'title' => 'Image GIF Products',
		'fields' => array(
			array(
				'key' => 'field_64246404f1ff5',
				'label' => 'Preview GIF Image 1',
				'name' => 'preview_gif_image_1',
				'aria-label' => '',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'id',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
				'preview_size' => 'medium',
			),
			array(
				'key' => 'field_642464754d313',
				'label' => 'Preview GIF Image 2',
				'name' => 'preview_gif_image_2',
				'aria-label' => '',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'id',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
				'preview_size' => 'medium',
			),
			array(
				'key' => 'field_6437dfb398977',
				'label' => 'GIF',
				'name' => 'gif',
				'aria-label' => '',
				'type' => 'radio',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'on' => 'On',
					'off' => 'Off',
				),
				'default_value' => 'off',
				'return_format' => 'value',
				'allow_null' => 0,
				'other_choice' => 0,
				'layout' => 'vertical',
				'save_other_choice' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));
	
	
	
// Sales table PER PROMUOVERE OFFERTE IN HOME PAGE

	acf_add_local_field_group(array(
		'key' => 'group_640f28d242fd6',
		'title' => 'Sales Table',
		'fields' => array(
			array(
				'key' => 'field_640f2b00cb432',
				'label' => 'Sales Table',
				'name' => 'sas_sales_table',
				'aria-label' => '',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layout' => 'table',
				'pagination' => 0,
				'min' => 0,
				'max' => 0,
				'collapsed' => '',
				'button_label' => 'Add Row',
				'rows_per_page' => 20,
				'sub_fields' => array(
					array(
						'key' => 'field_640f2b1ecb433',
						'label' => 'Product URL',
						'name' => 'product_url',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'http',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'parent_repeater' => 'field_640f2b00cb432',
					),
					array(
						'key' => 'field_640f2b45cb434',
						'label' => 'Product name',
						'name' => 'product_name',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'Name',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'parent_repeater' => 'field_640f2b00cb432',
					),
					array(
						'key' => 'field_640f2b56cb435',
						'label' => 'Product category',
						'name' => 'product_category',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'Mockup',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'parent_repeater' => 'field_640f2b00cb432',
					),
					array(
						'key' => 'field_640f2b64cb436',
						'label' => 'Original price',
						'name' => 'original_price',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '--900$--',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'parent_repeater' => 'field_640f2b00cb432',
					),
					array(
						'key' => 'field_640f2b77cb437',
						'label' => 'Discounted price',
						'name' => 'discounted_price',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '$499',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'parent_repeater' => 'field_640f2b00cb432',
					),
					array(
						'key' => 'field_641047e031a33',
						'label' => 'Discount percentage',
						'name' => 'discount_percentage',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '[+85% off]',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'parent_repeater' => 'field_640f2b00cb432',
					),
					array(
						'key' => 'field_640f2b9bcb438',
						'label' => 'Preview image',
						'name' => 'preview_image',
						'aria-label' => '',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'id',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
						'preview_size' => 'medium',
						'parent_repeater' => 'field_640f2b00cb432',
					),
					array(
						'key' => 'field_640f2bb3cb439',
						'label' => 'Animation',
						'name' => 'animation',
						'aria-label' => '',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'rotate-right' => 'Right',
							'rotate-left' => 'Left',
						),
						'default_value' => false,
						'return_format' => 'value',
						'multiple' => 0,
						'allow_null' => 0,
						'ui' => 0,
						'ajax' => 0,
						'placeholder' => '',
						'parent_repeater' => 'field_640f2b00cb432',
					),
					array(
						'key' => 'field_640f2d105ddd6',
						'label' => 'Label text',
						'name' => 'label_text',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'SALE',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'parent_repeater' => 'field_640f2b00cb432',
					),
					array(
						'key' => 'field_640f2d215ddd7',
						'label' => 'Color label',
						'name' => 'color_label',
						'aria-label' => '',
						'type' => 'color_picker',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'enable_opacity' => 0,
						'return_format' => 'string',
						'parent_repeater' => 'field_640f2b00cb432',
					),
array(
						'key' => 'field_640f2d215ddd72',
						'label' => 'Color text label',
						'name' => 'color_text_label',
						'aria-label' => '',
						'type' => 'color_picker',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'enable_opacity' => 0,
						'return_format' => 'string',
						'parent_repeater' => 'field_640f2b00cb432',
					),


				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'theme-general-settings',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));


//Tag Shop Page
	acf_add_local_field_group( array(
		'key' => 'group_645681f62900a',
		'title' => 'Tag Shop Page',
		'fields' => array(
			array(
				'key' => 'field_645681f6f3535',
				'label' => 'Shop page',
				'name' => 'shop_page',
				'aria-label' => '',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => 'Enable Tag in Shop Filters',
				'default_value' => 0,
				'ui' => 0,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => 'product_tag',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	) );

	acf_add_local_field_group( array(
		'key' => 'group_645ce67ec58a9',
		'title' => 'Products Labels',
		'fields' => array(
			array(
				'key' => 'field_645ce6804306c',
				'label' => 'Labels',
				'name' => 'labels',
				'aria-label' => '',
				'type' => 'radio',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'bundle' => 'Bundle',
					'updated' => 'Updated',
					'new' => 'New',
					'freebie' => 'Freebie',
				),
				'default_value' => '',
				'return_format' => 'value',
				'allow_null' => 1,
				'other_choice' => 0,
				'layout' => 'vertical',
				'save_other_choice' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	) );	
	
endif;

?>