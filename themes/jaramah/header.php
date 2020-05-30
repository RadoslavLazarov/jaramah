<?php get_template_part( 'template-parts/content', 'head' ); ?>

<body <?php body_class(); ?>>

    <header>
        <div class="container">
            <div class="row header">
                <div class="col-3">
                    <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="row header__top">
                                <div class="col-9 d-flex align-items-center">
                                    <i class="icon-globe"></i>
                                    <?php
                                        /**
                                         * Functions hooked into storefront_header action
                                         *
                                         * @hooked storefront_product_search - 40
                                         */
                                        do_action( 'storefront_header' );
                                    ?>
                                </div>
                                <div class="col-3">
                                    <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'shop-menu',
                                            )
                                        );
                                    ?>
                                </div>
                            </div>                                    
                        </div>
                        <div class="col-12 header__nav">
                            <nav>
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'main-menu',
                                        )
                                    );
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>