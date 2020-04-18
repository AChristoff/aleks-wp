<?php get_header(); ?>

    <main class="site-main">

        <div class="wrapper">

            <p>Page.php</p>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h1>
                    <?php the_title(); ?>
                </h1>
                <div class="content">
                    <?php the_content(); ?>
                </div>

            <?php endwhile;
            endif; ?>


        </div>

    </main>

<?php get_footer(); ?>