

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">

        <title><?php bloginfo('name');  ?> <?php wp_title(); ?> | <?php  bloginfo('description');  ?> </title>
    </head>
    <body>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <?php echo $logoimh=get_header_image(); ?>
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="<?php echo site_url(); ?>" class="nav__logo">Foody Lover</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                      <?php wp_nav_menu(array('theme_location'=>'primary-menu','menu_class'=>'nav')) ?>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
      