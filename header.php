<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="./theme.min.css">
    <link rel="stylesheet" href="./fonts/fonts.css"> -->
    <title>Theme 04</title>

    <?php wp_head(); ?>

</head>
<body>
    
<!-- Header -->
<header class="header">
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light">

            <!-- Logo -->
            <a class="navbar-brand order-sm-1" href="<?php bloginfo('info'); ?>">
                <?php
                    if(function_exists('the_custom_logo') ) {
                        the_custom_logo();
                    }
                ?>
            </a>
        
            <button class="navbar-toggler order-3 order-sm-0 collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3 order-sm-2 justify-content-end" id="navbarSupportedContent">

                <?php 
                    if( has_nav_menu('main-menu') ) {
                        wp_nav_menu([
                            'theme_location' => 'main-menu',
                            'fallback_cb' => false,
                            'container_class' => null,
                            'container_id' => 'navbarResponsive',
                            'menu_class' => 'navbar-nav'
                        ]);
                    }
                ?>

            </div>

            <?php if( get_theme_mod('up_btn_sale') ) : ?>
                <a class="btn-sale order-1 order-sm-3" href="#">
                    <?php echo get_theme_mod('up_btn_sale'); ?>
                </a>
            <?php endif; ?>

            <ul class="group-icons d-flex m-0 list-unstyled order-2 order-sm-4 align-items-center">

                <li class="nav-link btn-search">
                    <i class="fas fa-search"></i>
                </li>

                <li class="nav-item btn-login">
                    <a href="#">Login</a>
                </li>

            </ul>

        </nav>
        
    </div>
</header>
<!-- end Header -->
