<div class="row">

    <?php

    while (have_posts()) {
        the_post();

    ?>

        <div class="col-md-4">
            <div class="single-blog">
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="" />
                <div class="post-content">
                    <div class="post-title">
                        <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                    </div>
                    <div class="pots-meta">
                        <ul>
                            <li><?php the_author_posts_link(); ?></li>
                            <li><?php the_date('M d'); ?></li>
                            <li><?php the_category(' , ') ?></li>
                        </ul>
                    </div>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink() ?>" class="box-btn">Read More <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>

    <?php  };
    wp_reset_postdata(); ?>


</div>