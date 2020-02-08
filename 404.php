<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

include __DIR__ . '/inc/giphy.php';

get_header();

$gif = SoupyCrazyAwesome_Giphy::get();
$gif_atr = ( $gif !== null ) ? "style=\"background-image:url({$gif});background-size:cover;\"" : null;

$potential_messages = [
	'I was sure it was around here somewhere...',
	'Haha lol #rekt.',
	'What the Hell were you after?',
	'Not here mate.',
	'Whatever you wanted, I deleted it...',
	'S*%t, I dropped it!',
	'It\'s gone bud.',
	'Nah not here!',
	'The red zone is for immediate loading and unloading of passengers only. There is no stopping in a white zone.',
	'The link you followed screwed you over.',
	'YAAAAASSSSSSSSSSSSS!',
	'Changed my mind, I\'m keeping whatever this was.',
	'Insert a Hitchhiker\'s guide to the Galaxy quote here.'
];

$selected_quote = $potential_messages[ rand( 0, ( count( $potential_messages ) - 1 ) ) ];
?>

<main id="site-content" role="main" <?php echo $gif_atr; ?>>

	<div class="section-inner thin error404-content">

		<h1 class="entry-title">404</h1>
		<div class="intro-text"><p><?php echo $selected_quote; ?></p></div>

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
