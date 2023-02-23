<?php

function nikah_header_general_ext_opt() {

	$nikah_header_general_opt = array(

		/* 1.2. Header Type */
		array(
			'id'       => 'header_animated',
			'type'     => 'switch',
			'title'    => __( 'Use Animated Header', 'nikah' ),
			'subtitle' => __( 'Make your header animated after page loaded', 'nikah' ),
			'default'  => true,
		),
		array(
			'id'       => 'fixed_header',
			'type'     => 'switch',
			'title'    => __( 'Use Fixed Header', 'nikah' ),
			'subtitle' => __( 'Make your header as sticky header.', 'nikah' ),
			'default'  => false,
		),
		array(
			'id'       => 'header_fixed_type',
			'type'     => 'select',
			'title'    => esc_html__( 'Header Fixed Type', 'nikah' ),
			'options'  => array(
				'header_fixed_noscroll'     => esc_html__( 'Header Fixed No Scroll', 'nikah' ),
				'header_fixed_scroll'     => esc_html__( 'Header Fixed Scroll', 'nikah' ),
			),
			'default'  => 'header_fixed_noscroll',
			'required' => array(
				array( 'fixed_header', '=', true ),
			),
		),
		array(
			'id'       => 'space_when_scroll',
			'type'     => 'spacing',
			'mode'     => 'padding',
			'all'      => false,
			'right'         => false,
			'left'         => false,
			'bottom'         => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Header Space When Scroll', 'nikah' ),
			'default'  => array(
				'padding-top'    => '40px',
				'padding-right'  => '0',
				'padding-bottom' => '40px',
				'padding-left'   => '0'
			),
			'required' => array( 
				array( 'header_fixed_type', '=', 'header_fixed_scroll' ),
			),
		),

		/* end of header type */

		/* logo dimensions tab */
		array(
			'id'       => 'header_general_opt_select',
			'type'     => 'button_set',
			'options'  => array(
				'header-logo'     => esc_html__( 'Header Logo', 'nikah' ),
				//'site-favicon' => 'Site Favicon',
				'header-dimension'   => esc_html__( 'Header Dimensions', 'nikah' ),
				'header-background'   => esc_html__( 'Header Background', 'nikah' ),
			),
			'default'  => 'header-logo'
		),
		/* end of header_general_opt_select */

		array(
			'id' 		=> 'logo_upload',
			'type' 		=> 'media',
			'url' 		=> true,
			'compiler' 	=> 'true',
			'title'    	=> esc_html__( 'Header Logo', 'nikah' ),
			'required' 	=> array( 'header_general_opt_select', '=', 'header-logo' ),
			'default'  	=> array(
		        'url'	=>''
		    ),
		),
		array(
			'id'       => 'logo_padding',
			'type'     => 'spacing',
			'mode'     => 'padding',
			'all'      => false,
			'right'    => false,
			'left'     => false, 
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Padding Logo', 'nikah' ),
			'subtitle' => __( 'A gap space for your logo image and title.', 'nikah' ),
			'default'  => array(
				'padding-top'    => '5px',
				'padding-bottom' => '0',
			),
			'required' 	=> array( 'header_general_opt_select', '=', 'header-logo' ),
		),

		/* header dimensions */

		array(
			'id'       => 'header_padding',
			'type'     => 'spacing',
			'mode'     => 'padding',
			'all'      => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Padding Header', 'nikah' ),
			'subtitle' => __( 'Allow your users to choose the spacing or margin they want.', 'nikah' ),
			'desc'     => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'nikah' ),
			'default'  => array(
				'padding-top'    => '80px',
				'padding-right'  => '0',
				'padding-bottom' => '80px',
				'padding-left'   => '0'
			),
			'required' => array( 
				array( 'header_general_opt_select', '=', 'header-dimension' ),
			),
		),

		/* header custom background */
		array(
			'id' => 'header_background',
			'type' => 'background',
			'title' => __('Header Custom Background', 'nikah'),
			'subtitle' => __('Header background with image, color, etc.', 'nikah'),
			'default' => array(
				'background-color'  => 'transparent',
				'background-repeat'  => 'no-repeat',
				'background-size'  => 'inherit',
				'background-attachment'  => 'inherit',
				'background-position'  => 'center center',
			),
			'required' => array(
				array( 'header_general_opt_select', '=', 'header-background' ),
			),
		),
		array(
			'id' => 'header_fixed_background',
			'type'     => 'color',
			'title' => __('Header Fixed When Scroll Background', 'nikah'),
			'subtitle' => __('Header fixed background with image, color, etc.', 'nikah'),
			'default' => '#ffffff',
			'validate' => 'color',
			'required' => array(
				array( 'header_general_opt_select', '=', 'header-background' ),
				array( 'fixed_header', '=', true ),
				array( 'header_fixed_type', '=', 'header_fixed_scroll' ),
			),
		),
		array(
			'id' => 'header_fixed_color',
			'type'     => 'color',
			'title' => __('Header Fixed When Scroll Color', 'nikah'),
			'subtitle' => __('Header fixed text color.', 'nikah'),
			'default' => '#000000',
			'validate' => 'color',
			'required' => array(
				array( 'header_general_opt_select', '=', 'header-background' ),
				array( 'fixed_header', '=', true ),
				array( 'header_fixed_type', '=', 'header_fixed_scroll' ),
			),
		),

		/* 1.3. Boxed Header Options */
		array(
			'id'       => 'header_boxed',
			'type'     => 'switch',
			'title'    => __( 'Use Boxed Header', 'nikah' ),
			'subtitle' => __( 'Make your header boxed', 'nikah' ),
			'default'  => false,
		),
		array(
			'id'       => 'header_boxed_width',
			'type'     => 'dimensions',
			'units'    => array('px', '%'),
			'title'    => esc_html__('Header Boxed Width.', 'nikah'),
			'subtitle' => esc_html__('Define width for header box.', 'nikah'),
			'output'   => array('header#header.inner-head-wrap'),
			'height'   => false,
			'default'  => array(
				'Width'   => '1170', 
				'Height'  => false
			),
			'required' => array(
				array('header_boxed','=', true),
			),
		),
		array(
			'id'       => 'header_margin',
			'type'     => 'spacing',
			'output'   => array( 'header#header' ),
			'mode'     => 'margin',
			'all'      => false,
			'right'         => false,
			'left'          => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Margin Header', 'nikah' ),
			'subtitle' => __( 'Allow your users to choose the spacing or margin they want.', 'nikah' ),
			'desc'     => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'nikah' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-right'  => 'auto',
				'margin-bottom' => '0',
				'margin-left'   => 'auto'
			),
			'required' => array(
				array('header_boxed','=', true),
			),
		),
		/* end of header boxed options */

	);

return $nikah_header_general_opt;
}