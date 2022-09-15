<?php get_header(); ?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php the_archive_title();  ?></h4>
                    <ul>
                        <li><a href="<?php echo site_url(); ?>">Home</a></li> /
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-area pb-100 pt-100" id="blog">
    <div class="container">

        <?php get_template_part('template-parts/content', 'blogs') ?>


    </div>
</section>
<!-- Latest News Area End -->

<?php get_footer(); ?>