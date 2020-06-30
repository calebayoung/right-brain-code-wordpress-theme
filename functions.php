<?php

function right_brain_code_register_scripts() {
    $theme_directory_url  = get_template_directory_uri();
	$theme_directory_path = get_template_directory();
	wp_register_style( 'right-brain-code', "$theme_directory_url/style.css", array(), filemtime( "$theme_directory_path/style.css" ) );
}
add_action( 'wp_enqueue_scripts', 'right_brain_code_register_scripts' );

function right_brain_code_enqueue_scripts() {
	wp_enqueue_style( 'right-brain-code' );
}
add_action( 'wp_enqueue_scripts', 'right_brain_code_enqueue_scripts' );
