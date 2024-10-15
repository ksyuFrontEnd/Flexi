<?php

// Enqueue scripts and styles
function flexi_it_child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css'); 
    wp_enqueue_style( 'flexi_it-style', get_stylesheet_directory_uri() . '/src/css/main.css', array('parent-style'), wp_get_theme()->get('Version') );
    wp_enqueue_style(  'google_web_fonts', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap', [], null );

}
add_action('wp_enqueue_scripts', 'flexi_it_child_theme_enqueue_styles');

// Register menus
function flexi_it_child_theme_register_menus() {
    $locations = array(
        'header' => __( 'Header Menu', 'flexi_it_child_theme' ),
        'footer' => __( 'Footer Menu', 'flexi_it_child_theme' ),
    );

    register_nav_menus( $locations );
}
add_action('init', 'flexi_it_child_theme_register_menus');
