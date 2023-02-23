<?php

function nikah_footer_general_ext_opt() {

	$nikah_footer_general_opt = array(

		/* 3.1. Footer Style Type */
		array(
			'id'       => 'footer_style_type',
			'type'     => 'select',
			'title'    => esc_html__('Footer Style Type', 'nikah'),
			'options'  => array(
				'bottom-footer'		=> esc_html__('Always on Bottom of desktop.', 'nikah'),
				'fixed-footer'		=> esc_html__('Fixed Footer.', 'nikah'),
			),
			'default'  => 'bottom-footer'
		),
		/* end of footer style type*/

		/* 3.2. Footer Type */
		array(
			'id'       => 'footer_type',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Footer Type', 'nikah' ),
			'subtitle' => esc_html__( 'Select Your Footer Type', 'nikah' ),
			'options' => array(
				'no-footer' => array('alt' => 'no-footer', 'img' => get_template_directory_uri() .'/img/footer-no.png'),
				'default' => array('alt' => 'default', 'img' => get_template_directory_uri() .'/img/footer-1.png'),
			),
			'default'  => 'default'
		),
		
		array(
			'id'       => 'footer_general_opt_select',
			'type'     => 'button_set',
			'options'  => array(
				'footer-dimensions'		=> esc_html__('Footer Dimensions', 'nikah'),
				'footer-background' 	=> esc_html__('Footer Background', 'nikah'),
				'footer-features'		=> esc_html__('Footer Features', 'nikah'),
			),
			'default'  => 'footer-dimensions'
		),

		/* 3.3. Footer Container */
		/* end of footer container */

		/* 3.4. Footer Padding */
		array(
			'id'       => 'footer_padding',
			'type'     => 'spacing',
			'mode'     => 'padding',
			'all'      => false,
			'right'         => false,
			'left'          => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Padding Footer', 'nikah' ),
			'subtitle' => __( 'Allow your users to choose the spacing or padding they want.', 'nikah' ),
			'desc'     => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'nikah' ),
			'default'  => array(
				'padding-top'    => '40px',
				'padding-right'  => '0',
				'padding-bottom' => '40px',
				'padding-left'   => '0'
			),
			'required' => array( 
				array( 'footer_type', '=', array('default')),
				array( 'footer_general_opt_select', '=', 'footer-dimensions' ),
			),
		),

		/* footer fatures */
		array(
			'id' => 'foot_logo',
			'type' => 'media',
			'url' => true,
			'compiler' => 'true',
			'title' => esc_html__('Footer Logo', 'nikah'), 
			'desc' => esc_html__('Upload your logo image here (any size).', 'nikah'),
			'required' => array( 
				array( 'footer_type', '=', array('default')),
				array( 'footer_general_opt_select', '=', 'footer-features' ),
			),
		),

		array(
			'id' => 'foot_address',
			'type' => 'textarea',
			'title' => esc_html__('Footer Address', 'nikah'), 
			'required' => array( 
				array( 'footer_type', '=', array('default')),
				array( 'footer_general_opt_select', '=', 'footer-features' ),
			),
		),

		array(
			'id'=>'footer-text',
			'type' => 'editor',
			'title' => esc_html__('Footer Copyright', 'nikah'), 
			'subtitle' => esc_html__('Add Your Copyright Here', 'nikah'),
			'default' => esc_html__('Built by Themes Awesome', 'nikah'),
			'required' => array(
				array( 'footer_type', '=', array('default') ),
				array( 'footer_general_opt_select', '=', 'footer-features' ),
			),
		),

		/* 3.5. Boxed Footer */
		array(
			'id' => 'footer_background',
			'type' => 'background',
			'title' => __('Footer Custom Background', 'nikah'),
			'subtitle' => __('Footer background with image, color, etc.', 'nikah'),
			'default' => '',
			'required' => array(
				array( 'footer_general_opt_select', '=', 'footer-background' ),
			),
		),
		array(
			'id'       => 'footer_boxed',
			'type'     => 'switch',
			'title'    => __( 'Use Boxed Footer', 'nikah' ),
			'subtitle' => __( 'Make your footer boxed', 'nikah' ),
			'default'  => false,
			'required' => array(
				array( 'footer_type', '=', array('default')),
			),
		),
		array(
			'id'       => 'footer_boxed_width',
			'type'     => 'dimensions',
			'units'    => array('px', '%'),
			'title'    => esc_html__('Content Boxed Width.', 'nikah'),
			'subtitle' => esc_html__('Define width for footer box.', 'nikah'),
			'output'   => array('#footer'),
			'height'   => false,
			'default'  => array(
				'Width'   => '1170', 
				'Height'  => false
			),
			'required' => array(
				array('footer_boxed','=', true),
			),
		),
		array(
			'id'       => 'footer_margin',
			'type'     => 'spacing',
			'output'   => array( '#footer' ),
			'mode'     => 'margin',
			'all'      => false,
			'right'         => false,
			'left'          => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Margin Boxed Footer', 'nikah' ),
			'subtitle' => __( 'Allow your users to choose the spacing or margin they want.', 'nikah' ),
			'desc'     => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'nikah' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-right'  => 'auto',
				'margin-bottom' => '0',
				'margin-left'   => 'auto'
			),
			'required' => array(
				array('footer_boxed','=', true),
			),
		),
		
		/* 3.6. Footer 2 Options */
		

	);

return $nikah_footer_general_opt;
}