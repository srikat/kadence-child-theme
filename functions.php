<?php
/**
 * Kadence child functions.
 */

add_action( 'wp_enqueue_scripts', 'kadence_enqueue_styles' );
/**
 * Enqueue current theme's stylesheet.
 */
function kadence_enqueue_styles() {
	wp_enqueue_style( 'kadence-child', get_stylesheet_directory_uri() . '/style.css', false, wp_get_theme()->get( 'Version' ) );
}

