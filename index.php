<?php get_header(); ?>

<section class="breadcumb-area">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="breadcumb">
               <h4><?php echo single_post_title(); ?> </h4>
               <ul>
                  <li><a href="<?php echo home_url(); ?>">Home</a></li> /
                  <li><?php echo single_post_title(); ?> </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>

<?php wp_reset_postdata(); ?>
<section class="blog-area pb-100 pt-100" id="blog">
   <div <?php post_class(array('container')) ?>>

      <!-- custom query 
      <div class="row mb-5">
         <?php
         // $args = array(
         //    'post_type' => 'page',


         // );
         // $query = new WP_Query($args);
         // while ($query->have_posts()) {
         //    $query->the_post();
         ?>

            <div class="col-md-6 col-xl-4">
               <div class="single-blog">
                  <img src="<?php // the_post_thumbnail_url('full'); 
                              ?>" alt="" />
                  <div class="post-content">
                     <div class="post-title">
                        <h4><a href="#"><?php // the_title(); 
                                          ?></a></h4>
                     </div>
                     <div class="pots-meta">
                        <ul>
                           <li><a href="#"><?php // the_author_posts_link(); 
                                             ?></a></li>
                           <li><a href="#"><?php // the_date('M d'); 
                                             ?></a></li>
                           <li><a href="#"><?php //the_category() 
                                             ?></a></li>
                        </ul>
                     </div>
                     <p><?php // the_excerpt(); 
                        ?></p>
                     <a href="<?php //the_permalink() 
                              ?>" class="box-btn">Read More <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
            </div>

         <?php
         //};
         //   wp_reset_postdata();
         ?>
      </div>
      <hr>
      <hr> -->

      <!-- all blogs   -->
      <?php
      get_template_part('template-parts/content', 'blogs')
      ?>


   </div>
</section>
<!-- Latest News Area End -->

<?php get_footer(); ?>