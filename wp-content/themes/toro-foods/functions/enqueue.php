<?php
function custom_wp_enqueue_scripts() {
	wp_enqueue_style('app', get_theme_file_uri('/dist/styles/app.css'));
	wp_enqueue_script('app', get_theme_file_uri('/dist/scripts/app.js'), ['jquery'], false, true);
}
add_action('wp_enqueue_scripts', 'custom_wp_enqueue_scripts');