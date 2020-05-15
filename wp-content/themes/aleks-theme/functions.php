<?php

/*
 * Load files
 */

function add_theme_resources()
{

    //fontawesome
    wp_enqueue_style(
        'fontawesome',
        get_template_directory_uri() . '/css/fontawesome/main-fontawesome-5.12.0.css',
        array(), false, 'all');

    //theme styles
    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/style.css',
        array(), false, 'all');

    //theme scripts
    wp_enqueue_script(
        'script', get_template_directory_uri() . '/js/scripts.js',
        array( 'jquery' ), false, 'all');
}

add_action('wp_enqueue_scripts', 'add_theme_resources');


/*
 * Addons
 */

function add_custom_theme_support()
{
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'add_custom_theme_support');
add_image_size('custom-image-XL', 1200, 1200, true);

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
        'screen_reader_text' => '',
    ));
}

add_action('widgets_init', 'codex_widgets_init');

// REMOVE WIDGET TITLE IF IT BEGINS WITH '!'
add_filter('widget_title', 'remove_widget_title');
function remove_widget_title($widget_title)
{
    if (substr($widget_title, 0, 1) == '!') {
        return;
    } else {
        return ($widget_title);
    }
}


// On form submit

if (isset($_POST['subscribeSubmit'])) {

    global $wpdb;

    $data_array = array(
      'user_name' => sanitize_text_field($_POST['user_name']),
      'email' => sanitize_email($_POST['email']),
      'phone' => $_POST['phone'],
      'age' => $_POST['age'],
    );

    $table_name = 'subscriptions';

    $rowResult = $wpdb->insert($table_name, $data_array, $format=NULL);

    if ($rowResult == 1) {
        echo '<h1>Submitted</h1>';
    } else {
        echo '<h1>Error</h1>';
    }
}

// POST Content separation of text and images

function get_paragraph($content) {
    ob_start();
    the_content('Read the full post', true);
    $paragraph = preg_replace('/<img[^>]+.|(<!--.*[\n\t\s])|(<figure.*[\n\t\s])/', '', $content);
    ob_end_clean();
    $paragraph = str_replace("<p>", "-aleksov-", $paragraph);
    $paragraph = str_replace("</p>", "-aleksov-", $paragraph);
    $paragraph = explode("-aleksov-", $paragraph);
    $paragraph = array_filter($paragraph);
    array_pop($paragraph);

    return $paragraph;
}


function get_paragraphs($content) {

    preg_match_all("/<\s*p[^>]*>(.*)<\s*\/\s*p\s*>/", $content, $paragraphArray, PREG_PATTERN_ORDER);
    array_pop($paragraphArray[0]);
    $paragraphArray = preg_replace('/[^\w\s]/', '', $paragraphArray[0]);
    $paragraphArray = preg_replace('/^p|p$/', '', $paragraphArray);

    return $paragraphArray;
}

function get_images($content) {
    preg_match_all("/(<img [^>]*>)/", $content, $images, PREG_PATTERN_ORDER);

    return $images;
}

