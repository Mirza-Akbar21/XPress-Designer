<?php 
get_header();
?>
  
  <!--========== ABOUT ==========-->
            <section class="about section bd-container" id="about">
                <div class="about__container  bd-grid">
                    <div class="about__data">
                        <span class="section-subtitle about__initial"><?php the_title() ?></span>
                        <!-- <h2 class="section-title about__initial">We cook the best <br> tasty food</h2> -->
                        <p class="about__description">
                        	<?php echo get_the_content(); ?>
                        </p>
                        <!-- <a href="about.php" class="button">Explore history</a> -->
                    </div>

                    <!-- <img src="<?php bloginfo('template_directory');?>/img/about.jpg" alt="" class="about__img">
                </div> -->
            </section>






<?php 
get_footer();
?>

