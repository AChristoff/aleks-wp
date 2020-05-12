<?php get_header(); ?>

    <main class="site-main home-page">

        <div class="wrapper">

            <section class="site-thumbnail">
                <?php $the_query = new WP_Query(array('category_name' => 'thumbnail',)); ?>

                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <?php
                        ob_start();
                        the_content('Read the full post', true);
                        $postText = preg_replace('/<img[^>]+./', '', ob_get_contents());
                        ob_end_clean();
                        $postText = str_replace("<p>", "", $postText);
                        $postText = explode("</p>", $postText);
                        array_pop($postText);

                        $counter = 0;

                        echo '<h1 class="company-slogan">';
                        foreach ($postText as $paragraph) {
                            if ($counter === 1) {
                                echo $paragraph;
                            } else {
                                echo "<span>$paragraph</span>";
                            }
                            $counter++;
                        }

                        echo '</h1>';
                        ?>

                        <div class="site-thumbnail-img-wrapper">
                            <?php

                            preg_match_all("/(<img [^>]*>)/", get_the_content(), $matches, PREG_PATTERN_ORDER);

                            for ($i = 0; isset($matches[1]) && $i < count($matches[1]); $i++) {
                                echo $beforeEachImage . $matches[1][$i] . $afterEachImage;
                            } ?>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </section>

            <section class="about">

                <?php $the_query = new WP_Query(array('category_name' => 'about_us',)); ?>

                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <div class="content">
                            <h3><?php the_title(); ?></h3>
                            <?php
                            ob_start();
                            the_content('Read the full post', true);
                            $postOutput = preg_replace('/<img[^>]+./', '', ob_get_contents());
                            ob_end_clean();
                            echo $postOutput;
                            ?>
                        </div>

                        <div class="about-images">
                            <?php

                            preg_match_all("/(<img [^>]*>)/", get_the_content(), $matches, PREG_PATTERN_ORDER);

                            for ($i = 0; isset($matches[1]) && $i < count($matches[1]); $i++) {
                                echo '<div class="avatar-wrapper">' .
                                    $beforeEachImage . $matches[1][$i] . $afterEachImage
                                    . '</div>';
                            } ?>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </section>

            <section class="new-products">
                <?php $the_query = new WP_Query(array('category_name' => 'new_products',)); ?>

                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <div class="content">
                            <h3><?php the_title(); ?></h3>
                            <?php
                            ob_start();
                            the_content('Read the full post', true);
                            $postOutput = preg_replace('/<img[^>]+./', '', ob_get_contents());
                            ob_end_clean();
                            echo $postOutput;
                            ?>
                        </div>

                        <div class="product-images">
                            <?php

                            preg_match_all("/(<img [^>]*>)/", get_the_content(), $matches, PREG_PATTERN_ORDER);

                            for ($i = 0; isset($matches[1]) && $i < count($matches[1]); $i++) {
                                echo '<a href="' . get_site_url() . '/e-commerce-site/products/" class="product-wrapper">' .
                                    $beforeEachImage . $matches[1][$i] . $afterEachImage
                                    . '</a>';
                            } ?>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </section>

            <section class="services">
                <?php $the_query = new WP_Query(array('category_name' => 'services',)); ?>

                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <h3><?php the_title(); ?></h3>

                        <?php
                        // for pictures
                        preg_match_all("/(<img [^>]*>)/", get_the_content(), $matches, PREG_PATTERN_ORDER);

                        // for text
                        ob_start();
                        the_content('Read the full post', true);
                        $postText = preg_replace('/<img[^>]+./', '', ob_get_contents());
                        ob_end_clean();
                        $postText = str_replace("<p>", "", $postText);
                        $postText = explode("</p>", $postText);
                        array_pop($postText);
                        $buttonText = array_pop($postText);
                        $counter = 0;

                        // pictures loop
                        for ($i = 0; isset($matches[1]) && $i < count($matches[1]); $i++) {
                            echo '<div class="site-card" >';
                            echo '<div class="card-head">' .
                                $beforeEachImage . $matches[1][$i] . $afterEachImage
                                . '</div>';
                            echo '<div class="card-body">';
                            echo "<h5>$postText[$counter]</h5>";
                            $j = $counter + 1;
                            echo "<p>$postText[$j]</p>";
                            echo '<button class="outdoor-btn" onclick=window.location.href="' . get_site_url() . '/e-commerce-site/company/">' . $buttonText . '</button>';

                            echo '</div>';
                            echo '</div>';
                            $counter += 2;
                        } ?>

                    <?php endwhile; ?>
                <?php endif; ?>


            </section>

            <section class="products">
                <div class="sale">

                    <?php $the_query = new WP_Query(array('category_name' => 'sale',)); ?>

                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <div class="content">
                                <h3><?php the_title(); ?></h3>
                                <?php
                                ob_start();
                                the_content('Read the full post', true);
                                $postOutput = preg_replace('/<img[^>]+./', '', ob_get_contents());
                                ob_end_clean();
                                echo $postOutput;
                                ?>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                    <div class="sale-images">
                        <div class="product-wrapper">
                            <a href="<?php get_site_url(); ?>/e-commerce-site/products/">
                                <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                            </a>
                        </div>
                        <div class="product-wrapper">
                            <a href="<?php get_site_url(); ?>/e-commerce-site/products/">
                                <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                            </a>
                        </div>
                        <div class="product-wrapper">
                            <a href="<?php get_site_url(); ?>/e-commerce-site/products/">
                                <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                            </a>
                        </div>
                        <div class="product-wrapper">
                            <a href="<?php get_site_url(); ?>/e-commerce-site/products/">
                                <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                            </a>
                        </div>
                    </div>
                    <button class="outdoor-btn">Button</button>
                    <div class="more-products">
                        <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                           class="product-wrapper">
                            <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                        </a>
                        <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                           class="product-wrapper">
                            <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                        </a>
                        <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                           class="product-wrapper">
                            <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                        </a>
                        <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                           class="product-wrapper">
                            <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                        </a>
                        <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                           class="product-wrapper">
                            <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                        </a>
                        <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                           class="product-wrapper">
                            <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                        </a>
                        <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                           class="product-wrapper">
                            <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                        </a>
                        <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                           class="product-wrapper">
                            <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                        </a>
                        <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                           class="product-wrapper">
                            <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                        </a>
                        <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                           class="product-wrapper">
                            <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                        </a>
                        <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                           class="product-wrapper">
                            <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                        </a>
                        <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                           class="product-wrapper">
                            <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                        </a>
                        <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                           class="product-wrapper">
                            <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                        </a>
                        <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                           class="product-wrapper">
                            <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                        </a>
                        <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                           class="product-wrapper">
                            <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                        </a>
                        <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                           class="product-wrapper">
                            <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                        </a>
                    </div>
            </section>

            <section class="newsletter">
                <h3>Subscribe to our newsletter</h3>
                <form method="post">

                    <div>
                        <label for="user_name">Name *</label>
                        <input id="user_name"
                               class="outdoor-inputs"
                               type="text"
                               name="user_name"
                               placeholder="Enter name"
                               onfocusout="validateName()">
                        <div class="validation-message">Name must contain only letters!</div>
                    </div>
                    <div>
                        <label for="email">Email *</label>
                        <input id="email"
                               class="outdoor-inputs"
                               type="email"
                               name="email"
                               placeholder="your@email.com"
                               onfocusout="validateEmail('flag')">
                        <div class="validation-message">Invalid e-mail address!</div>
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input id="phone"
                               class="outdoor-inputs"
                               type="number"
                               name="phone"
                               placeholder="+359885236225">
                        <div class="validation-message">Only digits! (min 6)</div>
                    </div>
                    <div>
                        <label for="age">Age</label>
                        <input id="age"
                               class="outdoor-inputs"
                               type="number"
                               name="age"
                               min="18" max="100"
                               placeholder="18-100">
                        <div class="validation-message">Age must be between 18-100!</div>
                    </div>
                    <div>
                        <input class="outdoor-btn" type="submit" name="subscribeSubmit" value="Subscribe">
                        <div class="validation-message">_</div>
                    </div>
                </form>
            </section>

        </div>

    </main>

<?php get_footer(); ?>