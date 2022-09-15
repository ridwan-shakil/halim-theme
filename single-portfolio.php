<?php
get_header();
?>
<section class="breadcumb-area">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="breadcumb">
               <h4>Single Portfolio</h4>
               <ul>
                  <li><a href="<?php home_url() ?>"></a>Home</li> /
                  <li>Single Portfolio</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="portfolio-single pt-100 pb-100">
   <div class="container">
      <div class="row">
         <div class="col-xl-8">
            <h2><?php the_title(); ?></h2>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <?php the_content(); ?>
            <?php
            if ($gallery = get_field('gallery')) {
            ?>
               <div class="row">
                  <div class="col-xl-12">
                     <h4>project gallery</h4>
                  </div>
                  <?php
                  foreach ($gallery as $image) {
                  ?>
                     <div class="col-xl-4">
                        <div class="project-gallery">
                           <img src="<?php echo $image['url']; ?>" alt="">
                        </div>
                     </div>
                  <?php
                  }
                  ?>

               </div>
            <?php } ?>
            <br><br>
            <div class="row">
               <div class="col-xl-12">
                  <h4>project overview</h4>
                  <?php
                  $video = get_field('video');
                  echo $video;
                  ?>
               </div>
            </div>
         </div>
         <div class="col-xl-4">
            <?php if (have_rows('technology_used')) : ?>
               <div class="portfolio-sidebar">
                  <h4>Technology Used</h4>
                  <ul>
                     <?php while (have_rows('technology_used')) : the_row(); ?>
                        <li><i class="fa fa-arrow-right"></i> <?php the_sub_field('technology'); ?></li>
                     <?php endwhile; ?>
                  </ul>
               </div>
            <?php endif; ?>
            <?php if (have_rows('project_features')) : ?>
               <div class="portfolio-sidebar">
                  <h4>project features</h4>
                  <ul>
                     <?php while (have_rows('project_features')) : the_row(); ?>
                        <li><i class="fa fa-arrow-right"></i> <?php the_sub_field('featur'); ?></li>
                     <?php endwhile; ?>
                  </ul>
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>

<?php get_footer(); ?>