<footer class="site-footer">

    <div class="wrapper">
        <h3>Contacts</h3>
    </div>

    <div class="wrapper">

        <section class="widget widget-about">
            <div class="widget-wrapper">
                <header>
                    <h4>Outdoor Store</h4>
                </header>
                <div class="widget-content">
                    <p>orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </section>

        <section class="widget widget-contacts">
            <div class="widget-wrapper">
                <header>
                    <h4>Contacts</h4>
                </header>
                <div class="widget-content">
                    <ul>
                        <li id="phone"><a href="tel:+35929751616">(+359) 2 979 63 87</a></li>
                        <li id="mail"><a href="mailto:sales@neterra.net">sales@outdoorstore.net</a></li>
                        <li id="time">Monday - Friday:
                            <time>8:00 - 17:00</time>
                        </li>
                        <li id="location">
                            <address>Mladost 1, Sofia, Bulgaria<br> 20A Andrey Saharov Blvd.<br> 1nd floor</address>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="widget widget-sitemap">
            <div class="widget-wrapper">
                <header>
                    <h4>Sitemap</h4>
                </header>
                <div class="widget-content">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                        )
                    )
                    ?>
                </div>
            </div>
        </section>

    </div>


</footer>

<?php wp_footer(); ?>

</body>

</html>