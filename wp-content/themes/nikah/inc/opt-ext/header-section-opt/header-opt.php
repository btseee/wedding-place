<?php

function nikah_header_ext_opt() {

	$nikah_header_opt = array(

		/* 1.2.1. Header 1 Options */
		array(
			'id'=>'header_1_layout',
			'type' => 'image_select',
			'compiler'=> true,
			'title' => esc_html__('Header 1 Layout', 'nikah'), 
			'subtitle' => esc_html__('Select header between 1, 2 or 3 column layout.', 'nikah'),
			'options' => array(
					'1column-header' => array('alt' => '1column-header', 'img' => get_template_directory_uri() .'/img/col-opt1.png'),
					'2column-header' => array('alt' => '2column-header', 'img' => get_template_directory_uri() .'/img/col-opt2.png'),
					'3column-header' => array('alt' => '3column-header', 'img' => get_template_directory_uri() .'/img/col-opt3.png'),
				),
			'default' => '2column-header',
		),
		array(
			'id'       => 'header_col_3',
			'type'     => 'button_set',
			'title'    => '',
			'subtitle' => '',
			'options'  => array(
				'header_3_col_1'     => esc_html__('Header Left Column', 'nikah'),
				'header_3_col_2'     => esc_html__('Header Center Column', 'nikah'),
				'header_3_col_3'     => esc_html__('Header Right Column', 'nikah'),
			),
			'default'  => 'header_3_col_1',
			'required' => array( 'header_1_layout', '=', array( '1column-header', '2column-header', '3column-header' ) ),
		),
		array(
			'id'       => 'header_3_centered',
			'type'     => 'button_set',
			'title'    => esc_html__('Header Column 3 Item Position', 'nikah'),
			'subtitle' => '',
			'options'  => array(
				'header3_centered'	=> esc_html__('Centered Item', 'nikah'),
				'normal_header3'	=> esc_html__('Normal', 'nikah'),
			),
			'default'  => 'normal_header3',
			'required' => array( 'header_1_layout', '=', '3column-header' ),
		),
		array(
			'id'       => 'header_col3_side',
			'type'     => 'dimensions',
			'units'    => array('px', '%'),
			'title'    => esc_html__('Header Column 3 Side Item Width.', 'nikah'),
			'height'   => false,
			'output' => array('#header .header3_centered .fl, #header .header3_centered .fr'),
			'default'  => array(
				'width'   => '20', 
				'Height'  => false
			),
			'required' => array(
				array( 'header_1_layout', '=', '3column-header' ),
				array( 'header_3_centered', '=', 'header3_centered' ),
			),
		),
		array(
			'id'       => 'header_col3_center',
			'type'     => 'dimensions',
			'units'    => array('px', '%'),
			'title'    => esc_html__('Header Column 3 Center Item Width.', 'nikah'),
			'height'   => false,
			'output' => array('#header .header3_centered .fc'),
			'default'  => array(
				'width'   => '60', 
				'Height'  => false
			),
			'required' => array(
				array( 'header_1_layout', '=', '3column-header' ),
				array( 'header_3_centered', '=', 'header3_centered' ),
			),
		),
		/* column setting end */

		/*left section*/
		array(
			'id'       => 'header_left_set',
			'type'     => 'button_set',
			'title'    => esc_html__('Header Left Setting', 'nikah'),
			'subtitle' => '',
			'options'  => array(
				'header_left_content'     => esc_html__('Header Left Content', 'nikah'),
				'header_left_display'     => esc_html__('Header Left Display', 'nikah'),
			),
			'default'  => 'header_left_content',
			'required' => array(
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_1' ),
			),
		),
		array(
			'id'      => 'header_customize_left',
			'type'    => 'sorter',
			'title'   => esc_html__( 'Header Left Content', 'nikah' ),
			'desc'    => esc_html__( 'Organize how you want the layout to appear on the header left', 'nikah' ),
			'options' => array(
				'enabled'  => array(
					'nikah-logo' => esc_html__('Logo','nikah'),
				),
				'disabled' => array(
					'nikah-menus'   => esc_html__('Menus','nikah'),
					'nikah-sec-menus'   => esc_html__('Secondary Menus','nikah'),
					//'nikah-social'   => esc_html__('Social Links','nikah'),
					'nikah-search' => esc_html__('Search Button','nikah'),
				)
			),
			'required' => array(
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_1' ),
				array( 'header_left_set', '=', 'header_left_content' ),
			),
		),
		array(
			'id'       => 'header_left_display',
			'type'     => 'select',
			'title'    => esc_html__('Header Left Display', 'nikah'),
			'options'  => array(
				'horizontal'	=> esc_html__('Horizontal Item', 'nikah'),
				'vertical'		=> esc_html__('Vertical Item', 'nikah'),
			),
			'default'  => 'horizontal',
			'required' => array(
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_1' ),
				array( 'header_left_set', '=', 'header_left_display' ),
			),
		),
		array(
			'id'       => 'header_left_align',
			'type'     => 'button_set',
			'title'    => __( 'Header Left Align', 'nikah' ),
			'options'  => array(
				'text-left'		=> esc_html__('Text Left', 'nikah'),
				'text-center'	=> esc_html__('Text Center', 'nikah'),
				'text-right'	=> esc_html__('Text Right', 'nikah')
			),
			'required' => array(
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_1' ),
				array( 'header_left_set', '=', 'header_left_display' ),
				array( 'header_1_layout', '=', '3column-header' ),
			),
			'default'  => 'text-center'
		),
		array(
			'id'       => 'header_left_item_margin',
			'type'     => 'spacing',
			'mode'     => 'margin',
			'all'      => false,
			'left'          => true,
			'right'         => true,
			'top'			=> false,
			'bottom'		=> false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Margin Header Item', 'nikah' ),
			'default'  => array(
				'margin-top'    => 'auto',
				'margin-left'   => '0',
				'margin-bottom' => 'auto',
				'margin-right'  => '0',
			),
			'required' => array(
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_1' ),
				array( 'header_left_set', '=', 'header_left_display' ),
				array( 'header_left_display', '=', 'horizontal' ),
			),
		),
		array(
			'id'       => 'header_left_float',
			'type'     => 'button_set',
			'title'    => '',
			'subtitle' => '',
			'options'  => array(
				'header_left_nofloat'	=> esc_html__('Make Full Width', 'nikah'),
				'header_left_float'		=> esc_html__('Make Column', 'nikah'),
			),
			'default'  => 'header_left_float',
			'required' => array(
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_1' ),
				array( 'header_left_set', '=', 'header_left_display' ),
				array( 'header_left_display', '=', 'vertical' ),
			),
		),
		array(
			'id'       => 'header_left_item_ver_margin',
			'type'     => 'spacing',
			'mode'     => 'margin',
			'all'      => false,
			'left'          => false,
			'right'         => false,
			'top'			=> true,
			'bottom'		=> true,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Margin Header Item', 'nikah' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-left'   => 'auto',
				'margin-bottom' => '0',
				'margin-right'  => 'auto',
			),
			'required' => array(
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_1' ),
				array( 'header_left_set', '=', 'header_left_display' ),
				array( 'header_left_display', '=', 'vertical' ),
				array( 'header_left_float', '=', 'header_left_nofloat' ),
			),
		),
		array(
			'id'    => 'header_left_notif',
			'type'  => 'info',
			'notice' => false,
			'title' => __( 'Left column section not available for this option setting.', 'nikah' ),
			'required' => array(
				array( 'header_1_layout', '=', '1column-header' ),
				array( 'header_col_3', '=', 'header_3_col_1' ),
			),
		),
		/*left section end*/

		/*center section*/
		array(
			'id'       => 'header_center_set',
			'type'     => 'button_set',
			'title'    => esc_html__('Header Center Setting', 'nikah'),
			'subtitle' => '',
			'options'  => array(
				'header_center_content'     => esc_html__('Header Center Content', 'nikah'),
				'header_center_display'     => esc_html__('Header Center Display', 'nikah'),
			),
			'default'  => 'header_center_content',
			'required' => array(
				array( 'header_1_layout', '=', array( '1column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_2' ),
			),
		),
		array(
			'id'      => 'header_customize_center',
			'type'    => 'sorter',
			'title'   => esc_html__( 'Header Center Content', 'nikah' ),
			'desc'    => esc_html__( 'Organize how you want the layout to appear on the header center', 'nikah' ),
			'options' => array(
				'enabled'  => array(
					
				),
				'disabled' => array(
					'nikah-menus'   => esc_html__('Menus','nikah'),
					'nikah-sec-menus'   => esc_html__('Secondary Menus','nikah'),
					//'nikah-social'   => esc_html__('Social Links','nikah'),
					'nikah-search' => esc_html__('Search Button','nikah'),
					'nikah-logo' => esc_html__('Logo','nikah'),
				)
			),
			'required' => array(
				array( 'header_1_layout', '=', array( '1column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_2' ),
				array( 'header_center_set', '=', 'header_center_content' ),
			),
		),
		array(
			'id'       => 'header_center_align',
			'type'     => 'button_set',
			'title'    => __( 'Header Center Align', 'nikah' ),
			'options'  => array(
				'text-left' 	=> esc_html__('Text Left','nikah'),
				'text-center' 	=> esc_html__('Text Center','nikah'),
				'text-right' 	=> esc_html__('Text Right','nikah')
			),
			'required' => array(
				array( 'header_1_layout', '=', array( '1column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_2' ),
				array( 'header_center_set', '=', 'header_center_display' ),
				array( 'header_1_layout', '=', '3column-header' ),
			),
			'default'  => 'text-center'
		),
		array(
			'id'       => 'header_center_display',
			'type'     => 'select',
			'title'    => esc_html__('Header Center Display', 'nikah'),
			'options'  => array(
				'horizontal'	=> esc_html__('Horizontal Item', 'nikah'),
				'vertical'		=> esc_html__('Vertical Item', 'nikah'),
			),
			'default'  => 'horizontal',
			'required' => array(
				array( 'header_1_layout', '=', array( '1column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_2' ),
				array( 'header_center_set', '=', 'header_center_display' ),
			),
		),
		array(
			'id'       => 'header_center_float',
			'type'     => 'button_set',
			'title'    => '',
			'subtitle' => '',
			'options'  => array(
				'header_center_nofloat'		=> esc_html__('Make Full Width', 'nikah'),
				'header_center_float'		=> esc_html__('Make Column', 'nikah'),
			),
			'default'  => 'header_center_float',
			'required' => array(
				array( 'header_1_layout', '=', array( '1column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_2' ),
				array( 'header_center_set', '=', 'header_center_display' ),
				array( 'header_center_display', '=', 'vertical' ),
			),
		),
		array(
			'id'    => 'header_center_notif',
			'type'  => 'info',
			'notice' => false,
			'title' => __( 'Center column section not available for this option setting.', 'nikah' ),
			'required' => array(
				array( 'header_1_layout', '=', '2column-header' ),
				array( 'header_col_3', '=', 'header_3_col_2' ),
			),
		),
		/*center section end*/

		/*right section*/
		array(
			'id'       => 'header_right_set',
			'type'     => 'button_set',
			'title'    => esc_html__('Header Right Setting', 'nikah'),
			'subtitle' => '',
			'options'  => array(
				'header_right_content'     => esc_html__('Header Right Content', 'nikah'),
				'header_right_display'     => esc_html__('Header Right Display', 'nikah'),
			),
			'default'  => 'header_right_content',
			'required' => array(
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_3' ),
			),
		),
		array(
			'id'      => 'header_customize_right',
			'type'    => 'sorter',
			'title'   => esc_html__( 'Header Right Content', 'nikah' ),
			'desc'    => esc_html__( 'Organize how you want the layout to appear on the header right', 'nikah' ),
			'options' => array(
				'enabled'  => array(
					'nikah-menus'   => esc_html__('Menus','nikah'),
					'nikah-search' => esc_html__('Search Button','nikah'),
				),
				'disabled' => array(
					'nikah-sec-menus'   => esc_html__('Secondary Menus','nikah'),
					'nikah-logo' => esc_html__('Logo','nikah'),
					//'nikah-social'   => esc_html__('Social Links','nikah'),
				)
			),
			'required' => array(
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_3' ),
				array( 'header_right_set', '=', 'header_right_content' ),
			),
		),
		array(
			'id'       => 'header_right_align',
			'type'     => 'button_set',
			'title'    => __( 'Header Right Align', 'nikah' ),
			'options'  => array(
				'text-left' 	=> esc_html__('Text Left', 'nikah'),
				'text-center' 	=> esc_html__('Text Center', 'nikah'),
				'text-right' 	=> esc_html__('Text Right', 'nikah')
			),
			'required' => array(
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_3' ),
				array( 'header_right_set', '=', 'header_right_display' ),
				array( 'header_1_layout', '=', '3column-header' ),
			),
			'default'  => 'text-center'
		),
		array(
			'id'       => 'header_right_display',
			'type'     => 'select',
			'title'    => esc_html__('Header Right Display', 'nikah'),
			'options'  => array(
				'horizontal'	=> esc_html__('Horizontal Item', 'nikah'),
				'vertical'		=> esc_html__('Vertical Item', 'nikah'),
			),
			'default'  => 'vertical',
			'required' => array(
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_3' ),
				array( 'header_right_set', '=', 'header_right_display' ),
			),
		),
		array(
			'id'       => 'header_right_item_padding',
			'type'     => 'spacing',
			'mode'     => 'padding',
			'all'      => false,
			'left'          => false,
			'right'         => false,
			'top'			=> true,
			'bottom'		=> true,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Padding Header Right Item', 'nikah' ),
			'default'  => array(
				'padding-top'    => '0',
				'padding-left'   => 'auto',
				'padding-bottom' => '0',
				'padding-right'  => 'auto',
			),
			'required' => array(
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_3' ),
				array( 'header_right_set', '=', 'header_right_display' ),
			),
		),
		array(
			'id'       => 'header_right_item_margin',
			'type'     => 'spacing',
			'mode'     => 'margin',
			'all'      => false,
			'left'          => true,
			'right'         => true,
			'top'			=> false,
			'bottom'		=> false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Margin Header Item', 'nikah' ),
			'default'  => array(
				'margin-top'    => 'auto',
				'margin-left'   => '0',
				'margin-bottom' => 'auto',
				'margin-right'  => '20',
			),
			'required' => array(
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_3' ),
				array( 'header_right_set', '=', 'header_right_display' ),
				array( 'header_right_display', '=', 'horizontal' ),
			),
		),
		array(
			'id'       => 'header_right_float',
			'type'     => 'button_set',
			'title'    => '',
			'subtitle' => '',
			'options'  => array(
				'header_right_nofloat'   => esc_html__('Make Full Width', 'nikah'),
				'header_right_float'     => esc_html__('Make Column', 'nikah'),
			),
			'default'  => 'header_right_float',
			'required' => array(
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_3' ),
				array( 'header_right_set', '=', 'header_right_display' ),
				array( 'header_right_display', '=', 'vertical' ),
			),
		),
		array(
			'id'       => 'header_right_item_ver_padding',
			'type'     => 'spacing',
			'mode'     => 'padding',
			'all'      => false,
			'left'          => false,
			'right'         => false,
			'top'			=> true,
			'bottom'		=> true,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Padding Vertical Row', 'nikah' ),
			'default'  => array(
				'padding-top'    => '0',
				'padding-left'   => 'auto',
				'padding-bottom' => '0',
				'padding-right'  => 'auto',
			),
			'required' => array(
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_3' ),
				array( 'header_right_set', '=', 'header_right_display' ),
				array( 'header_right_display', '=', 'vertical' ),
				array( 'header_right_float', '=', 'header_right_nofloat' ),
			),
		),
		array(
			'id'       => 'header_right_item_ver_bord',
			'type'     => 'border',
			'title'    => __( 'Header Right Border', 'nikah' ),
			'all'      => false,
			'default'  => array(
				'border-color'  => '#efefef',
				'border-style'  => 'solid',
				'border-top'    => '1px',
				'border-right'  => false,
				'border-bottom' => '1px',
				'border-left'   => false,
			),
			'required' => array(
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_3' ),
				array( 'header_right_set', '=', 'header_right_display' ),
				array( 'header_right_display', '=', 'vertical' ),
				array( 'header_right_float', '=', 'header_right_nofloat' ),
			),
		),
		array(
			'id'    => 'header_right_notif',
			'type'  => 'info',
			'notice' => false,
			'title' => __( 'Right column section not available for this option setting.', 'nikah' ),
			'required' => array(
				array( 'header_1_layout', '=', '1column-header' ),
				array( 'header_col_3', '=', 'header_3_col_3' ),
			),
		),
		/*right section end */

	);

return $nikah_header_opt;
}