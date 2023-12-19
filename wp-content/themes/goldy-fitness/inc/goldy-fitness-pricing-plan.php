<?php
add_action("init","goldy_fitness_pricing_plan_customizer",12);
function goldy_fitness_pricing_plan_customizer(){
// Restaurant Menu
	new \Kirki\Section(
		'goldy_fitness_pricing_plan_section',
		[
			'title'       => esc_html__( 'Pricing Plan', 'goldy-fitness' ),
			'panel'       => 'globly_theme_option',
			'priority'    => 150,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'goldy_fitness_pricing_plan_main_title',
			'label'    => esc_html__( 'Pricing Plan Title', 'goldy-fitness' ),
			'section'  => 'goldy_fitness_pricing_plan_section',
			'default'  => esc_html__( 'Pricing Plan', 'goldy-fitness' ),
			'priority' => 5,
			'partial_refresh'    => [
				'goldy_fitness_pricing_plan_main_title' => [
					'selector'        => '.pricing_plan_title',
					'render_callback' => function() {
					    return true;
					}
				],
			],
		]
	);

	new \Kirki\Field\Repeater(
		[
			'settings' => 'goldy_fitness_pricing_plan_content',
			'label'    => esc_html__( 'Pricing Plan Content', 'goldy-fitness' ),
			'row_label' => array( 'value' => 'Info item' ),
			'section'  => 'goldy_fitness_pricing_plan_section',
			'priority' => 10,
			'default'  => [
				[
					'image'    => '',
					'price_value'    => '$120',
					'plan_time'    => 'Per Month',
					'plan_type'    => 'BASIC',
					'plan_description'    => 'Lorem ipsum dolor sit amet, consectetur aditpisicing elit, sed do eiusmod tempor incididunt ut labore.',	
					'link_text'    => 'Select Plan',	
					'link_url'    => '#',	
				],
				[
					'image'    => '',
					'price_value'    => '$160',
					'plan_time'    => 'Per Month',
					'plan_type'    => 'STANDARD',
					'plan_description'    => 'Lorem ipsum dolor sit amet, consectetur aditpisicing elit, sed do eiusmod tempor incididunt ut labore.',	
					'link_text'    => 'Select Plan',	
					'link_url'    => '#',	
				],
				[
					'image'    => '',
					'price_value'    => '$190',
					'plan_time'    => 'Per Month',
					'plan_type'    => 'PREMIUM',
					'plan_description'    => 'Lorem ipsum dolor sit amet, consectetur aditpisicing elit, sed do eiusmod tempor incididunt ut labore.',	
					'link_text'    => 'Select Plan',	
					'link_url'    => '#',	
				],
			],
			'fields'   => [
				'image'    => [
					'type'		  => 'image',
					'label'       => esc_html__( 'Image:', 'goldy-fitness' ),
				],
				'price_value'    => [
					'type'		  => 'text',
					'label'       => esc_html__( 'Plan Price:', 'goldy-fitness' ),
				],
				'plan_time'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'Time', 'goldy-fitness' ),
				],
				'plan_type'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'Plan Type', 'goldy-fitness' ),
				],
				'plan_description'    => [
					'type'        => 'textarea',
					'label'       => esc_html__( 'About Plan', 'goldy-fitness' ),
				],
				'link_text'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'Link Text:', 'goldy-fitness' ),
				],
				'link_url'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'Link URL:', 'goldy-fitness' ),
				],
			],
			'choices' => [
				'limit' => 3,
			]
		]
	);

	new \Kirki\Field\Image(
		[
			'settings'    => 'goldy_fitness_pricing_plan_background_image',
			'label'       => esc_html__( 'Backgroung Image', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_pricing_plan_section',
			'default'     => '',
			'priority'    => 15,
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'goldy_fitness_pricing_plan_background_position',
			'label'       => esc_html__( 'Background Position', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_pricing_plan_section',
			'default'     => 'center center',
			'priority'    => 20,
			'placeholder' => esc_html__( 'Choose an option', 'goldy-fitness' ),
			'choices'     => [
				'left top' => esc_html__( 'Left Top', 'goldy-fitness' ),
				'left center' => esc_html__( 'Left Center', 'goldy-fitness' ),
				'left bottom' => esc_html__( 'Left Bottom', 'goldy-fitness' ),
				'right top' => esc_html__( 'Right Top', 'goldy-fitness' ),
				'right center' => esc_html__( 'Right Center', 'goldy-fitness' ),
				'right bottom' => esc_html__( 'Right Bottom', 'goldy-fitness' ),
				'center top' => esc_html__( 'Center Top', 'goldy-fitness' ),
				'center center' => esc_html__( 'Center Center', 'goldy-fitness' ),
				'center bottom' => esc_html__( 'Center Bottom', 'goldy-fitness' ),
			],
			'output' => array(
				array(
					'element'  => '.fitness_pricing_plan_section',
					'property' => 'background-position',
					'suffix' 	  => '!important',
				),
			),
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'goldy_fitness_pricing_plan_background_attachment',
			'label'       => esc_html__( 'Background Attachment', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_pricing_plan_section',
			'default'     => 'scroll',
			'priority'    => 25,
			'placeholder' => esc_html__( 'Choose an option', 'goldy-fitness' ),
			'choices'     => [
				'scroll' => esc_html__( 'Scroll', 'goldy-fitness' ),
				'fixed' => esc_html__( 'Fixed', 'goldy-fitness' ),
			],
			'output' => array(
				array(
					'element'  => '.fitness_pricing_plan_section',
					'property' => 'background-attachment',
					'suffix' 	  => '!important',
				),
			),
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'goldy_fitness_pricing_plan_background_size',
			'label'       => esc_html__( 'Background Size', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_pricing_plan_section',
			'default'     => 'cover',
			'priority'    => 30,
			'placeholder' => esc_html__( 'Choose an option', 'goldy-fitness' ),
			'choices'     => [
				'auto' => esc_html__( 'Auto', 'goldy-fitness' ),
				'cover' => esc_html__( 'Cover', 'goldy-fitness' ),
				'contain' => esc_html__( 'Contain', 'goldy-fitness' ),
			],
			'output' => array(
				array(
					'element'  => '.fitness_pricing_plan_section',
					'property' => 'background-size',
					'suffix' 	  => '!important',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_pricing_plan_bg_color',
			'label'       => __( 'Background Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 35,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.fitness_pricing_plan_section',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_pricing_plan_text_color',
			'label'       => __( 'Title Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_pricing_plan_section',
			'default'     => '#333',
			'priority'    => 40,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing_plan_title h2',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_pricing_plan_content_bg_color',
			'label'       => __( 'Contain Background Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_pricing_plan_section',
			'default'     => '#1e1e1e',
			'priority'    => 45,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing-plan-inner-wrapper',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_pricing_plan_content_price_color',
			'label'       => __( 'Contain Price Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_pricing_plan_section',
			'default'     => '#c1e503',
			'priority'    => 50,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_first_content h2',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_pricing_plan_content_hover_price_color',
			'label'       => __( 'Contain Hover Price Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 55,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing-plan-inner-wrapper:hover .pp_first_content h2',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_pricing_plan_content_text_color',
			'label'       => __( 'Contain Text Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 60,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_first_content p, .pp_second_content',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_pricing_plan_content_hover_text_color',
			'label'       => __( 'Contain Hover Text Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 65,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing-plan-inner-wrapper:hover .pp_first_content p, .pricing-plan-inner-wrapper:hover .pp_second_content',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_pricing_plan_button_bg_color',
			'label'       => __( 'Button Background Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_pricing_plan_section',
			'default'     => '#c1e503',
			'priority'    => 70,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_pricing_plan_button_bg_hover_color',
			'label'       => __( 'Background Hover Color', 'kirki' ),
			'section'     => 'goldy_fitness_pricing_plan_section',
			'default'     => '#000000',
			'priority'    => 75,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons::after',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_pricing_plan_button_text_color',
			'label'       => __( 'Button Text Color', 'kirki' ),
			'section'     => 'goldy_fitness_pricing_plan_section',
			'default'     => '#000000',
			'priority'    => 80,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_pricing_plan_button_texthover_color',
			'label'       => __( 'Button Text Hover Color', 'kirki' ),
			'section'     => 'goldy_fitness_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 85,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons:hover',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_pricing_plan_button_border_color',
			'label'       => __( 'Border Color', 'kirki' ),
			'section'     => 'goldy_fitness_pricing_plan_section',
			'default'     => '#c1e503',
			'priority'    => 90,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons',
					'property' => 'border-color',
					'suffix'  => ' !important'
				),
			),
		]
	);
}

?>