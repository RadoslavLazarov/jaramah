<?php get_header(); ?>
    
<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            get_template_part( 'template-parts/content');
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>