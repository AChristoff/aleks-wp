<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <title>Blog</title>
</head>

<body <?php body_class(); ?>>

    <header class="site-header">

        <div class="wrapper">

            <a href="<?php echo home_url(); ?>"
                <section class="site-logo">
                    <i class="fas fa-hiking"></i>
                    <p>Outdoor Store</p>
                </section>
            </a>

            <section class="site-nav">

                <div class="icon-wrapper" onclick="toggleNav(this)">
                    <div class="menu-icon"></div>
                </div>

                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                    )
                )
                ?>

                <div class="site-search">
                    <?php get_search_form(); ?>
                </div>

            </section>

        </div>

    </header>