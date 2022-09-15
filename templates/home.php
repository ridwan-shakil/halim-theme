<?php
// Template Name: Home Template 
?>
<?php get_header(); ?>

<!-- Slider Area Start -->
<section class="slider-area" id="home">
    <div class="slider owl-carousel">

        <?php
        $arrgs = array(
            'post_type' => 'slider',
            'post_per_page' => 6
        );
        $query = new WP_Query($arrgs);
        while ($query->have_posts()) {
            $query->the_post();
        ?>
            <?php if (class_exists('ACF')) {
                $subtitle = get_field('subtitle');
                $btn_link = esc_url(get_field('button_link'));
                $btn_text = get_field('button_text');
            }
            ?>
            <div class="single-slide" style="background-image:url('<?php esc_url(the_post_thumbnail_url('large')) ?>')">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-table">
                                <div class="slide-tablecell">
                                    <h4><?php echo $subtitle ?></h4>
                                    <h2><?php the_title() ?></h2>
                                    <p><?php the_content() ?></p>
                                    <?php
                                    if ($btn_text) :
                                    ?>
                                        <a href="<?php echo $btn_link; ?>" class="box-btn"><?php echo $btn_text; ?> <i class="fa fa-angle-double-right"></i></a>
                                    <?php
                                    endif;
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php    }
        wp_reset_postdata() ?>


    </div>
</section>
<!-- Slider Area Start -->
<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <?php
                if (class_exists('ACF')) {
                    $about_top = get_field('about_top', 'option');
                } ?>
                <h3><span><?php echo $about_top['subheading'] ?></span> <?php echo $about_top['heading'] ?></h3>
            </div>
            <div class="col-md-6">
                <p><?php echo $about_top['content'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="about">
                    <?php
                    if (class_exists('ACF')) {
                        $about_left = get_field('about_left', 'option');
                    } ?>
                    <div class="page-title">
                        <h4><?php echo $about_left['heading'] ?></h4>
                    </div>
                    <p><?php echo $about_left['content'] ?></p>
                    <?php
                    if ($about_left['button_text']) :
                    ?>
                        <a href="<?php echo esc_url($about_left['button_link']) ?>" class="box-btn"><?php echo $about_left['button_text'] ?><i class="fa fa-angle-double-right"></i></a>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-md-5">
                <?php
                if (class_exists('ACF')) :
                    if (have_rows('about_right', 'option')) : ?>
                        <?php while (have_rows('about_right', 'option')) : the_row(); ?>
                            <div class="single_about">
                                <?php the_sub_field('icon'); ?>
                                <h4><?php the_sub_field('heading'); ?></h4>
                                <p><?php the_sub_field('content'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<!-- About Area End -->
<!-- Choose Area End -->
<section class="choose">
    <div class="container">
        <div class="row pt-100 pb-100">
            <div class="col-md-6">
                <div class="faq">
                    <div class="page-title">
                        <h4>
                            <?php if (class_exists('ACF')) : ?>
                                <?php if (get_field('faq_section_title', 'option')) : ?>
                                    <?php echo get_field('faq_section_title', 'option'); ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </h4>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <?php if (class_exists('ACF')) : ?>
                            <?php if (have_rows('faq', 'option')) : ?>
                                <?php $i = 0; ?>
                                <?php while (have_rows('faq', 'option')) : the_row(); ?>
                                    <?php $i++ ?>
                                    <div class="card">
                                        <div class="card-header" id="heading<?php echo $i; ?>">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                                    <?php the_sub_field('question'); ?>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse<?php echo $i; ?>" class="collapse 
                                    <?php
                                    if ($i == 1) {
                                        echo 'show';
                                    } ?>" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <?php the_sub_field('answer'); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="skills">
                    <?php if (class_exists('ACF')) : ?>
                        <div class="page-title">
                            <h4><?php if (get_field('skill_section_title', 'option')) : ?>
                                    <?php echo get_field('skill_section_title', 'option'); ?>
                                <?php endif; ?>
                            </h4>
                        </div>
                        <?php if (have_rows('skills', 'option')) : ?>
                            <?php while (have_rows('skills', 'option')) : the_row(); ?>
                                <div class="single-skill">
                                    <h4><?php the_sub_field('skill_name'); ?></h4>
                                    <div class="progress-bar" role="progressbar" style="width: <?php the_sub_field('skill_level'); ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php the_sub_field('skill_level'); ?>%</div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Choose Area End -->
<!-- Services Area Start -->
<section class="services-area pt-100 pb-50" id="services">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <h3><span>who we are?</span> our services</h3>
            </div>
            <div class="col-md-6">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'Service',

            );
            $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Service -->
                        <div class="single-service">
                            <?php if (class_exists('ACF')) : ?>
                                <?php if (get_field('icon_code')) : ?>
                                    <?php echo get_field('icon_code'); //esc_attr not working here
                                    ?>
                                <?php endif; ?>
                            <?php endif;  ?>
                            <h4><?php the_title() ?></h4>
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>
<!-- Services Area End -->

<!-- Counter Area End -->
<section class="counter-area">
    <div class="container-fluid">
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'counter',
            );
            $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-3">
                        <div class="single-counter">
                            <h4>
                                <?php if (class_exists('ACF')) : ?>
                                    <?php if (get_field('icon')) : ?>
                                        <?php echo get_field('icon'); ?>
                                    <?php endif; ?>
                                    </i><span class="counter">
                                        <?php if (get_field('number')) : ?>
                                            <?php echo get_field('number'); ?>
                                        <?php endif; ?>
                                    </span>
                                <?php endif; ?>
                                <?php the_title() ?>
                            </h4>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>
