<?php get_header();?>

            <section class="menu section bd-container" id="menu">
                <span class="section-subtitle">Special</span>
                <h2 class="section-title">Menu of the week</h2>

                <div class="menu__container bd-grid">
                    <div class="menu__content">
                        <img src="<?php bloginfo('template_directory');?>/img/plate1.png" alt="" class="menu__img">
                        <h3 class="menu__name">Barbecue salad</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">$22.00</span>
                        <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div>

                    <div class="menu__content">
                        <img src="<?php bloginfo('template_directory');?>/img/plate2.png" alt="" class="menu__img">
                        <h3 class="menu__name">Salad with fish</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">$12.00</span>
                        <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div>
                    
                    <div class="menu__content">
                        <img src="<?php bloginfo('template_directory');?>/img/plate3.png" alt="" class="menu__img">
                        <h3 class="menu__name">Spinach salad</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">$9.50</span>
                        <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div>
                </div>
            </section>

<?php get_footer();?>