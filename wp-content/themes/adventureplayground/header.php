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
            <!--<div class="inner">-->
                <div class="top__languages">
                    <a class="languages-en" href="#" data-lang="en">English</a> |
                    <a class="languages-es" href="#" data-lang="es">Spanish</a>
                </div>
                <span><img src="<?php echo get_template_directory_uri();  ?>/img/WBA.png" alt="We Build Adventure" /></span>
                <div class="top__social">
                     
                     <a href="https://www.facebook.com/CANOPYZIPLINETOURS?fref=ts" class="top__social__link facebook"><!--<i class="icon-facebook"></i>--></a>
                     <a href="#" class="top__social__link youtube"><!--<i class="icon-youtube">--></i></a>
                     <!--<a href="#" class="top__social__link"><i class="icon-twitter"></i></a>
                     <a href="#" class="top__social__link"><i class="icon-google-plus"></i></a>
                     -->
                </div>

            <!--</div>-->
        </div>
        <header class="header">
            <span class="header-rope"></span>
            <div class="inner">
                <a href="<?php echo home_url( '/' ); ?>" class="header__logo"><img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="Logo" class="header__logo__img" /></a>
                <div class="header__contact">
                        (506) 2257-4180 
                </div>
                  <?php get_template_part( 'templates/nav' ); ?>
                <button id="btn-menu" class="header__btn-menu">Menu</button>
            </div>
        </header>
        <section class="banner">
            <div class="banner__video">
                <video autoplay="autoplay" loop="loop" poster="http://lorempixel.com/960/360/nature/1/" id="bgvid">
                            <source src="<?php echo get_template_directory_uri();  ?>/img/bg.mp4" type="video/mp4" />
                            <source src="<?php echo get_template_directory_uri();  ?>/img/bg.ogv" type="video/ogg" />HTML5 vídeo no es soportado por este navegador</video>
            </div>
            <div class="banner__menu inner">
                   
                  <?php query_posts( 'post_type=page&page_id=286' ); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <?php the_content(); ?>
            
                        <?php endwhile; ?>
                        <!-- post navigation -->
                      
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
        </section>