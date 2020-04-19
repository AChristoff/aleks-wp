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
                <div class="content">
                    <h3>About us</h3>
                    <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                </div>
                <div class="images">
                    <img alt="face_one" src="<?php echo get_template_directory_uri(); ?>/assets/img/face_one.png">
                    <img alt="face_two" src="<?php echo get_template_directory_uri(); ?>/assets/img/face_one.png">
                    <img alt="face_three" src="<?php echo get_template_directory_uri(); ?>/assets/img/face_one.png">
                </div>
            </section>

            <section class="products"></section>

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