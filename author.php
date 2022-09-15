<?php get_header(); ?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4>Post by: <?php the_author() ?></h4>
                    <ul>
                        <li><a href="<?php echo site_url(); ?>">Home</a></li> /
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <!-- author info  -->
    <div class="container mt-4 author-info">
        <h4> Author Name: <?php the_author() ?></h4>
        <h4> Author Email: <?php the_author_meta('email') ?></h4>
        <p>Description <?php the_author_meta('description') ?></p>
    </div>
</section>

<section class="blog-area pb-100 pt-100" id="blog">

    <!-- blog area  -->
    <div <?php post_class(array('container')) ?>>

        <?php get_template_part('template-parts/content', 'blogs') ?>


    </div>
</section>
<!-- Latest News Area End -->

<?php get_footer(); ?>