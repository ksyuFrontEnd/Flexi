<?php

/* Add logo, title and thumbnails */ 
if( !function_exists( 'flexi_it_child_theme_setup' )) {
    function flexi_it_child_theme_setup()
    {
        add_theme_support( 'custom-logo',
            array(
                'height' => 70,
                'width' => 70,
                'flex-width' => true,
                'flex-height' => true,
            )
        );

        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
    }

    add_action( 'after_setup_theme', 'flexi_it_child_theme_setup' );
}

/* Enqueue scripts, styles and fonts */
function flexi_it_child_theme_scripts() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css'); 
    wp_enqueue_style( 'flexi_it_child_theme-style', get_stylesheet_directory_uri() . '/src/css/main.css', array('parent-style'), wp_get_theme()->get('Version') );
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'flexi_it_child_theme-scripts', get_stylesheet_directory_uri() . '/src/js/main.js', array('jquery'), '6.6.2', true);
    wp_localize_script('flexi_it_child_theme-scripts', 'myAjax', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('flexi_it_child_theme_nonce'),
    ));
    wp_enqueue_style(  'google_web_fonts', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap', [], null );
}

add_action('wp_enqueue_scripts', 'flexi_it_child_theme_scripts');

// Register menus
function flexi_it_child_theme_register_menus() {
    $locations = array(
        'header' => __( 'Header Menu', 'flexi_it_child_theme' ),
        'footer' => __( 'Footer Menu', 'flexi_it_child_theme' ),
    );

    register_nav_menus( $locations );
}

add_action('init', 'flexi_it_child_theme_register_menus');

// Change excerpt length to 20 words
function custom_excerpt_length( $length ) {
    return 20; 
}

add_filter( 'excerpt_length', 'custom_excerpt_length' );


// Add Real Estate Widget to customizer
function real_estate_customize_register($wp_customize) {
    
    $wp_customize->add_section('real_estate_widget_section', array(
        'title' => __('Фільтр об\'єктів нерухомості', 'text_domain'),
        'priority' => 110, 
    ));

    $wp_customize->add_setting('real_estate_filter_widget_title', array(
        'default' => __('Фільтр', 'text_domain'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('real_estate_filter_widget_title', array(
        'label' => __('Заголовок віджета', 'text_domain'),
        'section' => 'real_estate_widget_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('real_estate_filter_widget_number_of_items', array(
        'default' => 5,
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('real_estate_filter_widget_number_of_items', array(
        'label' => __('Кількість показаних об\'єктів:', 'text_domain'),
        'section' => 'real_estate_widget_section',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 1,
        ),
    ));
}

add_action('customize_register', 'real_estate_customize_register');
