<?php
function custom_wp_enqueue_scripts() {
	wp_enqueue_style('app', get_theme_file_uri('/dist/styles/app.css'));
	wp_enqueue_script('app', get_theme_file_uri('/dist/scripts/app.js'), ['jquery'], false, true);
	wp_enqueue_style('google-font-playfair-display', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,900|Source+Sans+Pro:300,400,600&display=swap"');
	wp_enqueue_style('google-font-source-sans-pro', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600&display=swap"');
	
}
add_action('wp_enqueue_scripts', 'custom_wp_enqueue_scripts');