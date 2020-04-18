<?php

/*
 * Load files
 */

function load_stylesheet()
{

    //fontawesome
    wp_enqueue_style(
        'fontawesome',
        get_template_directory_uri() . '/css/fontawesome/main-fontawesome-5.12.0.css',
        array(),
        false,
        'all'
    );

    //theme styles
    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/style.css',
        array(),
        false,
        'all'
    );
}

add_action('wp_enqueue_scripts', 'load_stylesheet');


/*
 * Addons
 */

function add_custom_theme_support()
{
    add_theme_support('menus');
    add_theme_support('widgets');
}

add_action('after_setup_theme', 'add_custom_theme_support');

// set menu position
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'aleks-theme'),
    )
);

// set widget position
function codex_widgets_init()
{
    register_sidebar(array(
        'name' => __('Main Search', 'wpb'),
        'id' => 'site-search',
//        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//        'after_widget' => '</aside>',
//        'before_title' => '<h3 class="widget-title">',
//        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'codex_widgets_init');

// REMOVE WIDGET TITLE IF IT BEGINS WITH '!'
add_filter( 'widget_title', 'remove_widget_title' );
function remove_widget_title( $widget_title ) {
    if ( substr ( $widget_title, 0, 1 ) == '!' )
        return;
    else
        return ( $widget_title );
}