<?php

if(!function_exists('edds_load_scripts')) {
	function edds_load_scripts() {
	
		// scripts
		wp_enqueue_script('jquery');
		wp_enqueue_script('scripts', EDDS_THEME_URL . '/js/scripts.js');
		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	
		// styles
		wp_enqueue_style('grid', EDDS_THEME_URL . '/css/wowcssframework.css');
		wp_enqueue_style('fa-styles', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
		wp_enqueue_style('styles', EDDS_THEME_URL . '/style.css');
		
		
	}
}
add_action('wp_enqueue_scripts', 'edds_load_scripts');

function prefix_fonts() {

	// Source Sans Pro
	wp_enqueue_style( 'prefix_raleway', '//fonts.googleapis.com/css?family=Raleway:400,700,400italic|Montserrat:400,700', array(), null, 'screen' );

}
add_action( 'wp_enqueue_scripts', 'prefix_fonts' );