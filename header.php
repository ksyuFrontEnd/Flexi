<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="flexi-it-wrapper">
        <header class="header">
            <div class="header__container">
                <div class="header__menu menu">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="logo">
                            <?php 
                            if ( has_custom_logo() ) : ?>
                                <a href="<?php echo home_url(); ?>">
                                    <?php echo get_custom_logo(); ?>
                                </a>
                            <?php endif;
                            ?>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'header_menu',
                                'container' => false,
                                'menu_class' => 'navbar-nav',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                                'depth' => 0,
                            ) );
                            ?>
                        </div>
                    </nav>
                </div>
            </div>   
        </header>