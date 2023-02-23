<?php
function nikah_enqueue_styles() {

	$parent_style = 'nikah-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', array( 'nikah-plugin-css' ) );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('1.0.0')
	);
}
add_action( 'wp_enqueue_scripts', 'nikah_enqueue_styles' );
?>