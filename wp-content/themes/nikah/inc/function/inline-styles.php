<?php
function nikah_styles_method() {	

	wp_enqueue_style(
	'nikah-custom-style',
	get_template_directory_uri() . '/css/custom-style.css'
	);

	/*acf hero page*/
	if(class_exists('acf')) {
	
	}

	/*theme options*/
	if ( class_exists( 'Redux' )) {
	$options				= get_option('nikah_framework');
	if(!empty($options['bordered_title'])) {
		$nikah_bordered_title	= $options['bordered_title'];
	} else {
		$nikah_bordered_title	= "";
	}

	if(!empty($options['header_mob_bg_def'])) {
		$nikah_header_mob_bg_def	= $options['header_mob_bg_def'];
	} else {
		$nikah_header_mob_bg_def	= "";
	}
	if(!empty($options['header_mob_bg_alt'])) {
		$nikah_header_mob_bg_alt	= $options['header_mob_bg_alt'];
	} else {
		$nikah_header_mob_bg_alt	= "";
	}

	$nikah_bordered_width = '0px';
	if(!empty($options['bordered_width'])) {
		$nikah_bordered_width_c	= $options['bordered_width'];
	} else {
		$nikah_bordered_width_c	= "";
	}
	if(!empty($nikah_bordered_width_c["width"])){
		$nikah_bordered_width 	= $nikah_bordered_width_c["width"];
	}

	/* header area content */
	if(!empty($options['logo_padding'])) {
		$logo_padding	= $options['logo_padding'];
	} else {
		$logo_padding	= "";
	}
	$logo_padd_top = '0px';
	$logo_padd_bot = '0px';
	if(!empty($logo_padding["padding-top"])){
		$logo_padd_top = $logo_padding["padding-top"];
	}
	if(!empty($logo_padding["padding-bottom"])){
		$logo_padd_bot = $logo_padding["padding-bottom"];
	}

	if(!empty($options['mobile_padding_head'])) {
		$mobile_padding_head	= $options['mobile_padding_head'];
	} else {
		$mobile_padding_head	= "";
	}
	$mobile_padding_head_left = '0px';
	$mobile_padding_head_right = '0px';
	if(!empty($mobile_padding_head["padding-left"])){
		$mobile_padding_head_left = $mobile_padding_head["padding-left"];
	}
	if(!empty($mobile_padding_head["padding-right"])){
		$mobile_padding_head_right = $mobile_padding_head["padding-right"];
	}

	if(!empty($options['mobile_margin_logo'])) {
		$mobile_margin_logo	= $options['mobile_margin_logo'];
	} else {
		$mobile_margin_logo	= "";
	}
	$mobile_margin_logo_top = '0px';
	$mobile_margin_logo_bottom = '0px';
	if(!empty($mobile_margin_logo["margin-top"])){
		$mobile_margin_logo_top = $mobile_margin_logo["margin-top"];
	}
	if(!empty($mobile_margin_logo["margin-bottom"])){
		$mobile_margin_logo_bottom = $mobile_margin_logo["margin-bottom"];
	}

	if(!empty($options['mobile_margin_menu'])) {
		$mobile_margin_menu	= $options['mobile_margin_menu'];
	} else {
		$mobile_margin_menu	= "";
	}
	$mobile_margin_menu_top = '0px';
	$mobile_margin_menu_bottom = '0px';
	if(!empty($mobile_margin_menu["margin-top"])){
		$mobile_margin_menu_top = $mobile_margin_menu["margin-top"];
	}
	if(!empty($mobile_margin_menu["margin-bottom"])){
		$mobile_margin_menu_bottom = $mobile_margin_menu["margin-bottom"];
	}

	if(!empty($options['header_padding'])) {
		$header_padding	= $options['header_padding'];
	} else {
		$header_padding	= "";
	}
	$header_padding_top = '0px';
	$header_padding_bot = '0px';
	$header_padding_left = '0px';
	$header_padding_right = '0px';
	if(!empty($header_padding["padding-top"])){
		$header_padding_top = $header_padding["padding-top"];
	}
	if(!empty($header_padding["padding-bottom"])){
		$header_padding_bot = $header_padding["padding-bottom"];
	}
	if(!empty($header_padding["padding-left"])){
		$header_padding_left = $header_padding["padding-left"];
	}
	if(!empty($header_padding["padding-right"])){
		$header_padding_right = $header_padding["padding-right"];
	}

	if(!empty($options['header_background'])) {
		$header_background	= $options['header_background'];
	} else {
		$header_background	= array(
			"background-color" => "",
			"background-repeat" => "",
			"background-attachment" => "",
			"background-position" => "",
			"background-size" => "",
		);
	}
	$header_background_img = 'background-image: none';
	if(!empty($header_background["background-image"])){
		$header_background_img_url = $header_background["background-image"];
		$header_background_img = 'background-image: url('.$header_background_img_url.');';
	}

	if(!empty($options['header_fixed_background'])) {
		$header_fixed_background	= $options['header_fixed_background'];
	} else {
		$header_fixed_background	= "";
	}
	if(!empty($options['header_fixed_color'])) {
		$header_fixed_color			= $options['header_fixed_color'];
	} else {
		$header_fixed_color			= "";
	}
	if(!empty($options['space_when_scroll'])) {
		$space_when_scroll	= $options['space_when_scroll'];
	} else {
		$space_when_scroll	= "";
	}
	$space_when_scroll_top = '30px';
	$space_when_scroll_bot = '30px';
	$space_when_scroll_left = '0px';
	$space_when_scroll_right = '0px';
	if(!empty($header_fixed_color["padding-top"])){
		$space_when_scroll_top = $header_fixed_color["padding-top"];
	}
	if(!empty($header_fixed_color["padding-bottom"])){
		$space_when_scroll_bot = $header_fixed_color["padding-bottom"];
	}
	if(!empty($header_fixed_color["padding-left"])){
		$space_when_scroll_left = $header_fixed_color["padding-left"];
	}
	if(!empty($header_fixed_color["padding-right"])){
		$space_when_scroll_right = $header_fixed_color["padding-right"];
	}

	if(!empty($options['header_left_item_ver_margin'])) {
		$header_left_item_ver_margin	= $options['header_left_item_ver_margin'];
	} else {
		$header_left_item_ver_margin	= "";
	}
	$header_left_item_ver_margin_top = '0px';
	$header_left_item_ver_margin_bot = '0px';
	if(!empty($header_left_item_ver_margin["margin-top"])){
		$header_left_item_ver_margin_top = $header_left_item_ver_margin["margin-top"];
	}
	if(!empty($header_left_item_ver_margin["margin-bottom"])){
		$header_left_item_ver_margin_bot = $header_left_item_ver_margin["margin-bottom"];
	}

	if(!empty($options['header_right_item_ver_padding'])) {
		$header_right_item_ver_padding	= $options['header_right_item_ver_padding'];
	} else {
		$header_right_item_ver_padding	= "";
	}
	$header_right_item_ver_pad_top = '0px';
	$header_right_item_ver_pad_bot = '0px';
	if(!empty($header_right_item_ver_padding["padding-top"])){
		$header_right_item_ver_pad_top = $header_right_item_ver_padding["padding-top"];
	}
	if(!empty($header_right_item_ver_padding["padding-bottom"])){
		$header_right_item_ver_pad_bot = $header_right_item_ver_padding["padding-bottom"];
	}

	if(!empty($options['header_right_item_ver_bord'])) {
		$header_right_item_ver_bord	= $options['header_right_item_ver_bord'];
	} else {
		$header_right_item_ver_bord	= "";
	}
	$header_right_item_ver_bord_top = '1px solid #efefef';
	$header_right_item_ver_bord_bot = '1px solid #efefef';
	if(!empty($header_right_item_ver_bord["border-top"])){
		$header_right_item_bord_style = $header_right_item_ver_bord["border-style"];
		$header_right_item_bord_color = $header_right_item_ver_bord["border-color"];
		$header_right_item_ver_bord_top_val = $header_right_item_ver_bord["border-top"];
		$header_right_item_ver_bord_top = $header_right_item_ver_bord_top_val .' '. $header_right_item_bord_style .' '. $header_right_item_bord_color;
	}
	if(!empty($header_right_item_ver_bord["border-bottom"])){
		$header_right_item_bord_style = $header_right_item_ver_bord["border-style"];
		$header_right_item_bord_color = $header_right_item_ver_bord["border-color"];
		$header_right_item_ver_bord_bot_val = $header_right_item_ver_bord["border-bottom"];
		$header_right_item_ver_bord_bot = $header_right_item_ver_bord_bot_val .' '. $header_right_item_bord_style .' '. $header_right_item_bord_color;
	}

	if(!empty($options['header_left_item_margin'])) {
		$header_left_item_margin	= $options['header_left_item_margin'];
	} else {
		$header_left_item_margin	= "";
	}
	$header_left_item_margin_left = '0px';
	$header_left_item_margin_right = '0px';
	if(!empty($header_left_item_margin["margin-left"])){
		$header_left_item_margin_left = $header_left_item_margin["margin-left"];
	}
	if(!empty($header_left_item_margin["margin-right"])){
		$header_left_item_margin_right = $header_left_item_margin["margin-right"];
	}

	// padding header right item
	if(!empty($options['header_right_item_padding'])) {
		$header_right_item_padding	= $options['header_right_item_padding'];
	} else {
		$header_right_item_padding	= "";
	}
	$header_right_item_padding_top = '0px';
	$header_right_item_padding_bot = '0px';
	if(!empty($header_right_item_padding["padding-top"])){
		$header_right_item_padding_top = $header_right_item_padding["padding-top"];
	}
	if(!empty($header_right_item_padding["padding-bottom"])){
		$header_right_item_padding_bot = $header_right_item_padding["padding-bottom"];
	}

	// margin header right item
	if(!empty($options['header_right_item_margin'])) {
		$header_right_item_margin	= $options['header_right_item_margin'];
	} else {
		$header_right_item_margin	= "";
	}
	$header_right_item_margin_left = '0px';
	$header_right_item_margin_right = '20px';
	if(!empty($header_right_item_margin["margin-left"])){
		$header_right_item_margin_left = $header_right_item_margin["margin-left"];
	}
	if(!empty($header_right_item_margin["margin-right"])){
		$header_right_item_margin_right = $header_right_item_margin["margin-right"];
	}
	if(!empty($options['header_text_color'])) {
		$header_text_color = $options['header_text_color'];
	} else {
		$header_text_color = "";
	}

	/* footer area content */
	if(!empty($options['footer_padding'])) {
		$footer_padding	= $options['footer_padding'];
	} else {
		$footer_padding	= "";
	}
	$footwrap_padd_top = '0px';
	$footwrap_padd_bot = '0px';
	if(!empty($footer_padding["padding-top"])){
		$footwrap_padd_top = $footer_padding["padding-top"];
	}
	if(!empty($footer_padding["padding-bottom"])){
		$footwrap_padd_bot = $footer_padding["padding-bottom"];
	}

	if(!empty($options['footer_background'])) {
		$footer_background	= $options['footer_background'];
	} else {
		$footer_background	= "";
	}
	if(empty($footer_background)) {
		$footer_bg_color = 'transparent';
		$footer_bg_repeat = 'no-repeat';
		$footer_bg_attach = 'inherit';
		$footer_bg_position = 'center center';
		$footer_bg_size = 'inherit';
	}
	else {
		$footer_bg_color = $footer_background["background-color"];
		$footer_bg_repeat = $footer_background["background-repeat"];
		$footer_bg_attach = $footer_background["background-attachment"];
		$footer_bg_position = $footer_background["background-position"];
		$footer_bg_size = $footer_background["background-size"];
	}
	$footer_background_img = 'background-image: none';
	if(!empty($footer_background["background-image"])){
		$footer_background_img_url = $footer_background["background-image"];
		$footer_background_img = 'background-image: url('.$footer_background_img_url.');';
	}

	$foot_col1_martop = '0px';
	$foot_col1_marleft = '0px';
	$foot_col1_marbot = '0px';
	$foot_col1_marright = '0px';
	if(!empty($options['foot_col1_margin'])) {
		$foot_col1_margin	= $options['foot_col1_margin'];
	} else {
		$foot_col1_margin	= "";
	}
	if(!empty($foot_col1_margin["margin-top"])){
		$foot_col1_martop = $foot_col1_margin["margin-top"];
	}
	if(!empty($foot_col1_margin["margin-left"])){
		$foot_col1_marleft = $foot_col1_margin["margin-left"];
	}
	if(!empty($foot_col1_margin["margin-bottom"])){
		$foot_col1_marbot = $foot_col1_margin["margin-bottom"];
	}
	if(!empty($foot_col1_margin["margin-right"])){
		$foot_col1_marright = $foot_col1_margin["margin-right"];
	}

	$foot_col2_martop = '0px';
	$foot_col2_marleft = '0px';
	$foot_col2_marbot = '0px';
	$foot_col2_marright = '0px';
	if(!empty($options['foot_col2_margin'])) {
		$foot_col2_margin	= $options['foot_col2_margin'];
	} else {
		$foot_col2_margin	= "";
	}
	if(!empty($foot_col2_margin["margin-top"])){
		$foot_col2_martop = $foot_col2_margin["margin-top"];
	}
	if(!empty($foot_col2_margin["margin-left"])){
		$foot_col2_marleft = $foot_col2_margin["margin-left"];
	}
	if(!empty($foot_col2_margin["margin-bottom"])){
		$foot_col2_marbot = $foot_col2_margin["margin-bottom"];
	}
	if(!empty($foot_col2_margin["margin-right"])){
		$foot_col2_marright = $foot_col2_margin["margin-right"];
	}

	$foot_col3_martop = '0px';
	$foot_col3_marleft = '0px';
	$foot_col3_marbot = '0px';
	$foot_col3_marright = '0px';
	if(!empty($options['foot_col3_margin'])) {
		$foot_col3_margin	= $options['foot_col3_margin'];
	} else {
		$foot_col3_margin	= "";
	}
	if(!empty($foot_col3_margin["margin-top"])){
		$foot_col3_martop = $foot_col3_margin["margin-top"];
	}
	if(!empty($foot_col3_margin["margin-left"])){
		$foot_col3_marleft = $foot_col3_margin["margin-left"];
	}
	if(!empty($foot_col3_margin["margin-bottom"])){
		$foot_col3_marbot = $foot_col3_margin["margin-bottom"];
	}
	if(!empty($foot_col3_margin["margin-right"])){
		$foot_col3_marright = $foot_col3_margin["margin-right"];
	}

	$foot_col4_martop = '0px';
	$foot_col4_marleft = '0px';
	$foot_col4_marbot = '0px';
	$foot_col4_marright = '0px';
	if(!empty($options['foot_col4_margin'])) {
		$foot_col4_margin	= $options['foot_col4_margin'];
	} else {
		$foot_col4_margin	= "";
	}
	if(!empty($foot_col4_margin["margin-top"])){
		$foot_col4_martop = $foot_col4_margin["margin-top"];
	}
	if(!empty($foot_col4_margin["margin-left"])){
		$foot_col4_marleft = $foot_col4_margin["margin-left"];
	}
	if(!empty($foot_col4_margin["margin-bottom"])){
		$foot_col4_marbot = $foot_col4_margin["margin-bottom"];
	}
	if(!empty($foot_col4_margin["margin-right"])){
		$foot_col4_marright = $foot_col4_margin["margin-right"];
	}

	/*the fonts*/
	if(!empty($options['header1-menu-typography'])) {
		$header1_menu_typography	= $options['header1-menu-typography'];
	} else {
		$header1_menu_typography	= "";
	}
	if(!empty($options['content-body-font'])) {
		$content_body_font			= $options['content-body-font'];
	} else {
		$content_body_font			= array(
			"font-family" => "",
			"font-style" => "",
			"text-align" => "",
			"font-size" => "",
			"line-height" => "",
			"word-spacing" => "",
			"letter-spacing" => "",
		);
	}
	if(!empty($content_body_font["font-weight"])) {
		$content_body_font_weight = $content_body_font["font-weight"];
	}
	else {
		$content_body_font_weight = $content_body_font["font-style"];
	}
	if(!empty($options['content-heading-font'])) {
		$content_heading_font		= $options['content-heading-font'];
	} else {
		$content_heading_font		= array(
			"font-family" => "",
			"text-align" => ""
		);
	}
	if(!empty($content_heading_font["font-weight"])) {
		$content_heading_font_weight = $content_heading_font["font-weight"];
	}
	else {
		$content_heading_font_weight = "";
	}
	if(!empty($options['header-mobile-typography'])) {
		$header_mobile_typography	= $options['header-mobile-typography'];
	} else {
		$header_mobile_typography	= array(
			"font-size" => "",
			"font-weight" => "",
			"text-align" => "",
			"line-height" => "",
			"word-spacing" => "",
			"letter-spacing" => ""
		);
	}

	if(!empty($options['heading1_typo'])) {
		$heading1_typo	= $options['heading1_typo'];
	} else {
		$heading1_typo	= array(
			"font-size" => "",
			"line-height" => "",
			"word-spacing" => "",
			"letter-spacing" => ""
		);
	}
	if(!empty($options['heading2_typo'])) {
		$heading2_typo	= $options['heading2_typo'];
	} else {
		$heading2_typo	= array(
			"font-size" => "",
			"line-height" => "",
			"word-spacing" => "",
			"letter-spacing" => ""
		);
	}
	if(!empty($options['heading3_typo'])) {
		$heading3_typo	= $options['heading3_typo'];
	} else {
		$heading3_typo	= array(
			"font-size" => "",
			"line-height" => "",
			"word-spacing" => "",
			"letter-spacing" => ""
		);
	}
	if(!empty($options['heading4_typo'])) {
		$heading4_typo	= $options['heading4_typo'];
	} else {
		$heading4_typo	= array(
			"font-size" => "",
			"line-height" => "",
			"word-spacing" => "",
			"letter-spacing" => ""
		);
	}
	if(!empty($options['heading5_typo'])) {
		$heading5_typo	= $options['heading5_typo'];
	} else {
		$heading5_typo	= array(
			"font-size" => "",
			"line-height" => "",
			"word-spacing" => "",
			"letter-spacing" => ""
		);
	}
	if(!empty($options['heading6_typo'])) {
		$heading6_typo	= $options['heading6_typo'];
	} else {
		$heading6_typo	= array(
			"font-size" => "",
			"line-height" => "",
			"word-spacing" => "",
			"letter-spacing" => ""
		);
	}

	}

	/* container */
	$nikah_custom_background				= get_theme_mod( 'custom-background' );



	/* HEADER SECTION
	================================================== */


	//header default styling

	$menu_header	   							=	get_option('menu_header', '#000000');
	$menu_hover_header	   						=	get_option('menu_hover_header', '#111111');
	$menu_border	   							=	get_option('menu_border', '#000000');
	$sub_bg	   									=	get_option('sub_bg', '#000000');
	$sub_menu   								=	get_option('sub_menu', '#ffffff');
	$search_close   							=	get_option('search_close', '#ffffff');
	$search_bar_title   						=	get_option('search_bar_title', '#ffffff');
	$search_sugges   							=	get_option('search_sugges', '#ffffff');
	$search_desc_sugges   						=	get_option('search_desc_sugges', '#ffffff');
	$search_bord   								=	get_option('search_bord', '#ffffff');

	//header alternative styling

	$alt_menu_hover	   							=	get_option('alt_menu_hover', '#dddddd');
	$alt_menu_border	  						=	get_option('alt_menu_border', '#ffffff');

	//header style 2

	$icon_burger	   							=	get_option('icon_burger', '#000000');
	$menu_style45	   							=	get_option('menu_style45', '#000000');
	$menu_hov_style45	   						=	get_option('menu_hov_style45', '#999999');


	/* CONTENT SECTION
	================================================== */

	//blog

	$category_meta	   							=	get_option('category_meta', '#8db392');
	$category_meta_hover	   					=	get_option('category_meta_hover', '#666666');
	$category_meta_border	   					=	get_option('category_meta_border', '#8db392');
	$post_title			   						=	get_option('post_title', '#555555');
	$post_hover_title			   				=	get_option('post_hover_title', '#999999');
	$post_date			   						=	get_option('post_date', '#888888');
	$post_desc			  		 				=	get_option('post_desc', '#666666');
	$read_more			  		 				=	get_option('read_more', '#ffffff');
	$read_hover_more			  		 		=	get_option('read_hover_more', '#000000');
	$read_more_bg			  		 			=	get_option('read_more_bg', '#8db392');
	$read_more_bg_hover			  		 		=	get_option('read_more_bg_hover', '#eaeaea');
	$blog_bg			  		 				=	get_option('blog_bg', '#ffffff');
	$blog_border_bottom			  		 		=	get_option('blog_border_bottom', '#8db392');

	//single blog

	$title_single			  		 			=	get_option('title_single', '#000000');
	$title_single_hover			  		 		=	get_option('title_single_hover', '#666666');
	$meta_single			  			 		=	get_option('meta_single', '#000000');
	$meta_single_hover			  			 	=	get_option('meta_single_hover', '#999999');
	$category_bg				 				=	get_option('category_bg', '#8db392');
	$category_bg_hover				 			=	get_option('category_bg_hover', '#9cc3a1');
	$category_text				 				=	get_option('category_text', '#ffffff');
	$category_text_hover				 		=	get_option('category_text_hover', '#f5f5f5');
	$comment_single			  		 			=	get_option('comment_single', '#000000');
	$comment_single_hover				 		=	get_option('comment_single_hover', '#666666');
	$border_long				 				=	get_option('border_long', '#dedede');
	$border_short				 				=	get_option('border_short', '#8db392');
	$text_single				 				=	get_option('text_single', '#777777');
	$text_quote				 					=	get_option('text_quote', '#000000');
	$quote_border				  		 		=	get_option('quote_border', '#eaeaea');
	$quote_icon				  		 			=	get_option('quote_icon', '#111111');
	$tag_text				  		 			=	get_option('tag_text', '#000000');
	$tag_hover				  		 			=	get_option('tag_hover', '#666666');
	$tag_bg				  		 				=	get_option('tag_bg', '#f3f3f3');
	$tag_bg_hover				  		 		=	get_option('tag_bg_hover', '#e6e6e6');
	$meta_bg				  		 			=	get_option('meta_bg', '#f2f2f2');
	$author_top_border				  		 	=	get_option('author_top_border', '#8db392');
	$name_text				  		 			=	get_option('name_text', '#000000');
	$name_link				  		 			=	get_option('name_link', '#8db392');
	$name_link_hover				  		 	=	get_option('name_link_hover', '#9cc3a1');
	$prev_bord				  		 			=	get_option('prev_bord', '#f2f2f2');
	$prev_text				  		 			=	get_option('prev_text', '#000000');
	$prev_icon				  		 			=	get_option('prev_icon', '#8db392');
	$prev_link				  		 			=	get_option('prev_link', '#000000');
	$prev_hover_link				  		 	=	get_option('prev_hover_link', '#999999');
	$comment_title				  		 		=	get_option('comment_title', '#000000');
	$comment_link				  		 		=	get_option('comment_link', '#999999');
	$comment_hover_link				  		 	=	get_option('comment_hover_link', '#000000');
	$btn_comment_bg				  		 		=	get_option('btn_comment_bg', '#000000');
	$btn_comment_text				  		 	=	get_option('btn_comment_text', '#ffffff');
	$next_archive				  			 	=	get_option('next_archive', '#ffffff');

	//sidebar & widget

	$sidebar_search_bg	   						=	get_option('sidebar_search_bg', '#ffffff');
	$sidebar_search_btn	   						=	get_option('sidebar_search_btn', '#8db392');
	$sidebar_search_icon	   					=	get_option('sidebar_search_icon', '#ffffff');
	$sidebar_search_text	   					=	get_option('sidebar_search_text', '#aaaaaa');
	$sidebar_bg	   								=	get_option('sidebar_bg', '#ffffff');
	$nikah_widget_title	   						=	get_option('nikah_widget_title', '#555555');
	$nikah_border_title	   						=	get_option('nikah_border_title', '#8db392');
	$link_text_sidebar	   						=	get_option('link_text_sidebar', '#555555');
	$link_hover_sidebar	   						=	get_option('link_hover_sidebar', '#999999');
	$bg_tabs	   								=	get_option('bg_tabs', '#8db392');
	$text_tabs	   								=	get_option('text_tabs', '#ffffff');
	$bg_tabs2	   								=	get_option('bg_tabs2', '#ffffff');
	$text_tabs2	   								=	get_option('text_tabs2', '#555555');
	$text_tabs2_hover	   						=	get_option('text_tabs2_hover', '#999999');
	$border_tabs	   							=	get_option('border_tabs', '#8db392');

	//Contact

	$form_bord	   								=	get_option('form_bord', '#cdcdcc');
	$form_bord_hover	   						=	get_option('form_bord_hover', '#000000');
	$text_input	   								=	get_option('text_input', '#000000');
	$btn_send	   								=	get_option('btn_send', '#000000');
	$btn_send_text	   							=	get_option('btn_send_text', '#ffffff');
	$btn_send_hover	   							=	get_option('btn_send_hover', '#333333');
	$btn_send_text_hover	   					=	get_option('btn_send_text_hover', '#ffffff');


	/* PORTFOLIO
	================================================== */

	//portfolio single

	$port_title	   								=	get_option('port_title', '#000000');
	$category_portfolio	   						=	get_option('category_portfolio', '#8db392');
	$detail1_title	   							=	get_option('detail1_title', '#000000');
	$detail1_p	   								=	get_option('detail1_p', '#888888');
	$detail1_border	   							=	get_option('detail1_border', '#e5e5e5');
	$detail1_desc	   							=	get_option('detail1_desc', '#555555');
	$detail1_pagination	   						=	get_option('detail1_pagination', '#000000');
	$detail1_hov_pagination	   					=	get_option('detail1_hov_pagination', '#666666');


	/* FOOTER
	================================================== */

	//footer

	$border_footer	   							=	get_option('border_footer', '#f2f2f2');
	$footer_text	   							=	get_option('footer_text', '#000000');
	$footer_link	   							=	get_option('footer_link', '#000000');
	$footer_hover_link	   						=	get_option('footer_hover_link', '#666666');
	$footer_social	   							=	get_option('footer_social', '#000000');
	$footer_hover_social	   					=	get_option('footer_hover_social', '#666666');
	$footer_widget_bg							=	get_option('footer_widget_bg', '#ffffff');
	$footer_widget_title	   					=	get_option('footer_widget_title', '#000000');
	$link_text_widget	   						=	get_option('link_text_widget', '#555555');
	$link_hover_widget	   						=	get_option('link_hover_widget', '#999999');
	$text_widget	   							=	get_option('text_widget', '#000000');
	$border_widget	   							=	get_option('border_widget', '#dddddd');



	/* Inline Styles Function */
	if(class_exists('acf')){
	$acf_css = "
	
	";

	wp_add_inline_style( 'nikah-custom-style', $acf_css );
	}

	if(class_exists('Redux')){
	$redux_css = "
	/* theme options */
	.bordered{
	  background-color: {$nikah_bordered_title};
	}

	/* container */
	.bordered-main-wrap {
		padding-left: {$nikah_bordered_width};
		padding-right: {$nikah_bordered_width};
	}

	@media only screen and (max-width: 768px) {
		header#header.inner-head-wrap.header-expanded {
			background-color: {$nikah_header_mob_bg_def};
		}
		header#header.inner-head-wrap.header-expanded.alt-head {
			background-color: {$nikah_header_mob_bg_alt};
		}
	}

	/* header area contents */
	#header .logo-image, #header .logo-title {
		padding-top: {$logo_padd_top};
		padding-bottom: {$logo_padd_bot};
	}
	header#header.inner-head-wrap {
		padding-top: {$header_padding_top};
		padding-bottom: {$header_padding_bot};
		padding-right: {$header_padding_right};
		padding-left: {$header_padding_left};
		-webkit-transition: all 0.5s ease 0s;
	    -moz-transition: all 0.5s ease 0s;
	    transition: all 0.5s ease 0s;

		background-color: {$header_background["background-color"]};
		background-repeat: {$header_background["background-repeat"]};
		background-attachment: {$header_background["background-attachment"]};
		background-position: {$header_background["background-position"]};
		background-size: {$header_background["background-size"]};
		{$header_background_img};
	}
	.sticky-header-wrap.scrolled header#header.inner-head-wrap {
		padding-top: {$space_when_scroll_top};
		padding-bottom: {$space_when_scroll_bot};
		padding-right: {$space_when_scroll_right};
		padding-left: {$space_when_scroll_left};
	    -moz-transition: all 0.6s ease 0s;
	    -ms-transition: all 0.6s ease 0s;
	    -o-transition: all 0.6s ease 0s;
	    transition: all 0.6s ease 0s;
	}
	.sticky-header-wrap.scrolled {
		background-color: {$header_fixed_background};
	    -moz-transition: all 0.6s ease 0s;
	    -ms-transition: all 0.6s ease 0s;
	    -o-transition: all 0.6s ease 0s;
	    transition: all 0.6s ease 0s;
	}
	.sticky-header-wrap.scrolled a, .sticky-header-wrap.scrolled i {
		color: {$header_fixed_color} !important;
	    -moz-transition: all 0.6s ease 0s;
	    -ms-transition: all 0.6s ease 0s;
	    -o-transition: all 0.6s ease 0s;
	    transition: all 0.6s ease 0s;
	}
	#header.alt-head #showMenu span {
		background-color: {$header_text_color};
	}

	.fl.vertical.header_left_nofloat {
		margin-top: {$header_left_item_ver_margin_top};
		margin-bottom: {$header_left_item_ver_margin_bot};
	}

	.fr.vertical.header_right_nofloat {
		padding-top: {$header_right_item_ver_pad_top};
		padding-bottom: {$header_right_item_ver_pad_bot};
		border-top: {$header_right_item_ver_bord_top};
		border-bottom: {$header_right_item_ver_bord_bot};
	}

	.fl.horizontal .head-item {
		margin-left: {$header_left_item_margin_left};
		margin-right: {$header_left_item_margin_right};
	}

	.fr .head-item {
		padding-top: {$header_right_item_padding_top} !important;
		padding-bottom: {$header_right_item_padding_bot} !important;
	}
	.fr.horizontal .head-item {
		margin-left: {$header_right_item_margin_left} !important;
		margin-right: {$header_right_item_margin_right} !important;
	}
	
	@media only screen and (max-width: 768px) {
		header#header.inner-head-wrap {
			padding-left: {$mobile_padding_head_left};
			padding-right: {$mobile_padding_head_right};
		}
		header#header .logo.head-item {
			margin-top: {$mobile_margin_logo_top};
			margin-bottom: {$mobile_margin_logo_bottom};
		}
		.header-style-1 .fr .head-item.search-wrap, header#header .main-menu-btn {
			margin-top: {$mobile_margin_menu_top} !important;
			margin-bottom: {$mobile_margin_menu_bottom} !important;
		}
	}

	/* footer area content */
	#footer .footer-wrap {
		padding-top: {$footwrap_padd_top};
		padding-bottom: {$footwrap_padd_bot};
	}
	#footer {
		background-color: {$footer_bg_color};
		background-repeat: {$footer_bg_repeat};
		background-attachment: {$footer_bg_attach};
		background-position: {$footer_bg_position};
		background-size: {$footer_bg_size};
		{$footer_background_img};
	}
	.foot-col.item-col-1 .foot-col-item {
		margin-top: {$foot_col1_martop};
		margin-left: {$foot_col1_marleft};
		margin-bottom: {$foot_col1_marbot};
		margin-right: {$foot_col1_marright};
	}
	.foot-col.item-col-1 .foot-col-item:first-child {
		margin-left: 0;
	}
	.foot-col.item-col-1 .foot-col-item:last-child {
		margin-right: 0;
	}

	.foot-col.item-col-2 .foot-col-item {
		margin-top: {$foot_col2_martop};
		margin-left: {$foot_col2_marleft};
		margin-bottom: {$foot_col2_marbot};
		margin-right: {$foot_col2_marright};
	}
	.foot-col.item-col-2 .foot-col-item:first-child {
		margin-left: 0;
	}
	.foot-col.item-col-2 .foot-col-item:last-child {
		margin-right: 0;
	}

	.foot-col.item-col-3 .foot-col-item {
		margin-top: {$foot_col3_martop};
		margin-left: {$foot_col3_marleft};
		margin-bottom: {$foot_col3_marbot};
		margin-right: {$foot_col3_marright};
	}
	.foot-col.item-col-3 .foot-col-item:first-child {
		margin-left: 0;
	}
	.foot-col.item-col-3 .foot-col-item:last-child {
		margin-right: 0;
	}

	.foot-col.item-col-4 .foot-col-item {
		margin-top: {$foot_col4_martop};
		margin-left: {$foot_col4_marleft};
		margin-bottom: {$foot_col4_marbot};
		margin-right: {$foot_col4_marright};
	}
	.foot-col.item-col-4 .foot-col-item:first-child {
		margin-left: 0;
	}
	.foot-col.item-col-4 .foot-col-item:last-child {
		margin-right: 0;
	}	

	/*fonts*/
	body, body p, .comment-respond form p.form-submit input, .blog-item .meta-wrapper .author a, .blog-item .meta-wrapper span.standard-post-categories {
		font-family: {$content_body_font["font-family"]};
		font-weight: {$content_body_font_weight};
		text-align: {$content_body_font["text-align"]};
		font-size: {$content_body_font["font-size"]};
		line-height: {$content_body_font["line-height"]};
		word-spacing: {$content_body_font["word-spacing"]};
		letter-spacing: {$content_body_font["letter-spacing"]};
	}
	h1, h2, h3, h4, h5, h6 {
		font-family: {$content_heading_font["font-family"]};
		font-weight: {$content_heading_font_weight};
		text-align: {$content_heading_font["text-align"]};
	}

	.meta.meta-comments .comments {
		font-family: {$content_heading_font["font-family"]};
	}

	h1 {
		text-align: inherit;
		font-size: {$heading1_typo["font-size"]};
		line-height: {$heading1_typo["line-height"]};
		word-spacing: {$heading1_typo["word-spacing"]};
		letter-spacing: {$heading1_typo["letter-spacing"]};
	}
	h2 {
		text-align: inherit;
		font-size: {$heading2_typo["font-size"]};
		line-height: {$heading2_typo["line-height"]};
		word-spacing: {$heading2_typo["word-spacing"]};
		letter-spacing: {$heading2_typo["letter-spacing"]};
	}
	h3 {
		text-align: inherit;
		font-size: {$heading3_typo["font-size"]};
		line-height: {$heading3_typo["line-height"]};
		word-spacing: {$heading3_typo["word-spacing"]};
		letter-spacing: {$heading3_typo["letter-spacing"]};
	}
	h4 {
		text-align: inherit;
		font-size: {$heading4_typo["font-size"]};
		line-height: {$heading4_typo["line-height"]};
		word-spacing: {$heading4_typo["word-spacing"]};
		letter-spacing: {$heading4_typo["letter-spacing"]};
	}
	h5 {
		text-align: inherit;
		font-size: {$heading5_typo["font-size"]};
		line-height: {$heading5_typo["line-height"]};
		word-spacing: {$heading5_typo["word-spacing"]};
		letter-spacing: {$heading5_typo["letter-spacing"]};
	}
	h6 {
		text-align: inherit;
		font-size: {$heading6_typo["font-size"]};
		line-height: {$heading6_typo["line-height"]};
		word-spacing: {$heading6_typo["word-spacing"]};
		letter-spacing: {$heading6_typo["letter-spacing"]};
	}

	@media only screen and (max-width: 768px) {
		#main-wrapper #header #primary-menu li a {
			font-weight: {$header_mobile_typography["font-weight"]};
			text-align: {$header_mobile_typography["text-align"]};
			font-size: {$header_mobile_typography["font-size"]};
			line-height: {$header_mobile_typography["line-height"]};
			word-spacing: {$header_mobile_typography["word-spacing"]};
			letter-spacing: {$header_mobile_typography["letter-spacing"]};
		}
	}
	";

	wp_add_inline_style( 'nikah-custom-style', $redux_css );
	}

	$custom_css = "


	/* HEADER SECTION
	================================================================ */

	/* Header Default Styling --- */

	.header-style-1-wrap .main-menu ul.sm-clean>li>a, .header-style-1-wrap .main-menu ul.sm-clean>li>a:active, .header-style-1-wrap .search-wrap #btn-search i, .header-style-1-wrap .main-menu ul.sm-clean>li.current-menu-item>a, .header-style-1-wrap .main-menu ul.sm-clean>li>a:hover{
		color: {$menu_header};
	}
	.sm-clean a span.sub-arrow{
		border-top-color: {$menu_header};
	}
	.header-style-1-wrap .main-menu ul.sm-clean>li>a:hover, .header-style-1-wrap .menu__item:hover .menu__link{
		color: {$menu_hover_header};
	}
	.header-style-1-wrap .main-menu ul.sm-clean>li>a::before, .header-style-1-wrap .main-menu ul.sm-clean>li.current-menu-item>a::before,
	.header-style-1-wrap .main-menu ul.sm-clean>li>a::after, .header-style-1-wrap .main-menu ul.sm-clean>li.current-menu-item>a::after,
	.header-style-1-wrap .main-menu ul.sm-clean>li::before,
	.header-style-1-wrap .main-menu ul.sm-clean>li::after{
		background-color: {$menu_border};
		border-color: {$menu_border};
	}
	.header-style-1-wrap ul.sm-clean ul{
		background-color: {$sub_bg};
	}
	.header-style-1-wrap ul.sm-clean ul li a{
		color: {$sub_menu};
	}
	.header-style-1 .btn--search-close{
		color: {$search_close};
	}
	.header-style-1 .search__info{
		color: {$search_bar_title};
	}
	.header-style-1 .search__suggestion h4{
		color: {$search_sugges};
	}
	.header-style-1 .search__suggestion h4::before{
		background-color: {$search_sugges};
	}
	.header-style-1 .search__suggestion p{
		color: {$search_desc_sugges};
	}
	.header-style-1 .search__input{
		color: {$search_bord};
	}


	/* Header Alternative Styling --- */

	body .alt-head .main-menu ul.sm-clean>li>a:hover,
	.header-style-1-wrap.alt-head .main-menu ul.sm-clean>li>a:hover, 
	.header-style-1-wrap.alt-head .menu__item:hover .menu__link{
		color: {$alt_menu_hover};
	}
	body .alt-head .main-menu ul.sm-clean>li>a::before, body .alt-head .main-menu ul.sm-clean>li.current-menu-item>a::before{
		background-color: {$alt_menu_border};
	}


	/* Header Style 2 --- */

	.header-style-5 #showMenu span, .header-style-4 #showMenu span, .header-style-6 #showMenu span{
		background-color: {$icon_burger};
	}
	.effect-moveleft .outer-nav a, .effect-airbnb .outer-nav a, .effect-movedown.animate .outer-nav a{
		color: {$menu_style45};
	}
	.effect-moveleft .outer-nav a:hover, .effect-airbnb .outer-nav a:hover, .effect-movedown.animate .outer-nav a:hover{
		color: {$menu_hov_style45};
	}


	/* CONTENT SECTION
	================================================================ */

	/* Blog --- */

	.post-masonry-style .loop-content .category a{
		color: {$category_meta};
	}
	.post-masonry-style .loop-content .category a:hover{
		color: {$category_meta_hover};
	}
	.post-masonry-style .loop-content .category:after{
		background-color: {$category_meta_border};
	}
	.post-masonry-style .loop-content h4.title a{
		color: {$post_title};
	}
	.post-masonry-style .loop-content h4.title a:hover{
		color: {$post_hover_title};
	}
	.post-masonry-style .loop-content .date{
		color: {$post_date};
	}
	.post-masonry-style .loop-content p{
		color: {$post_desc};
	}
	.post-masonry-style a.more{
		color: {$read_more};
	}
	.post-masonry-style a.more:hover{
		color: {$read_hover_more};
	}
	.post-masonry-style a.more{
		background-color: {$read_more_bg};
	}
	.post-masonry-style a.more:hover{
		background-color: {$read_more_bg_hover};
	}
	.post-masonry-style .loop-content{
		background-color: {$blog_bg};
	}
	.post-masonry-style .loop-content{
		border-bottom-color: {$blog_border_bottom};
	}


	/* Single Blog --- */

	.blog-item .meta-wrapper a, .single-post-style-3-inner-content h1.post-title a{
		color: {$title_single};
	}
	.blog-item .meta-wrapper a:hover, .single-post-style-3-inner-content h1.post-title a:hover{
		color: {$title_single_hover};
	}
	.blog-style-2 .post-content-style-2, .blog-item .meta-wrapper .author a, .author-separator, .blog-item .meta-wrapper .date a, .date span, .blog-item .meta-wrapper .standard-post-categories a, .social-share-wrapper span, .blog-single .meta-info, .single-post-style-3-inner-content .post-meta span.vcard{
		color: {$meta_single};
	}
	.blog-item .meta-wrapper .author a:hover, .blog-item .meta-wrapper .date a:hover, .blog-item .meta-wrapper .standard-post-categories a:hover, .single-post-style-3-inner-content .post-meta span.vcard:hover{
		color: {$meta_single_hover};
	}
	.magazine-post-style .standard-post-categories .post-categories a{
		background-color: {$category_bg};
	}
	.magazine-post-style .standard-post-categories .post-categories a:hover{
		background-color: {$category_bg_hover};
	}
	.magazine-post-style .standard-post-categories .post-categories a{
		color: {$category_text};
	}
	.magazine-post-style .standard-post-categories .post-categories a:hover{
		color: {$category_text_hover};
	}
	.meta.meta-comments a.comments span, .icon-simple-line-icons-124:before{
		color: {$comment_single};
	}
	.meta.meta-comments a.comments:hover span{
		color: {$comment_single_hover};
	}
	.separator-line{
		background-color: {$border_long};
	}
	.separator-line>span{
		background-color: {$border_short};
	}
	.post-content .post-text p, .comment-content p{
		color: {$text_single};
	}
	.post-content blockquote p{
		color: {$text_quote};
	}
	.post-text blockquote p:before{
		border-color: {$quote_border};
	}
	.post-text blockquote p:after{
		color: {$quote_icon};
	}
	.tag-wrapper a, .tag-wrapper span{
		color: {$tag_text};
	}
	.tag-wrapper a:hover{
		color: {$tag_hover};
	}
	.single-post-style .tag-wrapper a{
		background-color: {$tag_bg};
	}
	.single-post-style .tag-wrapper a:hover{
		background-color: {$tag_bg_hover};
	}
	.meta-content-bottom{
		background-color: {$meta_bg};
	}
	.blog-single .post-author{
		border-top-color: {$author_top_border};
	}
	.magazine-post-style .author-desc span{
		color: {$name_text};
	}
	.magazine-post-style .author-desc a{
		color: {$name_link};
	}
	.magazine-post-style .author-desc a:hover{
		color: {$name_link_hover};
	}
	.blog-single .next-prev-post, .comment-list{
		border-top-color: {$prev_bord};
		border-bottom-color: {$prev_bord};
	}
	.magazine-post-style .next-prev-post .column p{
		color: {$prev_text};
	}
	.magazine-post-style .next-prev-post .column p i{
		color: {$prev_icon};
	}
	.blog-single .next-prev-post a{
		color: {$prev_link};
	}
	.blog-single .next-prev-post a:hover{
		color: {$prev_hover_link};
	}
	.comment-respond h3.comment-reply-title, .comments-title h3{
		color: {$comment_title};
	}
	.comment-respond form p.logged-in-as a, .comment-respond form p.logged-in-as, .comment-action a{
		color: {$comment_link};
	}
	.comment-respond form p.logged-in-as a:hover, .comment-action a:hover{
		color: {$comment_hover_link};
	}
	.comment-respond form p.form-submit input, .contact-form-style-1 .wpcf7-submit, .contact-form-style-2 .wpcf7-submit{
		background-color: {$btn_comment_bg};
	}
	.comment-respond form p.form-submit input, .contact-form-style-1 .wpcf7-submit, .contact-form-style-2 .wpcf7-submit{
		color: {$btn_comment_text};
	}
	.archive .post-navigation .btn, .search-page .post-navigation .btn{
		color: {$next_archive};
	}


	/* Sidebar & Widget --- */

	.sidebar .widget.widget_search input{
		background-color: {$sidebar_search_bg};
	}
	.sidebar .widget.widget_search button{
		background-color: {$sidebar_search_btn};
	}
	.sidebar .widget.widget_search button i{
		color: {$sidebar_search_icon};
	}
	.sidebar .widget.widget_search input{
		color: {$sidebar_search_text};
	}
	.sidebar .widget{
		background-color: {$sidebar_bg};
	}
	.sidebar .widget h4.widget-title{
		color: {$nikah_widget_title};
	}
	.sidebar .widget h4.widget-title:after{
		background-color: {$nikah_border_title};
	}
	.sidebar #recent-posts-2 ul li a, .sidebar .widget .recent-news .post-content h5 a, .sidebar #recent-comments-2 ul li a, li.recentcomments, .sidebar #archives-2 ul li a, .sidebar #categories-2 ul li a, .sidebar #meta-2 ul li a, .latest-post-wrap h5 a, .latest-post-wrap .post-content h5{
		color: {$link_text_sidebar};
	}
	.sidebar #recent-posts-2 ul li a:hover, .sidebar .widget .recent-news .post-content h5 a:hover, .sidebar #recent-comments-2 ul li a:hover, li.recentcomments:hover, .sidebar #archives-2 ul li a:hover, .sidebar #categories-2 ul li a:hover, .sidebar #meta-2 ul li a:hover, .latest-post-wrap h5 a:hover, .latest-post-wrap .post-content h5:hover{
		color: {$link_hover_sidebar};
	}
	.widget.widget_nikah_news .nav-tabs li.active, .widget.widget_nikah_news .post-item:before{
		background-color: {$bg_tabs};
	}
	.widget.widget_nikah_news .nav-tabs li.active a, .widget.widget_nikah_news .post-item:before{
		color: {$text_tabs};
	}
	.widget.widget_nikah_news .nav-tabs li{
		background-color: {$bg_tabs2};
	}
	.widget.widget_nikah_news .nav-tabs li a{
		color: {$text_tabs2};
	}
	.widget.widget_nikah_news .nav-tabs li a:hover{
		color: {$text_tabs2_hover};
	}
	.widget.widget_nikah_news .nav-tabs{
		border-bottom-color: {$border_tabs};
	}


	/* Contact --- */

	.contact-form-style-2 .contact-item2:before, .contact-ef .border-form-top, .contact-ef{
		background-color: {$form_bord}
	}
	.contact-form-style-2 .contact-item2:after{
		background-color: {$form_bord_hover}
	}
	.contact-form-style-1 .contact-bordered input, .contact-form-style-2 .contact-item2 input, .contact-bordered.text-area textarea, .contact-form-style-2 .contact-item2 textarea{
		color: {$text_input}
	}
	.contact-form-style-1 input.wpcf7-submit, .contact-form-style-2 input.wpcf7-submit{
		background-color: {$btn_send}
	}
	.contact-form-style-1 input.wpcf7-submit, .contact-form-style-2 input.wpcf7-submit{
		color: {$btn_send_text}
	}
	.contact-form-style-1 input.wpcf7-submit:hover, .contact-form-style-2 input.wpcf7-submit:hover{
		background-color: {$btn_send_hover}
	}
	.contact-form-style-1 input.wpcf7-submit:hover, .contact-form-style-2 input.wpcf7-submit:hover{
		color: {$btn_send_text_hover}
	}


	/*========== PORTFOLIO SINGLE ==========*/

	.header-style-1 .page-title h2, .post-title-porto-2 h1{
		color: {$port_title};
	}
	.portfolio-style1 span.category, .post-title-porto-2 span.category{
		color: {$category_portfolio};
	}
	.portfolio-style1 .project-details ul li span, .portfolio-details .detail-title{
		color: {$detail1_title};
	}
	.portfolio-style1 .project-details ul li p, .portfolio-details .detail-info{
		color: {$detail1_p};
	}
	.portfolio-style1 .project-details ul li, .portfolio-details .detail-item{
		border-bottom-color: {$detail1_border};
	}
	.portfolio-content p{
		color: {$detail1_desc};
	}
	.portfolio-style1 .portfolio-pagination .prev-portfolio a, .portfolio-style1 .portfolio-pagination .all-portfolio a, .portfolio-style1 .portfolio-pagination .next-portfolio a{
		color: {$detail1_pagination};
	}
	.portfolio-style1 .portfolio-pagination a:hover{
		color: {$detail1_hov_pagination};
	}




	/* FOOTER SECTION
	================================================================ */

	/* Footer --- */

	.copyright-text, .footer-text-area{
		color: {$footer_text};
	}
	.copyright-text a, .footer-menu li a{
		color: {$footer_link};
	}
	.copyright-text a:hover, .footer-menu li a:hover{
		color: {$footer_hover_link};
	}
	.footer-bottom .social-footer ul li a{
		color: {$footer_social};
	}
	.footer-bottom .social-footer ul li a:hover{
		color: {$footer_hover_social};
	}
	.footer-widget-wrapper{
		background-color: {$footer_widget_bg};
	}
	.footer-widget .widget-footer h4.widget-title{
		color: {$footer_widget_title};
	}
	.footer-widget .widget-footer .latest-post-widget a, .footer-widget .widget-footer .latest-post-wrap h5, .footer-widget .widget_nav_menu ul li a, .footer-widget .widget-footer a{
		color: {$link_text_widget};
	}
	.footer-widget .widget-footer .latest-post-widget a:hover, .footer-widget .widget_nav_menu ul li a:hover, .footer-widget .widget-footer a:hover{
		color: {$link_hover_widget};
	}
	.footer-widget .textwidget{
		color: {$text_widget};
	}
	.latest-post-wrap h5, .footer-widget .widget_nav_menu ul li a:before{
		border-bottom-color: {$border_widget};
	}

	
	";

	wp_add_inline_style( 'nikah-custom-style', $custom_css );

}
add_action( 'wp_enqueue_scripts', 'nikah_styles_method');