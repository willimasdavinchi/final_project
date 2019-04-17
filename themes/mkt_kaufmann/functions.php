<?php
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style('style_kaufmann', get_theme_file_uri( '/assets/css/style.css'));
	wp_enqueue_script('script_kaufmann', get_theme_file_uri( '/assets/js/app.js'));
});
add_theme_support( 'post-thumbnails' );