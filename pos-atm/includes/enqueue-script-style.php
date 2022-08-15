<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue scripts and styles.
 */
function pos_atm_scripts() {
	wp_enqueue_style( 'pos-atm-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_deregister_script('jquery');
	wp_enqueue_script( 'pos-atm-jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js');
	wp_enqueue_script( 'pos-atm-js', get_template_directory_uri() . '/assets/js/main.js');
	wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js');
	wp_enqueue_script( 'pos-atm-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'pos_atm_scripts' );