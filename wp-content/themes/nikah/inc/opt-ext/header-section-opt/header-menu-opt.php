<?php

function nikah_header_menus_ext_opt() {

	$nikah_header_menus_opt = array(

		/* 1.5. Search*/
		array(
			'id'       => 'menus_choose_style',
			'type'     => 'select',
			'title'    => esc_html__('Menu Style Choices', 'nikah'),
			'options'  => array(
				'style-1'		=> esc_html__('Style 1', 'nikah'),
				'style-2'		=> esc_html__('Style 2', 'nikah'),
				'style-3'		=> esc_html__('Style 3', 'nikah'),
				'style-4'		=> esc_html__('Style 4', 'nikah'),
				'style-5'		=> esc_html__('Style 5', 'nikah'),
				'style-6'		=> esc_html__('Style 6', 'nikah'),
				'style-7'		=> esc_html__('Style 7', 'nikah'),
				'style-8'		=> esc_html__('Style 8', 'nikah'),
				'style-9'		=> esc_html__('Style 9', 'nikah'),
				'style-10'		=> esc_html__('Style 10', 'nikah'),
				'style-11'		=> esc_html__('Style 11', 'nikah'),
				'style-12'		=> esc_html__('Style 12', 'nikah'),
				'style-13'		=> esc_html__('Style 13', 'nikah'),
				'style-14'		=> esc_html__('Style 14', 'nikah'),
			),
			'default'  => 'style-1',
		),
	);

return $nikah_header_menus_opt;
}