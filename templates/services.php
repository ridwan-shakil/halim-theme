<?php
// Template Name: Services
get_header();
?>
<?php get_template_part('inc/breadcumb'); ?>


<!-- Services Area Start -->
<section class="services-area pt-100 pb-50" id="services">
   <div class="container">
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
                     <?php if (get_field('icon_code')) : ?>
                        <?php echo get_field('icon_code'); ?>
                     <?php endif; ?>

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

<?php get_footer(); ?>