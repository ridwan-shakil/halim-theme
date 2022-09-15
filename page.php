<?php get_header(); ?>
<?php get_template_part('inc/breadcumb'); ?>


<section class="blog-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2><?php the_title(); ?></h2>
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
            </div>
            <!-- sideber  -->
            <div class="col-xl-4">
                <div class="single-sidebar">
                    <?php if (is_active_sidebar('right-sidebar')) {
                        dynamic_sidebar('right-sidebar');
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>