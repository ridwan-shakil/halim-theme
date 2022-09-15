<?php get_header(); ?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php esc_html_e('404 Error', 'halim');
                        eschtml ?></h4>
                    <ul>
                        <li><a href="<?php echo home_url(); ?>"><?php esc_html_e('Home', 'halim') ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 error404">
                <h2><span><?php esc_html_e(' 404 Error :', 'halim') ?></span> <?php esc_html_e('Page not found!!!', 'halim') ?></h2>
                <p><?php esc_html_e('It seems like the page you are looking for , does not exist . Please go to out home page by clicking the ling below', 'halim') ?></p>
                <a href="<?php echo esc_url(home_url()) ?>" class="box-btn"><?php esc_html_e('Home page', 'halim') ?><i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>