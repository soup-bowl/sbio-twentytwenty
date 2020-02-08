<?php
include 'classes/options.php';

/* enqueue scripts and style from parent theme */        
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css' );
});

add_action( 'customize_register', [ 'SoupyCrazyAwesome_Customizer_Additionals', 'register' ] );
