<?php
// Template Name: About
?>
<?php get_header(); ?>
<?php get_template_part('inc/breadcumb'); ?>

<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
   <div class="container">
      <div class="row">
         <?php if (class_exists('ACF')) : ?>
            <div class="col-md-7">
               <div class="about">
                  <?php
                  $about_left = get_field('about_left', 'option');
                  ?>
                  <div class="page-title">
                     <h4><?php echo $about_left['heading'] ?></h4>
                  </div>
                  <p><?php echo $about_left['content'] ?></p>
               </div>
            </div>
            <div class="col-md-5">
               <?php if (have_rows('about_right', 'option')) : ?>
                  <?php while (have_rows('about_right', 'option')) : the_row(); ?>
                     <div class="single_about">
                        <?php esc_attr(the_sub_field('icon')); ?>
                        <h4><?php the_sub_field('heading'); ?></h4>
                        <p><?php the_sub_field('content'); ?></p>
                     </div>
                  <?php endwhile; ?>
               <?php endif; ?>
            </div>
         <?php endif ?>
      </div>
</section>
<!-- About Area End -->

<?php get_footer(); ?>