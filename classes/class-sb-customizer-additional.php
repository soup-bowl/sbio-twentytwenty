<?php
/**
 * Extra customizer settings for soupy.
 *
 * @package soupbowl-twentytwenty
 */

if ( ! class_exists( 'SB_Customizer_Additional' ) ) {
	/**
	 * Register customizer options.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	class SB_Customizer_Additional {
		/**
		 * Registers custom settings within Customizer.
		 *
		 * @param WP_Customize_Manager $wp_customize The customizer object to configure.
		 */
		public static function register( WP_Customize_Manager $wp_customize ) {
			$wp_customize->add_section(
				'soupys_extras',
				[
					'title' => 'Soupy\'s Extras',
				]
			);

			$wp_customize->add_setting(
				'soupys_giphy_key',
				[
					'capability'        => 'edit_theme_options',
					'default'           => null,
					'sanitize_callback' => 'sanitize_text_field',
				]
			);

			$wp_customize->add_control(
				'soupys_giphy_key',
				[
					'type'        => 'text',
					'section'     => 'soupys_extras',
					'label'       => __( 'GIPHY Key' ),
					'description' => __( 'Used to display GIFs in various places.' ),
				]
			);

			$wp_customize->add_setting(
				'soupy_giphy_term',
				[
					'capability'        => 'edit_theme_options',
					'default'           => null,
					'sanitize_callback' => 'sanitize_text_field',
				]
			);

			$wp_customize->add_control(
				'soupy_giphy_term',
				[
					'type'        => 'text',
					'section'     => 'soupys_extras',
					'label'       => __( 'GIPHY 404 Search Term' ),
					'description' => __( 'Search term on 404 pages.' ),
				]
			);
		}
	}
}
