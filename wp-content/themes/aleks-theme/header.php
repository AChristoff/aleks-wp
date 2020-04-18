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

            <section class="site-logo">
                <i class="fas fa-hiking"></i>
            </section>

            <section class="site-nav">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                    )
                )
                ?>

            </section>

            <section class="site-search">

                <?php if (is_active_sidebar('site-search')) : ?>
                    <?php dynamic_sidebar('site-search'); ?>
                <?php endif; ?>

            </section>

        </div>

        <hr>

    </header>