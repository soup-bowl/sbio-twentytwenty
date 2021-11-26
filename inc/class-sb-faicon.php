<?php
/**
 * Extra customizer settings for soupy.
 *
 * @package soupbowl-twentytwenty
 */

if ( ! class_exists( 'SB_Faicon' ) ) {
	/**
	 * AAAA.
	 */
	class SB_Faicon {
		/**
		 * AAAA.
		 *
		 * @return string|null Either the GIF URL, or nothing.
		 */
		public static function render_icons() {
			wp_nav_menu([
				'theme_location'  => 'sbio_identities_foot', 
				'container'       => 'nav',
				'container_id'    => 'menu-social',
				'container_class' => 'social-icons',
				'menu_id'         => 'menu-social-items',
				'menu_class'      => 'social-menu',
				'depth'           => 1,
				'link_before'     => '<i class="social_icon"><span>',
				'link_after'      => '</span></i>',
			]);
		}
	}
}
