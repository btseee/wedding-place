<?php

function nikah_single_post_ext_opt() {

	$nikah_single_post_opt = array(

		/* 5.1. Single Post Layout */
		array(
			'id'       => 'single_post_style',
			'type'     => 'select',
			'title'    => esc_html__( 'Single Post Style Type', 'nikah' ),
			'subtitle' => esc_html__( 'Select your single post style type', 'nikah' ),
			'options'  => array(
				'default' => esc_html__( 'Single Post 1', 'nikah' ),
				'style-2' => esc_html__( 'Single Post 2', 'nikah' ),
			),
			'default'  => 'default'
		),
		array(
			'id'       => 'blog_type',
			'type'     => 'select',
			'title'    => esc_html__( 'Single Post Layout Type', 'nikah' ),
			'subtitle' => esc_html__( 'Select Your Single Post Layout Type', 'nikah' ),
			'options'  => array(
				'fullwidth' => esc_html__( 'Full Width', 'nikah' ),
				'sidebar' => esc_html__( 'Sidebar', 'nikah' ),
			),
			'default'  => 'sidebar'
		),
		/* end of single post layout */

		/* 5.2. Single Post Padding */
		array(
			'id'       => 'single_blog_padding',
			'type'     => 'spacing',
			'output'   => array( '.single-post-wrap .blog' ),
			'mode'     => 'padding',
			'all'      => false,
			'top'           => true,
			'bottom'        => true,
			'right'         => false,
			'left'          => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Padding Single Post', 'nikah' ),
			'subtitle' => __( 'Padding top and bottom for Single Post.', 'nikah' ),
			'default'  => array(
				'padding-top'    => '60',
				'padding-right'  => '0',
				'padding-bottom' => '60',
				'padding-left'   => '0'
			),
		),
		/* end of single post padding */
	);

	return $nikah_single_post_opt;
}