<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title>Adventure Playground</title>
        <meta name="description" content="<?php bloginfo('description') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Tinos|Open+Sans' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    
        <?php wp_head(); ?>
        
    </head>
    <body <?php body_class(); ?>>
        <div class="top">
            <div class="inner">
                <div class="top__languages">
                    <a class="languages-en" href="#" data-lang="en">English</a> |
                    <a class="languages-es" href="#" data-lang="es">Spanish</a>
                </div>
                <div class="top__social">
                     <span>We Build Adventure</span>
                     <a href="https://www.facebook.com/CANOPYZIPLINETOURS?fref=ts" class="top__social__link"><i class="icon-facebook"></i></a>
                     <!--<a href="#" class="top__social__link"><i class="icon-twitter"></i></a>
                     <a href="#" class="top__social__link"><i class="icon-google-plus"></i></a>
                     <a href="#" class="top__social__link"><i class="icon-youtube"></i></a>-->
                </div>

            </div>
        </div>
        <header class="header">
            <div class="inner">
                <a href="<?php echo home_url( '/' ); ?>" class="header__logo"><img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="Logo" class="header__logo__img" /></a>
                <div class="header__contact">
                        (506) 2257-4180 
                </div>
                  <?php get_template_part( 'templates/nav' ); ?>
                <button id="btn-menu" class="header__btn-menu">Menu</button>
            </div>
        </header>