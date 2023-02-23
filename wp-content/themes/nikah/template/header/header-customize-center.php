<?php
$options   = get_option('nikah_framework');
$prefix = 'nikah_';
$layout    = $options['header_customize_center']['enabled'];

global $post;
 
if ($layout): foreach ($layout as $key=>$value) {
	switch ($key) {
		case 'nikah-logo':
			if ( is_front_page() && is_home() ) {
				nikah_header_part('header/logo-standard');
			}
			elseif ( is_home() ) {
				nikah_header_part('header/logo-standard');
			}
			elseif ( is_front_page() ) {
				nikah_header_part('header/logos');
			}
			elseif(is_single('post')) {
				nikah_header_part('header/logo-standard');
			}
			elseif(is_singular( 'post' )) {
				nikah_header_part('header/logo-standard');
			}
			elseif('nikah-portfolio' == get_post_type()) {
				nikah_header_part('header/logos');
			}
			elseif( is_page_template() ) {
				nikah_header_part('header/logos');
			}
			elseif( is_page() ) {
				nikah_header_part('header/logos');
			}
			elseif( is_archive() || is_search() || is_404() ) {
				nikah_header_part('header/logo-standard');
			}
			break;
		case 'nikah-menus':
			nikah_header_part('header/menus');
			break;
		case 'nikah-sec-menus':
			nikah_header_part('header/menus-sec');
			break;
		case 'nikah-search':
			nikah_header_part('header/search-btn');
			break;
		}
	}
endif;