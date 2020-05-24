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
		wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css', [], '1.1' );
	}
);

add_action(
	'wp_head',
	function() {
		?>
		<meta name="theme-color" content="#1c1c1c">
		<?php
	}
);

add_action(
	'login_enqueue_scripts',
	function() {
		wp_register_script( 'soupbowl-login', get_stylesheet_directory_uri() . '/style-login.js', [], '1.0', true );
		wp_localize_script( 'soupbowl-login', 'soupy', [ 'url' => get_site_url() ] );

		wp_enqueue_style( 'soupbowl-login', get_stylesheet_directory_uri() . '/style-login.css', [], '1.0.2' );
		wp_enqueue_script( 'soupbowl-login' );
	}
);

add_action(
	'after_setup_theme',
	function() {
		add_theme_support( 'editor-styles' );

		add_editor_style( 'editor-style.css' );
	}
);
