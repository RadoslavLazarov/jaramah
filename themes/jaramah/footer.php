<footer>
    <div class="container">
        <div class="row footer">
            <div class="col-11">
                <div class="row">
                    <div class="col-5">
                        <div class="row">
                            <div class="col-6 footer__column">
                                <h3><?php echo wp_get_nav_menu_name('footer-1') ?></h3>
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'footer-1',
                                        )
                                    );
                                ?>
                            </div>
                            <div class="col-6 footer__column">
                                <h3><?php echo wp_get_nav_menu_name('footer-2') ?></h3>
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'footer-2',
                                        )
                                    );
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="row">
                            <div class="col-6 footer__column">
                                <h3>Easy And Secure Payment</h3>
                                <div class="footer__payments">
                                    <div class="payment">
                                        <img src="<?php echo get_template_directory_uri() ?>/public/images/footer/payment-methods/1.png" alt="">
                                    </div>
                                    <div class="payment">
                                        <img src="<?php echo get_template_directory_uri() ?>/public/images/footer/payment-methods/2.png" alt="">
                                    </div>
                                    <div class="payment">
                                        <img src="<?php echo get_template_directory_uri() ?>/public/images/footer/payment-methods/3.png" alt="">
                                    </div>
                                    <div class="payment">
                                        <img src="<?php echo get_template_directory_uri() ?>/public/images/footer/payment-methods/4.png" alt="">
                                    </div>
                                    <div class="payment">
                                        <img src="<?php echo get_template_directory_uri() ?>/public/images/footer/payment-methods/5.png" alt="">
                                    </div>
                                    <div class="payment">
                                        <img src="<?php echo get_template_directory_uri() ?>/public/images/footer/payment-methods/6.png" alt="">
                                    </div>
                                    <div class="payment">
                                        <img src="<?php echo get_template_directory_uri() ?>/public/images/footer/payment-methods/7.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 footer__column pl-5">
                                <h3>Stay Connected</h3>
                                <div class="footer__socials">
                                    <a href="" class="social">
                                        <img src="<?php echo get_template_directory_uri() ?>/public/images/footer/socials/1.png" alt="">
                                    </a>
                                    <a href="" class="social">
                                        <img src="<?php echo get_template_directory_uri() ?>/public/images/footer/socials/2.png" alt="">
                                    </a>
                                    <a href="" class="social">
                                        <img src="<?php echo get_template_directory_uri() ?>/public/images/footer/socials/3.png" alt="">
                                    </a>
                                    <a href="" class="social">
                                        <img src="<?php echo get_template_directory_uri() ?>/public/images/footer/socials/4.png" alt="">
                                    </a>
                                    <a href="" class="social">
                                        <img src="<?php echo get_template_directory_uri() ?>/public/images/footer/socials/5.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-12 footer__subscription-form">
                Subscription form
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-4 footer__logo">
                        <?php
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            }
                        ?>
                    </div>
                    <div class="col-4 footer__copyrights">
                        &copy; 2015-<?php echo date("Y"); ?> JARAMAH LLC
                    </div>
                    <div class="col-4 footer__apps">
                        <a href="" class="">
                            <img src="<?php echo get_template_directory_uri() ?>/public/images/footer/google-play.png" alt="">
                        </a>
                        <a href="" class="">
                            <img src="<?php echo get_template_directory_uri() ?>/public/images/footer/apple-store.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>