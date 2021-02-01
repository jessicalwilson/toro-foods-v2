<?php 
add_theme_support('post-thumbnails');
add_theme_support('align-wide');
add_theme_support( 'editor-color-palette', array(
    array(
        'name' => esc_attr__( 'strong magenta', 'themeLangDomain' ),
        'slug' => 'strong-magenta',
        'color' => '#a156b4',
    ),
    array(
        'name' => esc_attr__( 'light grayish magenta', 'themeLangDomain' ),
        'slug' => 'light-grayish-magenta',
        'color' => '#d0a5db',
    ),
    array(
        'name' => esc_attr__( 'very light gray', 'themeLangDomain' ),
        'slug' => 'very-light-gray',
        'color' => '#eee',
    ),
    array(
        'name' => esc_attr__( 'very dark gray', 'themeLangDomain' ),
        'slug' => 'very-dark-gray',
        'color' => '#444',
    ),
) );