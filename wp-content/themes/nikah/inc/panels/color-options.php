<?php

	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_1 = 'nikah_header_section';

	$wp_customize->add_panel( $panel_id_1,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Header Section Color', 'nikah' ),
	        'description'       => esc_html__( 'Edit your header color here.', 'nikah' ),
	    )
	);

	/* HEADER DEFAULT STYLING
	================================================== */
	
	$wp_customize->add_section( 'header_default_styling', array(
		'title'		=>	esc_html__( 'Header Style 1', 'nikah' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'menu_header', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_hover_header', array(
		'default'		=> 	'#111111',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_border', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sub_bg', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sub_menu', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'search_close', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'search_bar_title', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'search_sugges', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'search_desc_sugges', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'search_bord', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_header', array(
		'label'		=>	esc_html__( 'Menu & Search Icon Header Color', 'nikah' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'menu_header',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_hover_header', array(
		'label'		=>	esc_html__( 'Menu Header Hover Color', 'nikah' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'menu_hover_header',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_border', array(
		'label'		=>	esc_html__( 'Menu Header Border Hover Color', 'nikah' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'menu_border',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sub_bg', array(
		'label'		=>	esc_html__( 'Submenu Background Color', 'nikah' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'sub_bg',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sub_menu', array(
		'label'		=>	esc_html__( 'Submenu Text Color', 'nikah' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'sub_menu',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_close', array(
		'label'		=>	esc_html__( 'Button Search Close Color', 'nikah' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'search_close',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_bar_title', array(
		'label'		=>	esc_html__( 'Search Bar Title Color', 'nikah' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'search_bar_title',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_sugges', array(
		'label'		=>	esc_html__( 'Search Suggestion Title Color', 'nikah' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'search_sugges',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_desc_sugges', array(
		'label'		=>	esc_html__( 'Search Suggestion Description Color', 'nikah' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'search_desc_sugges',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_bord', array(
		'label'		=>	esc_html__( 'Search Border Color', 'nikah' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'search_bord',
		'priority'	=>	11,
	) ) );


	/* HEADER ALTERNATIVE STYLING
	================================================== */
	
	$wp_customize->add_section( 'header_alt_styling', array(
		'title'		=>	esc_html__( 'Header Alternative', 'nikah' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'alt_menu_hover', array(
		'default'		=> 	'#dddddd',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'alt_menu_border', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'alt_menu_hover', array(
		'label'		=>	esc_html__( 'Menu Hover Color', 'nikah' ),
		'section'	=>	'header_alt_styling',
		'settings'	=>	'alt_menu_hover',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'alt_menu_border', array(
		'label'		=>	esc_html__( 'Menu Border Color', 'nikah' ),
		'section'	=>	'header_alt_styling',
		'settings'	=>	'alt_menu_border',
		'priority'	=>	2,
	) ) );

	/* HEADER STYLE 2
	================================================== */

	$wp_customize->add_section( 'header_style_2', array(
		'title'		=>	esc_html__( 'Header Style 2', 'nikah' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'icon_burger', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_style45', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_hov_style45', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_burger', array(
		'label'		=>	esc_html__( 'Burger Icon Header Color', 'nikah' ),
		'section'	=>	'header_style_2',
		'settings'	=>	'icon_burger',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_style45', array(
		'label'		=>	esc_html__( 'Menu List Color', 'nikah' ),
		'section'	=>	'header_style_2',
		'settings'	=>	'menu_style45',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_hov_style45', array(
		'label'		=>	esc_html__( 'Menu List Hover Color', 'nikah' ),
		'section'	=>	'header_style_2',
		'settings'	=>	'menu_hov_style45',
		'priority'	=>	3,
	) ) );
	
	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_1 = 'nikah_content_section';

	$wp_customize->add_panel( $panel_id_1,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Content Section Color', 'nikah' ),
	        'description'       => esc_html__( 'Edit your content color here.', 'nikah' ),
	    )
	);

	/* BLOG STYLING
	================================================== */
	
	$wp_customize->add_section( 'blog_styling', array(
		'title'		=>	esc_html__( 'Blog Loop Archive', 'nikah' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'category_meta', array(
		'default'		=> 	'#8db392',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_meta_hover', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_meta_border', array(
		'default'		=> 	'#8db392',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_title', array(
		'default'		=> 	'#555555',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_hover_title', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_date', array(
		'default'		=> 	'#888888',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_desc', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'read_more', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'read_hover_more', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'read_more_bg', array(
		'default'		=> 	'#8db392',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'read_more_bg_hover', array(
		'default'		=> 	'#eaeaea',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'blog_bg', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'blog_border_bottom', array(
		'default'		=> 	'#8db392',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_meta', array(
		'label'		=>	esc_html__( 'Category Color', 'nikah' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'category_meta',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_meta_hover', array(
		'label'		=>	esc_html__( 'Category Link Hover Color', 'nikah' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'category_meta_hover',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_meta_border', array(
		'label'		=>	esc_html__( 'Category Border Color', 'nikah' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'category_meta_border',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_title', array(
		'label'		=>	esc_html__( 'Post Title Color', 'nikah' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_title',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_hover_title', array(
		'label'		=>	esc_html__( 'Post Title Hover Color', 'nikah' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_hover_title',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_date', array(
		'label'		=>	esc_html__( 'Post Date Color', 'nikah' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_date',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_desc', array(
		'label'		=>	esc_html__( 'Post Text Color', 'nikah' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_desc',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'read_more', array(
		'label'		=>	esc_html__( 'Read More Button Text Color', 'nikah' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'read_more',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'read_hover_more', array(
		'label'		=>	esc_html__( 'Read More Button Text Hover Color', 'nikah' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'read_hover_more',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'read_more_bg', array(
		'label'		=>	esc_html__( 'Post Read More Button Background Color', 'nikah' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'read_more_bg',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'read_more_bg_hover', array(
		'label'		=>	esc_html__( 'Post Read More Button Background Hover Color', 'nikah' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'read_more_bg_hover',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog_bg', array(
		'label'		=>	esc_html__( 'Post Loop Background Color', 'nikah' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'blog_bg',
		'priority'	=>	12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog_border_bottom', array(
		'label'		=>	esc_html__( 'Post Loop Border Bottom Color', 'nikah' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'blog_border_bottom',
		'priority'	=>	12,
	) ) );



	/* BLOG SINGLE STYLING
	================================================== */
	
	$wp_customize->add_section( 'blog_single_styling', array(
		'title'		=>	esc_html__( 'Single Blog', 'nikah' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );

	//SECTION

	$wp_customize->add_setting( 'title_single', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_single_hover', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'meta_single', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'meta_single_hover', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_bg', array(
		'default'		=> 	'#8db392',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_bg_hover', array(
		'default'		=> 	'#9cc3a1',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_text_hover', array(
		'default'		=> 	'#f5f5f5',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'comment_single', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'comment_single_hover', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_long', array(
		'default'		=> 	'#dedede',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_short', array(
		'default'		=> 	'#8db392',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_single', array(
		'default'		=> 	'#777777',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_quote', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'quote_border', array(
		'default'		=> 	'#eaeaea',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'quote_icon', array(
		'default'		=> 	'#111111',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'tag_text', array(
		'default'		=> 	'#777777',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'tag_hover', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'tag_bg', array(
		'default'		=> 	'#f3f3f3',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'tag_bg_hover', array(
		'default'		=> 	'#e6e6e6',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'meta_bg', array(
		'default'		=> 	'#f2f2f2',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'author_top_border', array(
		'default'		=> 	'#8db392',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'name_text', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'name_link', array(
		'default'		=> 	'#8db392',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'name_link_hover', array(
		'default'		=> 	'#9cc3a1',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'prev_bord', array(
		'default'		=> 	'#f2f2f2',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'prev_text', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'prev_icon', array(
		'default'		=> 	'#8db392',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'prev_link', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'prev_hover_link', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'comment_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'comment_link', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'comment_hover_link', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_comment_bg', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_comment_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'next_archive', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_single', array(
		'label'		=>	esc_html__( 'Single Post Title Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'title_single',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_single_hover', array(
		'label'		=>	esc_html__( 'Single Post Title Hover Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'title_single_hover',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'meta_single', array(
		'label'		=>	esc_html__( 'Single Post Meta Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'meta_single',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'meta_single_hover', array(
		'label'		=>	esc_html__( 'Single Post Meta Hover Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'meta_single_hover',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_bg', array(
		'label'		=>	esc_html__( 'Single Post Style 2 Category Background Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'category_bg',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_bg_hover', array(
		'label'		=>	esc_html__( 'Single Post Style 2 Category Background Hover Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'category_bg_hover',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_text', array(
		'label'		=>	esc_html__( 'Single Post Style 2 Category Text Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'category_text',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_text_hover', array(
		'label'		=>	esc_html__( 'Single Post Style 2 Category Text Hover Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'category_text_hover',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comment_single', array(
		'label'		=>	esc_html__( 'Single Post Comment Amount Number Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'comment_single',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comment_single_hover', array(
		'label'		=>	esc_html__( 'Single Post Comment Amount Number Hover Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'comment_single_hover',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_long', array(
		'label'		=>	esc_html__( 'Single Post Border Sparator 1 Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'border_long',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_short', array(
		'label'		=>	esc_html__( 'Single Post Border Sparator 2 Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'border_short',
		'priority'	=>	12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_single', array(
		'label'		=>	esc_html__( 'Single Post Text Description Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'text_single',
		'priority'	=>	13,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_quote', array(
		'label'		=>	esc_html__( 'Single Post Text Quote Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'text_quote',
		'priority'	=>	14,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'quote_border', array(
		'label'		=>	esc_html__( 'Quote Border Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'quote_border',
		'priority'	=>	15,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'quote_icon', array(
		'label'		=>	esc_html__( 'Quote Icon Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'quote_icon',
		'priority'	=>	16,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tag_text', array(
		'label'		=>	esc_html__( 'Tags Text Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'tag_text',
		'priority'	=>	17,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tag_hover', array(
		'label'		=>	esc_html__( 'Tags Text Hover Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'tag_hover',
		'priority'	=>	18,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tag_bg', array(
		'label'		=>	esc_html__( 'Tags Background Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'tag_bg',
		'priority'	=>	19,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tag_bg_hover', array(
		'label'		=>	esc_html__( 'Tags Background Hover Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'tag_bg_hover',
		'priority'	=>	20,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'meta_bg', array(
		'label'		=>	esc_html__( 'Post Meta Background Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'meta_bg',
		'priority'	=>	21,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'author_top_border', array(
		'label'		=>	esc_html__( 'Post Meta Author Left Border Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'author_top_border',
		'priority'	=>	22,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'name_text', array(
		'label'		=>	esc_html__( 'Text "Written by" Color (Author Section)', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'name_text',
		'priority'	=>	23,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'name_link', array(
		'label'		=>	esc_html__( 'Author Name Color (Author Section)', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'name_link',
		'priority'	=>	24,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'name_link_hover', array(
		'label'		=>	esc_html__( 'Author Name Hover Color (Author Section)', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'name_link_hover',
		'priority'	=>	25,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_bord', array(
		'label'		=>	esc_html__( 'Next & Previous Post Border Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'prev_bord',
		'priority'	=>	26,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_text', array(
		'label'		=>	esc_html__( 'Next & Previous Post Text Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'prev_text',
		'priority'	=>	27,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_icon', array(
		'label'		=>	esc_html__( 'Next & Previous Post Icon Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'prev_icon',
		'priority'	=>	28,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_link', array(
		'label'		=>	esc_html__( 'Next & Previous Post Text Link Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'prev_link',
		'priority'	=>	29,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_hover_link', array(
		'label'		=>	esc_html__( 'Next & Previous Post Text Link Hover Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'prev_hover_link',
		'priority'	=>	30,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comment_title', array(
		'label'		=>	esc_html__( 'Comment Reply Title Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'comment_title',
		'priority'	=>	31,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comment_link', array(
		'label'		=>	esc_html__( 'Comment Link Log in & Log Out Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'comment_link',
		'priority'	=>	32,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comment_hover_link', array(
		'label'		=>	esc_html__( 'Comment Link Log in & Log Out Hover Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'comment_hover_link',
		'priority'	=>	33,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_comment_bg', array(
		'label'		=>	esc_html__( 'Post Comment Button Background Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'btn_comment_bg',
		'priority'	=>	34,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_comment_text', array(
		'label'		=>	esc_html__( 'Post Comment Button Text Color', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'btn_comment_text',
		'priority'	=>	35,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'next_archive', array(
		'label'		=>	esc_html__( 'Next & Previous Post Text Color (Archive)', 'nikah' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'next_archive',
		'priority'	=>	36,
	) ) );



	/* SIDEBAR STYLING
	================================================== */
	
	$wp_customize->add_section( 'sidebar_styling', array(
		'title'		=>	esc_html__( 'Sidebar & Widget', 'nikah' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'sidebar_search_bg', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sidebar_search_btn', array(
		'default'		=> 	'#8db392',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sidebar_search_icon', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sidebar_search_text', array(
		'default'		=> 	'#aaaaaa',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sidebar_bg', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'nikah_widget_title', array(
		'default'		=> 	'#555555',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'nikah_border_title', array(
		'default'		=> 	'#8db392',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'link_text_sidebar', array(
		'default'		=> 	'#555555',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'link_hover_sidebar', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bg_tabs', array(
		'default'		=> 	'#8db392',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_tabs', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bg_tabs2', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_tabs2', array(
		'default'		=> 	'#555555',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_tabs2_hover', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_tabs', array(
		'default'		=> 	'#8db392',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_search_bg', array(
		'label'		=>	esc_html__( 'Search Widget Background Color', 'nikah' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sidebar_search_bg',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_search_btn', array(
		'label'		=>	esc_html__( 'Search Widget Button Background Color', 'nikah' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sidebar_search_btn',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_search_icon', array(
		'label'		=>	esc_html__( 'Search Widget Button Icon Color', 'nikah' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sidebar_search_icon',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_search_text', array(
		'label'		=>	esc_html__( 'Search Widget Text Iput Color', 'nikah' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sidebar_search_text',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_bg', array(
		'label'		=>	esc_html__( 'Widget Background Color', 'nikah' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sidebar_bg',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nikah_widget_title', array(
		'label'		=>	esc_html__( 'Widget Titlte Color', 'nikah' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'nikah_widget_title',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nikah_border_title', array(
		'label'		=>	esc_html__( 'Widget Titlte Border Color', 'nikah' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'nikah_border_title',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_text_sidebar', array(
		'label'		=>	esc_html__( 'Sidebar Widget Link Text Color', 'nikah' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'link_text_sidebar',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover_sidebar', array(
		'label'		=>	esc_html__( 'Sidebar Widget Link Text Hover Color', 'nikah' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'link_hover_sidebar',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_tabs', array(
		'label'		=>	esc_html__( 'nikah News Widget Tabs Active Background Color', 'nikah' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'bg_tabs',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_tabs', array(
		'label'		=>	esc_html__( 'nikah News Widget Tabs Text Active Color', 'nikah' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'text_tabs',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_tabs2', array(
		'label'		=>	esc_html__( 'nikah News Widget Tabs Background Color', 'nikah' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'bg_tabs2',
		'priority'	=>	12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_tabs2', array(
		'label'		=>	esc_html__( 'nikah News Widget Tabs Text Color', 'nikah' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'text_tabs2',
		'priority'	=>	13,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_tabs2_hover', array(
		'label'		=>	esc_html__( 'nikah News Widget Tabs Text Hover Color', 'nikah' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'text_tabs2_hover',
		'priority'	=>	14,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_tabs', array(
		'label'		=>	esc_html__( 'nikah News Widget Tabs Border Bottom Color', 'nikah' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'border_tabs',
		'priority'	=>	15,
	) ) );

	

	/* CONTACT STYLING
	================================================== */
	
	$wp_customize->add_section( 'contact_styling', array(
		'title'		=>	esc_html__( 'Contact Form', 'nikah' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'form_bord', array(
		'default'		=> 	'#cdcdcc',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'form_bord_hover', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_input', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send_hover', array(
		'default'		=> 	'#333333',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send_text_hover', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'form_bord', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Border Color', 'nikah' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'form_bord',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'form_bord_hover', array(
		'label'		=>	esc_html__( 'Contact Form Style 2 Border Hover Color', 'nikah' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'form_bord_hover',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_input', array(
		'label'		=>	esc_html__( 'Text Input Color', 'nikah' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'text_input',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Button Background Color', 'nikah' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send_text', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Button Text Color', 'nikah' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send_text',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send_hover', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Button Background Hover Color', 'nikah' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send_hover',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send_text_hover', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Button Text Hover Color', 'nikah' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send_text_hover',
		'priority'	=>	7,
	) ) );




	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_1 = 'nikah_page_template_section';

	$wp_customize->add_panel( $panel_id_1,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Portfolio Section Color', 'nikah' ),
	        'description'       => esc_html__( 'Edit Your Page Template Color Here.', 'nikah' ),
	    )
	);


	/* PORTFOLIO SINGLE STYLING
	================================================== */
	
	$wp_customize->add_section( 'portfolio_single_styling', array(
		'title'		=>	esc_html__( 'Portfolio Single 1 & 2', 'nikah' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'port_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_portfolio', array(
		'default'		=> 	'#8db392',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail1_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail1_p', array(
		'default'		=> 	'#888888',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail1_border', array(
		'default'		=> 	'#e5e5e5',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail1_desc', array(
		'default'		=> 	'#555555',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail1_pagination', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail1_hov_pagination', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'port_title', array(
		'label'		=>	esc_html__( 'Project Title Color', 'nikah' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'port_title',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_portfolio', array(
		'label'		=>	esc_html__( 'Project Category Color', 'nikah' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'category_portfolio',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail1_title', array(
		'label'		=>	esc_html__( 'Project Details Title Color', 'nikah' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail1_title',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail1_p', array(
		'label'		=>	esc_html__( 'Project Details Color', 'nikah' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail1_p',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail1_border', array(
		'label'		=>	esc_html__( 'Project Details Border Color', 'nikah' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail1_border',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail1_desc', array(
		'label'		=>	esc_html__( 'Project Details All Style Description Color', 'nikah' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail1_desc',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail1_pagination', array(
		'label'		=>	esc_html__( 'Project Pagination Color', 'nikah' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail1_pagination',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail1_hov_pagination', array(
		'label'		=>	esc_html__( 'Project Pagination Hover Color', 'nikah' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail1_hov_pagination',
		'priority'	=>	8,
	) ) );




	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_1 = 'nikah_footer_section';

	$wp_customize->add_panel( $panel_id_1,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Footer Section Color', 'nikah' ),
	        'description'       => esc_html__( 'Edit your Footer color here.', 'nikah' ),
	    )
	);

	/* Footer STYLING
	================================================== */
	
	$wp_customize->add_section( 'footer_styling', array(
		'title'		=>	esc_html__( 'Footer', 'nikah' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'footer_text', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_link', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_hover_link', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_social', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_hover_social', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_widget_bg', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_widget_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'link_text_widget', array(
		'default'		=> 	'#555555',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'link_hover_widget', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_widget', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_widget', array(
		'default'		=> 	'#dddddd',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text', array(
		'label'		=>	esc_html__( 'Footer Copyright & Address Text Color', 'nikah' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_text',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link', array(
		'label'		=>	esc_html__( 'Footer Copyright Link Color', 'nikah' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_link',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_hover_link', array(
		'label'		=>	esc_html__( 'Footer Copyright Link Hover Color', 'nikah' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_hover_link',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_social', array(
		'label'		=>	esc_html__( 'Footer Social Icon Color', 'nikah' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_social',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_hover_social', array(
		'label'		=>	esc_html__( 'Footer Social Icon Hover Color', 'nikah' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_hover_social',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_bg', array(
		'label'		=>	esc_html__( 'Footer Widget Background Color', 'nikah' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_widget_bg',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_title', array(
		'label'		=>	esc_html__( 'Footer Widget Title Color', 'nikah' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_widget_title',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_text_widget', array(
		'label'		=>	esc_html__( 'Footer Widget Link Text Color (Nikah Latest News Widget)', 'nikah' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'link_text_widget',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover_widget', array(
		'label'		=>	esc_html__( 'Footer Widget Link Text Hover Color (Nikah Latest News Widget)', 'nikah' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'link_hover_widget',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_widget', array(
		'label'		=>	esc_html__( 'Footer Widget Text Color', 'nikah' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'text_widget',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_widget', array(
		'label'		=>	esc_html__( 'Footer Widget Border Color', 'nikah' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'border_widget',
		'priority'	=>	11,
	) ) );

	