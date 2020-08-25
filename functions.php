<?php
/**
 * Kadence child functions.
 */

add_action( 'wp_enqueue_scripts', 'kadence_child_enqueue_styles', 11 );
/**
 * Enqueue current theme's stylesheet.
 */
function kadence_child_enqueue_styles() {
	wp_enqueue_style( 'kadence-child', get_stylesheet_directory_uri() . '/style.css', null, wp_get_theme()->get( 'Version' ), false );
}

