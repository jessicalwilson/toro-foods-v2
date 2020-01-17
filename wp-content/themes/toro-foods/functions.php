<?php
/**
 * Register Menus
 */
add_action('init', function () {
	register_nav_menus([
		'header' => __('Header Menu', 'custom'),
		'footer' => __('Footer Menu', 'custom'),
		'footer-utility' => __('Footer Utility Menu', 'custom'),
	]);
});