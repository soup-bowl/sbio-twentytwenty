<?php
/**
 * Extra customizer settings for soupy.
 *
 * @package soupbowl-twentytwenty
 */

if ( ! class_exists( 'SoupyCrazyAwesome_Customizer_Additionals' ) ) {
	/**
	 * Register customizer options.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	class SoupyCrazyAwesome_Customizer_Additionals {
		public static function register( $wp_customize ) {
			$wp_customize->add_section( 'soupys_extras' , [
				'title' => 'Soupy\'s Extras',
			]);

			$wp_customize->add_setting( 'soupys_giphy_key', [
				'capability'        => 'edit_theme_options',
				'default'           => null,
				'sanitize_callback' => 'sanitize_text_field',
			] );
			  
			$wp_customize->add_control( 'soupys_giphy_key', [
				'type'        => 'text',
				'section'     => 'soupys_extras',
				'label'       => __( 'GIPHY Key' ),
				'description' => __( 'Used to display GIFs in various places.' ),
			] );
		}
	}
}