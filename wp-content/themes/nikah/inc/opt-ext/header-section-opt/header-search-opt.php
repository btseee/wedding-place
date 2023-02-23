<?php

function nikah_header_search_ext_opt() {

	$nikah_header_search_opt = array(

		/* 1.5. Search*/
		array(
			'id'       => 'search_bar_style',
			'type'     => 'select',
			'title'    => esc_html__('Search Bar Style', 'nikah'),
			'options'  => array(
				'default'		=> esc_html__('Default Search Bar', 'nikah'),
				'expand'		=> esc_html__('Expanded Search Content', 'nikah'),
			),
			'default'  => 'expand',
		),
		array(
			'id'		=>'search_bar_title',
			'type' 		=> 'text',
			'title' 	=> esc_html__('Search Bar Title', 'nikah'),
			'default' 	=> '',
			'required' => array('search_bar_style','=','expand'),
		),
		array(
			'id'		=>'search_sug_title',
			'type' 		=> 'text',
			'title' 	=> esc_html__('Search Suggestion Title', 'nikah'),
			'default' 	=> '',
			'required' => array('search_bar_style','=','expand'),
		),
		array(
			'id'       => 'search_sug_text',
			'type'     => 'textarea',
			'title'    => esc_html__('Search Suggestion Description', 'nikah'), 
			'default' 	=> '',
			'required' => array('search_bar_style','=','expand'),
		),
	);

return $nikah_header_search_opt;
}