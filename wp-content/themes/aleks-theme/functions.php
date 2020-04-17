<?php

function load_stylesheet()
{

    wp_enqueue_style(
        'fontawesome',
        'https://use.fontawesome.com/releases/v5.8.2/css/all.css'
    );

    //custom styles
    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/style.css',
        array(),
        false,
        'all'
    );
}

add_action('wp_enqueue_scripts', 'load_stylesheet');