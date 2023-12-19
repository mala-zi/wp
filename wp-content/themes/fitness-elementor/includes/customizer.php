<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fitness_elementor_logo_resizer',
		'label'       => esc_html__( 'Adjust Logo Size', 'fitness-elementor' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'fitness-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_elementor_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'fitness-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-elementor' ),
			'off' => esc_html__( 'Disable', 'fitness-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_elementor_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'fitness-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-elementor' ),
			'off' => esc_html__( 'Disable', 'fitness-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'fitness_elementor_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'fitness_elementor_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	// TYPOGRAPHY SETTINGS
	Kirki::add_panel( 'fitness_elementor_typography_panel', array(
		'priority' => 10,
		'title'    => __( 'Typography', 'fitness-elementor' ),
	) );

	//Heading 1 Section

	Kirki::add_section( 'fitness_elementor_h1_typography_setting', array(
		'title'    => __( 'Heading 1', 'fitness-elementor' ),
		'panel'    => 'fitness_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_h1_typography_heading',
		'section'     => 'fitness_elementor_h1_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 1 Typography', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'fitness_elementor_h1_typography_font',
		'section'   =>  'fitness_elementor_h1_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Epilogue',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h1',
				'suffix' => '!important'
			],
		],
	) );


	//Heading 2 Section

	Kirki::add_section( 'fitness_elementor_h2_typography_setting', array(
		'title'    => __( 'Heading 2', 'fitness-elementor' ),
		'panel'    => 'fitness_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_h2_typography_heading',
		'section'     => 'fitness_elementor_h2_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 2 Typography', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'fitness_elementor_h2_typography_font',
		'section'   =>  'fitness_elementor_h2_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Epilogue',
			'font-size'       => '',
			'variant'       =>  '700',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h2',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 3 Section

	Kirki::add_section( 'fitness_elementor_h3_typography_setting', array(
		'title'    => __( 'Heading 3', 'fitness-elementor' ),
		'panel'    => 'fitness_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_h3_typography_heading',
		'section'     => 'fitness_elementor_h3_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 3 Typography', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'fitness_elementor_h3_typography_font',
		'section'   =>  'fitness_elementor_h3_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Epilogue',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h3',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 4 Section

	Kirki::add_section( 'fitness_elementor_h4_typography_setting', array(
		'title'    => __( 'Heading 4', 'fitness-elementor' ),
		'panel'    => 'fitness_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_h4_typography_heading',
		'section'     => 'fitness_elementor_h4_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 4 Typography', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'fitness_elementor_h4_typography_font',
		'section'   =>  'fitness_elementor_h4_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Epilogue',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h4',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 5 Section

	Kirki::add_section( 'fitness_elementor_h5_typography_setting', array(
		'title'    => __( 'Heading 5', 'fitness-elementor' ),
		'panel'    => 'fitness_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_h5_typography_heading',
		'section'     => 'fitness_elementor_h5_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 5 Typography', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'fitness_elementor_h5_typography_font',
		'section'   =>  'fitness_elementor_h5_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Epilogue',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h5',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 6 Section

	Kirki::add_section( 'fitness_elementor_h6_typography_setting', array(
		'title'    => __( 'Heading 6', 'fitness-elementor' ),
		'panel'    => 'fitness_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_h6_typography_heading',
		'section'     => 'fitness_elementor_h6_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 6 Typography', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'fitness_elementor_h6_typography_font',
		'section'   =>  'fitness_elementor_h6_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Epilogue',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h6',
				'suffix' => '!important'
			],
		],
	) );

	//body Typography

	Kirki::add_section( 'fitness_elementor_body_typography_setting', array(
		'title'    => __( 'Content Typography', 'fitness-elementor' ),
		'panel'    => 'fitness_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_body_typography_heading',
		'section'     => 'fitness_elementor_body_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content  Typography', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'fitness_elementor_body_typography_font',
		'section'   =>  'fitness_elementor_body_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Raleway',
			'variant'       =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   => 'body',
				'suffix' => '!important'
			],
		],
	) );

	// Theme Options Panel
	Kirki::add_panel( 'fitness_elementor_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'fitness-elementor' ),
	) );

	// HEADER SECTION

	Kirki::add_section( 'fitness_elementor_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'fitness-elementor' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'fitness-elementor' ),
	    'panel'    => 'fitness_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_header_phone_number_heading',
		'section'     => 'fitness_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fitness_elementor_header_phone_number',
		'section'  => 'fitness_elementor_section_header',
		'default'  => '',
		'sanitize_callback' => 'fitness_elementor_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_enable_location_heading',
		'section'     => 'fitness_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Address', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fitness_elementor_header_location',
		'section'  => 'fitness_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_enable_email_heading',
		'section'     => 'fitness_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Email Address', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fitness_elementor_header_email',
		'section'  => 'fitness_elementor_section_header',
		'default'  => '',
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_elementor_cart_box_enable',
		'label'       => esc_html__( 'Enable/Disable Shopping Cart', 'fitness-elementor' ),
		'section'     => 'fitness_elementor_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-elementor' ),
			'off' => esc_html__( 'Disable', 'fitness-elementor' ),
		],
	] );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_elementor_search_enable',
		'label'       => esc_html__( 'Enable/Disable Search', 'fitness-elementor' ),
		'section'     => 'fitness_elementor_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-elementor' ),
			'off' => esc_html__( 'Disable', 'fitness-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_enable_socail_link',
		'section'     => 'fitness_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'fitness_elementor_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'fitness-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'fitness-elementor' ),
		'settings'     => 'fitness_elementor_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'fitness-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'fitness-elementor' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'fitness-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'fitness-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

	
	//ADDITIONAL SETTINGS

	Kirki::add_section( 'fitness_elementor_additional_setting', array(
		'title'          => esc_html__( 'Additional Settings', 'fitness-elementor' ),
		'description'    => esc_html__( 'Additional Settings of themes', 'fitness-elementor' ),
		'panel'    => 'fitness_elementor_theme_options_panel',
		'priority'       => 10,
	) );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fitness_elementor_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'fitness-elementor' ),
		'section'     => 'fitness_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_single_page_layout_heading',
		'section'     => 'fitness_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'fitness_elementor_single_page_layout',
		'section'     => 'fitness_elementor_additional_setting',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'fitness-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'fitness-elementor' ),
			'One Column' => esc_html__( 'One Column', 'fitness-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_header_background_attachment_heading',
		'section'     => 'fitness_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'fitness_elementor_header_background_attachment',
		'section'     => 'fitness_elementor_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'fitness-elementor' ),
			'fixed' => esc_html__( 'Fixed', 'fitness-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_header_overlay_heading',
		'section'     => 'fitness_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Overlay', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'fitness_elementor_header_overlay_setting',
		'label'       => __( 'Overlay Color', 'fitness-elementor' ),
		'type'        => 'color',
		'section'     => 'fitness_elementor_additional_setting',
		'transport' => 'auto',
		'default'     => '#00000066',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.header-image-box:before',
				'property' => 'background',
			),
		),
	) );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fitness_elementor_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'fitness-elementor' ),
		'section'     => 'fitness_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fitness_elementor_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'fitness-elementor' ),
		'section'     => 'fitness_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'fitness_elementor_blog_post', array(
		'title'          => esc_html__( 'Post Settings', 'fitness-elementor' ),
		'description'    => esc_html__( 'Here you can add post information.', 'fitness-elementor' ),
		'panel'    => 'fitness_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_post_layout_heading',
		'section'     => 'fitness_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Layout', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'fitness_elementor_post_layout',
		'section'     => 'fitness_elementor_blog_post',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'fitness-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'fitness-elementor' ),
			'One Column' => esc_html__( 'One Column', 'fitness-elementor' ),
			'Three Columns' => esc_html__( 'Three Columns', 'fitness-elementor' ),
			'Four Columns' => esc_html__( 'Four Columns', 'fitness-elementor' ),
		],
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fitness_elementor_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'fitness-elementor' ),
		'section'     => 'fitness_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fitness_elementor_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'fitness-elementor' ),
		'section'     => 'fitness_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fitness_elementor_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'fitness-elementor' ),
		'section'     => 'fitness_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fitness_elementor_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'fitness-elementor' ),
		'section'     => 'fitness_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_length_setting_heading',
		'section'     => 'fitness_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'fitness_elementor_length_setting',
		'section'     => 'fitness_elementor_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
						'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'fitness-elementor' ),
		'settings'    => 'fitness_elementor_single_post_tag',
		'section'     => 'fitness_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'fitness-elementor' ),
		'settings'    => 'fitness_elementor_single_post_category',
		'section'     => 'fitness_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fitness_elementor_post_comment_show_hide',
		'label'       => esc_html__( 'Show / Hide Comment Box', 'fitness-elementor' ),
		'section'     => 'fitness_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fitness_elementor_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'fitness-elementor' ),
		'section'     => 'fitness_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_single_post_radius',
		'section'     => 'fitness_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'fitness_elementor_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'fitness-elementor' ),
		'type'        => 'text',
		'section'     => 'fitness_elementor_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );
	    
	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'fitness_elementor_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'fitness-elementor' ),
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'fitness-elementor' ),
		'panel'    => 'woocommerce',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fitness_elementor_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'fitness-elementor' ),
		'section'     => 'fitness_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'fitness-elementor' ),
		'settings'    => 'fitness_elementor_shop_page_layout',
		'section'     => 'fitness_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'fitness-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'fitness-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'fitness_elementor_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'fitness-elementor' ),
		'settings'    => 'fitness_elementor_products_per_row',
		'section'     => 'fitness_elementor_woocommerce_settings',
		'default'     => '3',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'fitness-elementor' ),
		'settings'    => 'fitness_elementor_products_per_page',
		'section'     => 'fitness_elementor_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fitness_elementor_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'fitness-elementor' ),
		'section'     => 'fitness_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'fitness-elementor' ),
		'settings'    => 'fitness_elementor_single_product_sidebar_layout',
		'section'     => 'fitness_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'fitness-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'fitness-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'fitness_elementor_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_products_button_border_radius_heading',
		'section'     => 'fitness_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Products Button Border Radius', 'fitness-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fitness_elementor_products_button_border_radius',
		'section'     => 'fitness_elementor_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
		'choices'  => [
					'min'  => 1,
					'max'  => 50,
					'step' => 1,
				],
		'output' => array(
			array(
				'element'  => array('.woocommerce ul.products li.product .button',' a.checkout-button.button.alt.wc-forward','.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button','.woocommerce input.button','.woocommerce #respond input#submit.alt','.woocommerce button.button.alt','.woocommerce input.button.alt'),
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_sale_badge_position_heading',
		'section'     => 'fitness_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Badge Position', 'fitness-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'fitness_elementor_sale_badge_position',
		'section'     => 'fitness_elementor_woocommerce_settings',
		'default'     => 'right',
		'choices'     => [
			'right' => esc_html__( 'Right', 'fitness-elementor' ),
			'left' => esc_html__( 'Left', 'fitness-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_products_sale_font_size_heading',
		'section'     => 'fitness_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Font Size', 'fitness-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'text',
		'settings'    => 'fitness_elementor_products_sale_font_size',
		'section'     => 'fitness_elementor_woocommerce_settings',
		'priority'    => 10,
		'output' => array(
			array(
				'element'  => array('.woocommerce span.onsale','.woocommerce ul.products li.product .onsale'),
				'property' => 'font-size',
				'units' => 'px',
			),
		),
	] );
	
	// FOOTER SECTION

	Kirki::add_section( 'fitness_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'fitness-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'fitness-elementor' ),
        'panel'    => 'fitness_elementor_theme_options_panel',
		'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_footer_text_heading',
		'section'     => 'fitness_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'fitness-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fitness_elementor_footer_text',
		'section'  => 'fitness_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_footer_enable_heading',
		'section'     => 'fitness_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'fitness-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'fitness-elementor' ),
		'section'     => 'fitness_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-elementor' ),
			'off' => esc_html__( 'Disable', 'fitness-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_footer_background_widget_heading',
		'section'     => 'fitness_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Background', 'fitness-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id',
	[
		'settings'    => 'fitness_elementor_footer_background_widget',
		'type'        => 'background',
		'section'     => 'fitness_elementor_footer_section',
		'default'     => [
			'background-color'      => 'rgba(18,18,18,1)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.footer-widget',
			],
		],
	]);
}