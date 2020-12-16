<?php
    // load stylesheets on init
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    // load stylesheets
    function my_theme_enqueue_styles() {
        // load parent stylesheet
        wp_enqueue_style('parent-style',                    // include parent stylesheet
            get_template_directory_uri() . '/style.css');   // parent stylesheet directory path
        // load child stylesheet
        wp_enqueue_style('child-style',                     // include child stylesheet
            get_stylesheet_directory_uri() . '/style.css',  // child stylesheet directory path
            array('parent-style'),                          // array used for boilerplate function arguements
            wp_get_theme()->get('Version')                  // load version meta
        );
    }