<?php
$options   = get_option('nikah_framework');
$prefix = 'nikah_';
$layout    = $options['footer_customize_third']['enabled'];

global $post;
 
if ($layout): foreach ($layout as $key=>$value) {
	switch ($key) {
		case 'nikah-copyright':
			nikah_footer_part('footer/nikah-copyright');
			break;
		case 'nikah-social':
			nikah_footer_part('footer/nikah-footsocial');
			break;
		case 'nikah-foot-text':
			nikah_footer_part('footer/nikah-foottext');
			break;
		case 'nikah-foot-logo':
			nikah_footer_part('footer/nikah-footlogo');
			break;
		case 'nikah-foot-menu':
			nikah_footer_part('footer/nikah-footmenu');
			break;
		}
	}
endif;