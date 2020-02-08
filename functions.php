<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package soupbowl-twentytwenty
 */

/**
 * Cool stuff.
 */
require __DIR__ . '/classes/class-sb-customizer-additional.php';

/* enqueue scripts and style from parent theme */
add_action(
	'wp_enqueue_scripts',
	function() {
		wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css', [], '1.0' );
	}
);

add_action( 'customize_register', [ 'SB_Customizer_Additional', 'register' ] );
