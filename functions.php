<?php
	add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

	 add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


function enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function enqueue_scripts() {
	wp_enqueue_script( 'vocabulary', get_template_directory_uri() . '/assets/js/vocabulary.js' );
}

