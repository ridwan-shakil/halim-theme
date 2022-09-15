<?php get_header(); ?>


<?php get_template_part('inc/breadcumb'); ?>



<section class="blog-area pb-100 pt-100" id="blog">
    <div <?php post_class(array('container')) ?>>
        <?php get_template_part('template-parts/content', 'blogs') ?>
    </div>
</section>

<!-- Latest News Area End -->

<?php get_footer(); ?>