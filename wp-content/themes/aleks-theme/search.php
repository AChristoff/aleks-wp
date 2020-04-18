<?php get_header(); ?>

    <main class="site-main search-page">

        <div class="wrapper">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h4>
                    <?php the_title(); ?>
                </h4>

                <?php the_content(); ?>

            <?php endwhile; else: ?>
                <p><?php esc_html_e('No results'); ?></p>
            <?php endif; ?>

        </div>

    </main>

<?php get_footer(); ?>