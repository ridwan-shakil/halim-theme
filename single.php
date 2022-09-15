<?php get_header(); ?>
<?php the_post() ?>

<?php get_template_part('inc/breadcumb'); ?>


<section class="blog-single pt-100 pb-100">
   <div class="container">
      <div class="row">
         <div class="col-xl-8">
            <!-- <h2><?php  ?></h2> -->
            <img src="<?php the_post_thumbnail_url() ?>" alt="">
            <p><?php the_content() ?></p>
            <div class="comments">
               <?php // If comments are open or we have at least one comment, load up the comment template.
               if (comments_open() || get_comments_number()) :
                  comments_template();
               endif; ?>
               <!-- <form action="">
                  <input type="text" placeholder="Name">
                  <input type="text" placeholder="Email">
                  <input type="text" placeholder="Subject">
                  <textarea placeholder="Message"></textarea>
                  <input type="submit" value="Send">
               </form> -->
            </div>
         </div>
         <!-- sideber  -->
         <div class="col-xl-4">

            <div class="single-sidebar">
               <?php if (is_active_sidebar('right-sidebar')) {
                  dynamic_sidebar('right-sidebar');
               } ?>
            </div>





            <!-- 
            <div class="single-sidebar">
               <h4>recent comments</h4>
               <ul>
                  <li><a href="">Lorem ipsum dummy text</a></li>
                  <li><a href="">Lorem ipsum dummy text</a></li>
                  <li><a href="">Lorem ipsum dummy text</a></li>
                  <li><a href="">Lorem ipsum dummy text</a></li>
                  <li><a href="">Lorem ipsum dummy text</a></li>
               </ul>
            </div> -->

         </div>
      </div>
   </div>
</section>


<?php get_footer(); ?>