<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        <?php wp_title(); ?>
    </title>
    <link rel="shortcut icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/img/icons8-bulle.svg" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!--==========================
                        Header
            ============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <a href="#hero"><img class="DG" src="<?= get_stylesheet_directory_uri(); ?>/img/dg2.png" alt="" title="" /></a>
                <!-- Uncomment below if you prefer to use a text logo -->
                <!-- <h1><a href="#hero">DG Concept</a></h1> -->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#hero">Home</a></li>
                    <li><a href="#about">A Propos</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Equipe</a></li>
                    <li><a href="#contact">Contactez-nous</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <section id="hero">
        <div class="hero-container">
            <h1></h1>
            <h2>DG Concept partout en France !</h2>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://via.placeholder.com/1920x500" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://via.placeholder.com/1920x500" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://via.placeholder.com/1920x500" alt="Third slide">
                    </div>
                </div>
            </div>
            <a href="#about" class="btn-get-started"></a>
        </div>
    </section><!-- #hero -->
    <?php
// configuration du menu WP_Bootstrap_Navwalker
wp_nav_menu([
    'theme_location'    => 'main-menu', // le nom de l'emplacement du menu doit être défini dans le fichier `functions.php`
    'depth'             => 2, // 1 = sans menu déroulant, 2 = avec menu déroulant
    'container'         => 'div',
    'container_class'   => 'collapse navbar-collapse',
    'container_id'      => 'my-theme-navbar-collapse', // si vous changez ce `container_id`, changez-le aussi change les attributs `data-target` et `aria-controls` de la balise `button` ci-dessus
    'menu_class'        => 'nav navbar-nav',
    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
    'walker'            => new WP_Bootstrap_Navwalker(),
]);
?>
    </div>
    </nav>

    <section class="content">