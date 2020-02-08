<?php
/**
 * Extra customizer settings for soupy.
 *
 * @package soupbowl-twentytwenty
 */

if ( ! class_exists( 'SoupyCrazyAwesome_Giphy' ) ) {
	class SoupyCrazyAwesome_Giphy {
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