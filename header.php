<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <?php wp_head(); ?>
    <?php global $redux_demo; ?>
</head>

<body>
    <section class="header-top">
        <div class="container">
            <div class="row">


                <div class="col-md-6 col-sm-12">
                    <div class="header-left">
                        <?php if (get_field('email', 'option')) : ?>
                            <a href="mailto:"><i class="fa fa-envelope"></i><?php echo ' ' . get_field('email', 'option'); ?>
                            </a>
                        <?php endif; ?>
                        <?php if (get_field('phone', 'option')) : ?>
                            <a href="tel:"><i class="fa fa-phone"></i> <?php echo get_field('phone', 'option'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- heder social  -->
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="header-social">
                        <?php if (have_rows('social', 'option')) : ?>

                            <?php while (have_rows('social', 'option')) : the_row(); ?>
                                <a href=" <?php the_sub_field('link', 'option'); ?>"><i class="<?php the_sub_field('icon', 'option'); ?>"></i></a>
                            <?php endwhile; ?>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Area Start -->
    <header class="header header-fixed">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="<?php echo site_url(); ?>">halim</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse ml-auto mainmenu" id="navbarNav">
                            <?php

                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'menu_class' => 'navbar-nav ml-auto'
                            ));
                            ?>

                            <!-- <ul class="navbar-nav ml-auto">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul> -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area end         -->