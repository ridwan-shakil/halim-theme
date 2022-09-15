 <!-- Footer Top -->
 <section class="cta">
     <div class="container">
         <div class="row">
             <div class="col-md-6">
                 <?php $footer_top = get_field('footer_top', 'option'); ?>
                 <h4><?php echo $footer_top['title']; ?><span><?php echo $footer_top['content']; ?></span></h4>
             </div>
             <div class="col-md-6 text-center">
                 <?php
                    if ($footer_top['button_text']) :
                    ?>
                     <a href="<?php echo $footer_top['button__link']; ?>" class="box-btn"><?php echo $footer_top['button_text']; ?> <i class="fa fa-angle-double-right"></i></a>
                 <?php
                    endif;
                    ?>

             </div>
         </div>
     </div>
 </section>

 <!-- Main Footer Area Start -->
 <footer class="footer-area pt-50 pb-50">
     <div class="container">
         <div class="row">
             <div class="col-lg-3 col-md-6">
                 <?php if (is_active_sidebar('footer-1')) {
                        dynamic_sidebar('footer-1');
                    } ?>
             </div>

             <div class="col-lg-2 col-md-6">
                 <div class="single-footer">
                     <?php if (is_active_sidebar('footer-2')) {
                            dynamic_sidebar('footer-2');
                        } ?>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="single-footer">
                     <?php if (is_active_sidebar('footer-3')) {
                            dynamic_sidebar('footer-3');
                        } ?>
                 </div>
             </div>
             <br>

             <div class="col-lg-3 col-md-6">
                 <div class="single-footer contact-box">
                     <h4><?php echo  get_field('title', 'option'); ?></h4>
                     <ul>
                         <?php
                            if (have_rows('list', 'option')) : ?>
                             <?php while (have_rows('list', 'option')) : the_row(); ?>
                                 <li> <?php the_sub_field('icon'); ?>
                                     <?php the_sub_field('item'); ?></li>
                             <?php endwhile; ?>
                         <?php endif; ?>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <!-- Footer bottom  -->
     <div class="container">
         <div class="row copyright">
             <div class="col-md-6">
                 <p><?php echo get_field('copy_right', 'option'); ?></p>
             </div>
             <div class="col-md-6 text-right">
                 <ul>
                     <?php if (have_rows('socials', 'option')) : ?>

                         <?php while (have_rows('socials', 'option')) : the_row(); ?>
                             <li><a href="<?php the_sub_field('social_link'); ?>">
                                     <?php the_sub_field('social_icon'); ?></a></li>
                         <?php endwhile; ?>

                     <?php endif; ?>



                 </ul>
             </div>
         </div>
     </div>
 </footer>

 </body>
 <?php wp_footer();  ?>

 </html>