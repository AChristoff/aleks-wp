<?php get_header(); ?>

    <main class="site-main home-page">

        <div class="wrapper">

            <section class="site-thumbnail">

                <div class="site-thumbnail-img-wrapper">
                    <img class="site-thumbnail-img"
                         alt="thumbnail"
                         src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail-unsplash.jpg">
                </div>

                <h1 class="company-slogan">
                    <span>The</span>
                    right equipment
                    <span>for your trip.</span>
                </h1>

            </section>

            <section class="about">
                <h3>About us</h3>
                <div class="content">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
                <div class="about-images">
                    <div class="avatar-wrapper">
                        <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/face_one.png">
                    </div>
                    <div class="avatar-wrapper">
                        <img alt="face_two" src="<?php echo get_template_directory_uri(); ?>/assets/img/face_two.png">
                    </div>
                    <div class="avatar-wrapper">
                        <img alt="face_three" src="<?php echo get_template_directory_uri(); ?>/assets/img/face_three.png">
                    </div>
                </div>
            </section>

            <section class="products">
                <h3>Our products</h3>
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

            <section class="services"></section>

            <section class="events"></section>

            <section class="newsletter">
                <h3>Subscribe to our newsletter</h3>
                <form action="#/account" method="POST">

                    <div>
                        <label for="registerUsername">Name *</label>
                        <input class="outdoor-inputs" type="text" name="name" id="registerUsername" placeholder="Enter name">
                    </div>
                    <div>
                        <label for="email">Email *</label>
                        <input class="outdoor-inputs" type="email" id="email" name="email" placeholder="your@email.com">
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input class="outdoor-inputs" type="number" id="phone" name="phone" placeholder="+359885236225">
                    </div>
                    <div>
                        <label for="age">Age</label>
                        <input class="outdoor-inputs" type="number" id="age" name="age" min="18" max="100" placeholder="18-100">
                    </div>
                    <div>
                        <input class="outdoor-btn" type="submit" value="Subscribe">
                    </div>
                </form>
            </section>

        </div>

    </main>

<?php get_footer(); ?>