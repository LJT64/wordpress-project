<?php
function my_theme_setup() {
    // Register a navigation menu
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'mytheme'),  // This is the location for your header menu
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

function enqueue_theme_styles() {
    // Enqueue the main style.css
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');

