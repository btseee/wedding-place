<?php

function nikah_header_alt_ext_opt() {

	$nikah_header_alt_opt = array(		

		/* 1.4. Header Alternative Options */
		array(
			'id'        => 'header_scheme',
			'type'      => 'button_set',
			'title'     => esc_html__('Alternative Header Scheme', 'nikah'),
			'options' 	 => array(
				'enable' 	=> esc_html__('Enable','nikah'),
				'disable' => esc_html__('Disable','nikah'),
			),
			'default'  => 'enable'
		),
		array(
			'id'       => 'header_text_color',
			'type'     => 'color',
			'title'    => esc_html__('Header text color', 'nikah'),
			'subtitle' => esc_html__('Set header text color', 'nikah'),
			'default'  => '#ffffff',
			'validate' => 'color',
			'output'   => array('body .alt-head .main-menu ul.sm-clean>li>a, body .alt-head .search-wrap #btn-search i, body .alt-head .main-menu ul.sm-clean>li.current-menu-item>a, .alt-head .site-title a'),
			'required' => array('header_scheme','=','enable'),
		),
		array(
			'id' => 'header_alt_logo',
			'type' => 'media',
			'url' => true,
			'compiler' => 'true',
			'title' => esc_html__('Alternative Logo', 'nikah'), 
			'desc' => esc_html__('Upload your logo image here (any size).', 'nikah'),
			'required' => array('header_scheme','=','enable'),
			'default'  	=> array(
		        'url'	=>''
		    ),
		),
		array(
			'id' => 'header_alt_bg',
			'type' => 'background',
			'output' => array('header#header.inner-head-wrap.alt-head'),
			'title' => __('Header Alternative Background', 'nikah'),
			'subtitle' => __('Header background with image, color, etc.', 'nikah'),
			'default' => 'transparent',
			'required' => array('header_scheme','=','enable'),
		),
		/* end of header alternative options*/

		array(
			'id'        => 'space_fixed_alt',
			'type'      => 'button_set',
			'title'     => esc_html__('Header Fixed Space', 'nikah'),
			'options' 	 => array(
				'on' 	=> esc_html__('Enable','nikah'),
				'off' => esc_html__('Disable','nikah'),
			),
			'default'  => 'off'
		),

	);

return $nikah_header_alt_opt;
}