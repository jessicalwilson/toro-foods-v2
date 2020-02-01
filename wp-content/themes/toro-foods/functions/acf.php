<?php

if(function_exists('acf_add_options_page')) {
    $theme_settings_options = acf_add_options_page(array(
        'page_title' => 'General Theme Options',
        'menu_title' => 'Theme Options',
        'menu_slug'  => 'custom-theme-settings',
        'capability' => 'edit_posts',
        'icon_url'   => 'dashicons-welcome-widgets-menus',
        'redirect'   => false,
	));
}