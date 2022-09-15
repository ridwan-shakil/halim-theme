<?php
// Template Name: Portfolio

get_header();
?>
<?php get_template_part('inc/breadcumb'); ?>


<!-- projectss Area Start -->
<section class="projects-area pb-100 pt-100" id="projects">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="portfolio-menu mb-40 text-center">
               <button class="active" data-filter="*">ALL</button>
               <?php
               $cats = get_terms('portfolio-cat');
               foreach ($cats as $cat) {
               ?>
                  <button data-filter=".<?php echo $cat->slug;  ?>" class=""><?php echo $cat->name;  ?></button>
               <?php
               }
               ?>
            </div>
         </div>
      </div>
      <!-- projects  -->
      <div class="row grid no-gutters">
         <?php
         $args = array(
            'post_type' => 'portfolio',
         );
         $query = new WP_Query($args);
         ?>
         <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
               <?php
               $post_cats = get_the_terms($post->ID, array('portfolio-cat'));
               ?>
               <div class="col-md-4 grid-item 
               <?php foreach ($post_cats as $cat) {
                  echo ' ' . $cat->slug . '';
               }
               ?>">
                  <div class="single-portfolio">
                     <img src="<?php the_post_thumbnail_url() ?>" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="<?php the_permalink() ?>" class=""><i class="fa fa-link"></i> <?php the_title(); ?> <span><?php the_field('designation'); ?></span></a></h3>
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
<!-- projectss Area End -->

<?php
get_footer();
?>