<?php
// Template Name: Gallery

get_header();
?>
<?php get_template_part('inc/breadcumb'); ?>

<!-- Gallery using Redux  -->
<!-- <section class="gallery-area pt-100 pb-100">
   <div class="container">
      <div class="row">

         <?php
         // $gallerys = $redux_demo['opt-gallery'];
         // $gallery = explode(',', $gallerys);
         // foreach ($gallery as $value) {
         //    $image_arr = wp_get_attachment_image_src($value);
         ?>
            <div class="col-xl-4">
               <div class="single-gallery">
                  <img src="<?php //echo $image_arr[0] 
                              ?>" alt="">
                  <div class="gallery-hover">
                     <div class="gallery-content">
                        <h3><a href="<?php //echo $image_arr[0] 
                                       ?>" class="gallery"><i class="fa fa-plus"></i> <?php //echo get_the_title($value); 
                                                                                       ?></a></h3>
                     </div>
                  </div>
               </div>
            </div>
         <?php // } 
         ?>
      </div>
   </div>
</section> -->


<!-- Gallery by ACF  -->
<section class="gallery-area pt-100 pb-100">
   <div class="container">
      <div class="row">
         <?php
         if (class_exists('ACF')) :
            $images = get_field('gallery');
            if ($images) : ?>
               <?php foreach ($images as $image) : ?>
                  <div class="col-xl-4">
                     <div class="single-gallery">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <div class="gallery-hover">
                           <div class="gallery-content">
                              <h3><a href="<?php echo  esc_url($image['sizes']['large']); ?>" class="gallery"><i class="fa fa-plus"></i> <?php echo get_the_title($image); ?></a></h3>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php endforeach; ?>
            <?php endif; ?>
         <?php endif; ?>

      </div>
   </div>
</section>









<?php get_footer(); ?>