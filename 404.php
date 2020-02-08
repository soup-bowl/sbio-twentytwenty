<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package soupbowl-twentytwenty
 */

/**
 * GIPHY content handler.
 */
require __DIR__ . '/inc/class-sb-giphy.php';

get_header();

$gif     = SB_Giphy::get();
$gif_atr = ( null !== $gif ) ? "background-image:url({$gif});background-size:cover;" : null;

$potential_messages = json_decode( file_get_contents( __DIR__ . '/404-msg.json' ), false );
$selected_quote     = $potential_messages[ wp_rand( 0, ( count( $potential_messages ) - 1 ) ) ];
?>

<main id="site-content" role="main" style="<?php echo esc_attr( $gif_atr ); ?>">

	<div class="section-inner thin error404-content">

		<h1 class="entry-title">404</h1>
		<div class="intro-text"><p><?php echo esc_html( $selected_quote ); ?></p></div>

		<?php
		get_search_form(
			array(
				'label' => __( '404 not found', 'twentytwenty' ),
			)
		);
		?>

	</div><!-- .section-inner -->

	<div class="soupy-404-spacer"></div>

</main><!-- #site-content -->

<?php
get_footer();
