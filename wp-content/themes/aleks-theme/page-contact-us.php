<?php
/*
Template Name: Contacts
*/
?>


<?php get_header(); ?>

    <main class="site-main contact-page">

        <div class="wrapper">

            <form method="post">

                <div>
                    <label for="phone">Phone</label>
                    <input id="phone"
                           class="outdoor-inputs"
                           type="number"
                           name="phone"
                           placeholder="+359885236225">
                </div>
                <div>
                    <label for="age">Age</label>
                    <input id="age"
                           class="outdoor-inputs"
                           type="number"
                           name="age"
                           min="18" max="100"
                           placeholder="18-100">
                </div>
                <div>
                    <input class="outdoor-btn" type="submit" name="subscribeSubmit" value="Subscribe">
                </div>

        </div>

    </main>

<?php get_footer(); ?>