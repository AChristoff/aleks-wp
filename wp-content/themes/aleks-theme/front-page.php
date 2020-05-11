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


                <!--                <h1 class="company-slogan">-->
                <!--                    <span>The</span>-->
                <!--                    right equipment-->
                <!--                    <span>for your trip.</span>-->
                <!--                </h1>-->

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

                <!--                <div class="about-images">-->
                <!--                    <div class="avatar-wrapper">-->
                <!--                        <img alt="face_one" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/face_one.png">-->
                <!--                    </div>-->
                <!--                    <div class="avatar-wrapper">-->
                <!--                        <img alt="face_two" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/face_two.png">-->
                <!--                    </div>-->
                <!--                    <div class="avatar-wrapper">-->
                <!--                        <img alt="face_three" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/face_three.png">-->
                <!--                    </div>-->
                <!--                </div>-->
            </section>

            <section class="new-products">
                <h3>NEW products</h3>
                <div class="content">
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                </div>
                <div class="product-images">
                    <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                       class="product-wrapper">
                        <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_1.png">
                    </a>
                    <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                       class="product-wrapper">
                        <img alt="face_two" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_2.png">
                    </a>
                    <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                       class="product-wrapper">
                        <img alt="face_three" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_3.png">
                    </a>
                    <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                       class="product-wrapper">
                        <img alt="face_three" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_4.png">
                        <a href="<?php get_site_url(); ?>/e-commerce-site/product/"
                           class="product-wrapper">
                            <img alt="face_three" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_5.png">
                        </a>
                        <a href="<?php get_site_url(); ?>/e-commerce-site/products/"
                           class="product-wrapper">
                            <img alt="face_three" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_6.png">
                        </a>
                </div>
            </section>

            <section class="services">
                <h3>Services</h3>

                <div class="site-card">
                    <div class="card-head">
                        <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/services/service_1.png">
                    </div>
                    <div class="card-body">
                        <h5>Van rental</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <button class="outdoor-btn"
                                onclick="window.location.href='<?php get_site_url(); ?>/e-commerce-site/company/'">Go to event
                        </button>
                    </div>
                </div>

                <div class="site-card">
                    <div class="card-head">
                        <img alt="face_one"
                             src="<?php echo get_template_directory_uri(); ?>/assets/img/services/service_2.png">
                    </div>
                    <div class="card-body">
                        <h5>Sky school</h5>
                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s.
                        </p>
                        <button class="outdoor-btn"
                                onclick="window.location.href='<?php get_site_url(); ?>/e-commerce-site/company/'">Go to event
                        </button>
                    </div>
                </div>

                <div class="site-card">
                    <div class="card-head">
                        <img alt="face_one"
                             src="<?php echo get_template_directory_uri(); ?>/assets/img/services/service_3.png">
                    </div>
                    <div class="card-body">
                        <h5>Diving school</h5>
                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                        </p>
                        <button class="outdoor-btn"
                                onclick="window.location.href='<?php get_site_url(); ?>/e-commerce-site/company/'">Go to event
                        </button>
                    </div>
                </div>

                <div class="site-card">
                    <div class="card-head">
                        <img alt="face_one"
                             src="<?php echo get_template_directory_uri(); ?>/assets/img/services/service_4.png">
                    </div>
                    <div class="card-body">
                        <h5>Climbing school</h5>
                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <button class="outdoor-btn"
                                onclick="window.location.href='<?php get_site_url(); ?>/e-commerce-site/company/'">Go to event
                        </button>
                    </div>
                </div>

            </section>

            <section class="products">
                <div class="sale">
                    <h3>Sale</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
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