<?php get_header(); ?>
    
<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php woocommerce_breadcrumb(); ?>
            </div>
        </div>      
    </div>
    <div id="wc-wrapper" class="container">
        <div class="row">
            <div class="col-12">
                <?php woocommerce_content(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>