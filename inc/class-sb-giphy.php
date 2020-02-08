<?php
/**
 * Extra customizer settings for soupy.
 *
 * @package soupbowl-twentytwenty
 */

if ( ! class_exists( 'SB_Giphy' ) ) {
	/**
	 * Gets GIFs from the Giphy API.
	 */
	class SB_Giphy {
		/**
		 * Retrieves a GIF from GIPHY, using the credentials stored via Customizer.
		 *
		 * @return string|null Either the GIF URL, or nothing.
		 */
		public static function get() {
			$giphy_key = get_theme_mod( 'soupys_giphy_key', null );
			$giphy_url = "https://api.giphy.com/v1/gifs/random?api_key={$giphy_key}&tag=&rating=PG";
			$gif       = null;

			if ( ! empty( $giphy_key ) ) {
				$response = wp_remote_get( $giphy_url );
				if ( is_array( $response ) ) {
					$body = json_decode( wp_remote_retrieve_body( $response ), true );
					if ( isset( $body['data'], $body['data']['images']['original']['webp'] ) ) {
						$gif = $body['data']['images']['original']['webp'];
					}
				}
			}

			return $gif;
		}
	}
}