<!-- Counter Area End -->
<!-- Team Area Start -->
<section class="team-area pb-100 pt-100" id="team">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <h3><span>who we are?</span> creative team</h3>
            </div>
            <div class="col-md-6">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
            </div>
        </div>
        <div class="row">
            <?php

            $args = array(
                'post_type' => 'team_member',
            );
            $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-3">
                        <div class="single-team">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="" />
                            <div class="team-hover">
                                <div class="team-content">
                                    <h4><?php the_title() ?></h4>
                                    <?php if (class_exists('ACF')) : ?>
                                        <span>
                                            <?php if (get_field('member_posetion')) : ?>
                                                <?php echo get_field('member_posetion'); ?>
                                            <?php endif; ?>
                                        </span>
                                        <ul>
                                            <?php if (get_field('facebook')) : ?>
                                                <li><a href=" <?php echo get_field('facebook'); ?>"> <i class="fa-brands fa-facebook "></i></a></li>
                                            <?php endif; ?>
                                            <!-- twiter  -->
                                            <?php if (get_field('twiter')) : ?>
                                                <li><a href="<?php echo get_field('twiter'); ?>"> <i class="fa-brands fa-twitter"></i></a></li>
                                            <?php endif; ?>
                                            <!-- linkedin  -->
                                            <?php if (get_field('linkedin')) : ?>
                                                <li><a href=" <?php echo get_field('linkedin'); ?>"> <i class=" fa-brands fa-linkedin-in"></i></a></li>
                                            <?php endif; ?>
                                            <!-- google+  -->
                                            <?php if (get_field('google+')) : ?>
                                                <li><a href=" <?php echo get_field('google+'); ?>"> <i class="fa-brands fa-google-plus-g"></i></a></li>
                                            <?php endif; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>
<!-- Team Area End -->

<!-- Testimonials Area Start -->
<section class="testimonial-area pb-100 pt-100" id="testimonials">
    <div class="container">
        <div class="row section-title white-section">
            <div class="col-md-6 text-right">
                <h3><span>who we are?</span> what client say</h3>
            </div>
            <div class="col-md-6">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonials owl-carousel">

                    <?php

                    $args = array(
                        'post_type' => 'client_review',
                    );
                    $query = new WP_Query($args);
                    ?>
                    <?php if ($query->have_posts()) : ?>
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="single-testimonial">
                                <div class="testi-img">
                                    <img src="<?php the_post_thumbnail_url() ?>" alt="" />
                                </div>
                                <p><?php the_content() ?></p>
                                <h4><?php the_title() ?>
                                    <span><?php if (get_field('client_posetion')) : ?>
                                            <?php echo get_field('client_posetion'); ?>
                                        <?php endif; ?>
                                    </span>
                                </h4>
                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>

                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonilas Area End -->
<!-- Latest News Area Start -->
<section class="blog-area pb-100 pt-100" id="blog">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <h3><span>who we are?</span> latest news</h3>
            </div>
            <div class="col-md-6">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
            </div>
        </div>
        <div class="row">

            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                // 'meta_key' => 'field_name',
                // 'meta_value' => 'field_value'
            );

            $query = new WP_Query($args);

            ?>

            <?php if ($query->have_posts()) : ?>

                <?php while ($query->have_posts()) : $query->the_post(); ?>

                    <div class="col-md-4">
                        <div class="single-blog">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="" />
                            <div class="post-content">
                                <div class="post-title">
                                    <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                                </div>
                                <div class="pots-meta">
                                    <ul>
                                        <li><?php the_date('M d, y') ?></li>
                                        <li><?php the_author() ?></li>
                                    </ul>
                                </div>
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink() ?>" class="box-btn"><?php esc_html_e('read more', 'halim'); ?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>




                <?php endwhile; ?>

            <?php endif; ?>

            <?php wp_reset_query(); ?>



        </div>
    </div>
</section>
<!-- Latest News Area End -->


<?php get_footer(); ?>