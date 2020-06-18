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

		$logo_url = get_site_icon_url();
		$logo_css = ( ! empty( $logo_url ) ) ? "background-image: url(\"{$logo_url}\");" : null;

		if ( isset( $logo_css ) ) {
			wp_enqueue_style( 'soupys-custom-extravaganza', get_stylesheet_directory_uri() . '/style-custom.css', [], '1.0' );

			$custom_style = "
			#site-content::before {
				{$logo_css}
			}
			";

			wp_add_inline_style( 'soupys-custom-extravaganza', $custom_style );
		}
	}
);

add_action(
	'wp_head',
	function() {
		?>
		<meta name="theme-color" content="#0f0f0f">
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

		$logo_url = get_site_icon_url( '150' );
		wp_add_inline_style( 'soupbowl-login', ".login h1 a { background-image: url('{$logo_url}'); }" );
	}
);

add_action(
	'after_setup_theme',
	function() {
		add_theme_support( 'editor-styles' );

		add_editor_style( 'editor-style.css' );
	}
);
