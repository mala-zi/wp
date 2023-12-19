<?php
add_action("init","goldy_fitnessclass_schedule_customizer",11);
function goldy_fitnessclass_schedule_customizer(){
// Class Schedule
	new \Kirki\Section(
		'goldy_fitness_class_schedule_section',
		[
			'title'       => esc_html__( 'Class Schedule', 'goldy-fitness' ),
			'panel'       => 'globly_theme_option',
			'priority'    => 150,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'goldy_fitness_class_schedule_main_title',
			'label'    => esc_html__( 'Class Schedule Title', 'goldy-fitness' ),
			'section'  => 'goldy_fitness_class_schedule_section',
			'default'  => esc_html__( 'Class Schedule', 'goldy-fitness' ),
			'priority' => 5,
			'partial_refresh'    => [
				'goldy_fitness_class_schedule_main_title' => [
					'selector'        => '.fitness_class_schedule_main_title',
					'render_callback' => function() {
					    return true;
					}
				],
			],
		]
	);

	// Get the list of categories
	$categories = get_terms(array(
	    'taxonomy' => 'fitness-categories',
	    'hide_empty' => false,
	));

	// Create an empty array to store the choices
	$category_choices = array();

	// Iterate over the categories and add them to the choices array
	foreach ($categories as $category) {
	    $category_choices[$category->term_id] = $category->name;
	}

	new \Kirki\Field\Select(
		[
			'settings'    => 'goldy_select_class_schedule_categories',
			'label'       => esc_html__( 'Select Class Categories', 'goldy-fitness' ),
			'description' => esc_html__( 'Select Class Categories To Display Class Schedule.', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_class_schedule_section',
			'multiple'    => 10,
			'choices'     => $category_choices,
		]
	);

	new \Kirki\Field\Repeater(
		[
			'settings' => 'goldy_select_class_schedule_time',
			'label'    => esc_html__( 'Schedule Time', 'goldy-fitness' ),
			'description' => esc_html__( 'Add value like this (ex. 08:00 am)', 'goldy-fitness' ),
			'row_label' => array( 'value' => 'Time' ),
			'section'  => 'goldy_fitness_class_schedule_section',
			'priority' => 15,
			'default'  => [
				[
					'time'    => '08:00 am',
				],
			],
			'fields'   => [
				'time'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'Time', 'goldy-fitness' ),
				],
			],
			'choices' => [
				'limit' => 100,
			]
		]
	);

	new \Kirki\Field\Image(
		[
			'settings'    => 'goldy_fitness_class_schedule_background_image',
			'label'       => esc_html__( 'Backgroung Image', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_class_schedule_section',
			'default'     => '',
			'priority'    => 20,
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'goldy_fitness_class_schedule_background_position',
			'label'       => esc_html__( 'Background Position', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_class_schedule_section',
			'default'     => 'center center',
			'priority'    => 25,
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
					'element'  => '.fitness_class_schedule_section',
					'property' => 'background-position',
					'suffix' 	  => '!important',
				),
			),
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'goldy_fitness_class_schedule_background_attachment',
			'label'       => esc_html__( 'Background Attachment', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_class_schedule_section',
			'default'     => 'scroll',
			'priority'    => 30,
			'placeholder' => esc_html__( 'Choose an option', 'goldy-fitness' ),
			'choices'     => [
				'scroll' => esc_html__( 'Scroll', 'goldy-fitness' ),
				'fixed' => esc_html__( 'Fixed', 'goldy-fitness' ),
			],
			'output' => array(
				array(
					'element'  => '.fitness_class_schedule_section',
					'property' => 'background-attachment',
					'suffix' 	  => '!important',
				),
			),
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'goldy_fitness_class_schedule_background_size',
			'label'       => esc_html__( 'Background Size', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_class_schedule_section',
			'default'     => 'cover',
			'priority'    => 35,
			'placeholder' => esc_html__( 'Choose an option', 'goldy-fitness' ),
			'choices'     => [
				'auto' => esc_html__( 'Auto', 'goldy-fitness' ),
				'cover' => esc_html__( 'Cover', 'goldy-fitness' ),
				'contain' => esc_html__( 'Contain', 'goldy-fitness' ),
			],
			'output' => array(
				array(
					'element'  => '.fitness_class_schedule_section',
					'property' => 'background-size',
					'suffix' 	  => '!important',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_class_bg_color',
			'label'       => __( 'Background Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_class_schedule_section',
			'default'     => '#ffffff',
			'priority'    => 40,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.fitness_class_schedule_section',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_class_main_title_color',
			'label'       => __( 'Main Title Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_class_schedule_section',
			'default'     => '#333333',
			'priority'    => 45,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.fitness_class_schedule_main_title h2',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_class_table_head_text_color',
			'label'       => __( 'Table Heading Text Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_class_schedule_section',
			'default'     => '#333333',
			'priority'    => 50,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.fitness_class_day',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_class_table_head_bg_color',
			'label'       => __( 'Table Heading Backgroung Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_class_schedule_section',
			'default'     => '#f0f2f4',
			'priority'    => 60,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.fitness_class_day',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_class_table_time_text_color',
			'label'       => __( 'Table Time Text Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_class_schedule_section',
			'default'     => '#646c71',
			'priority'    => 65,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => 'td.fitness_table_hours',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_class_table_time_bg_color',
			'label'       => __( 'Table Time Backgroung Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_class_schedule_section',
			'default'     => 'rgba(255, 255, 255, 0)',
			'priority'    => 70,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => 'td.fitness_table_hours',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_class_table_post_title_text_color',
			'label'       => __( 'Table Post Title Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_class_schedule_section',
			'default'     => '#000000',
			'priority'    => 75,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.fitness_class_style a',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_class_table_post_title_text_hover_color',
			'label'       => __( 'Table Post Title Hover Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_class_schedule_section',
			'default'     => '#000000',
			'priority'    => 80,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.fitness_class_style a:hover',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_class_table_post_desc_color',
			'label'       => __( 'Table Post description Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_class_schedule_section',
			'default'     => '#000000',
			'priority'    => 85,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => 'p.fitnes_event_subtitle',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_class_table_post_bg_color',
			'label'       => __( 'Table Post Title Backgroung Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_class_schedule_section',
			'default'     => '#ffffff',
			'priority'    => 90,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.fitnes_event_inner_content',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_fitness_class_table_border_color',
			'label'       => __( 'Table Border Color', 'goldy-fitness' ),
			'section'     => 'goldy_fitness_class_schedule_section',
			'default'     => '#e4e4eb',
			'priority'    => 95,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.fitness_table_main thead th, .fitness_table_main tbody td',
					'property' => 'border-color',
					'suffix'   => '!important',
				),
			),
		]
	);

}

?>