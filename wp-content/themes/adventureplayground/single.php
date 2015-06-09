<?php get_header(); ?>

<section class="banner">
        <div class="banner__video">
            <video autoplay="autoplay" loop="loop" poster="http://lorempixel.com/960/360/nature/1/" id="bgvid">
                        <source src="<?php echo get_template_directory_uri();  ?>/img/bg.mp4" type="video/mp4" />
                        <source src="<?php echo get_template_directory_uri();  ?>/img/bg.ogv" type="video/ogg" />HTML5 vídeo no es soportado por este navegador</video>
        </div>
        <div class="banner__menu inner">
            <article class="banner__menu__item">
                <a href="#" class="banner__menu__item__link">
                    <img src="http://lorempixel.com/257/164/sports/1/" alt="1" />
                    <span class="banner__menu__item__readmore">Read more +</span>
                </a>
                <h2 class="banner__menu__item__title">Lorem ipsum dolor</h2>
                 
            </article>
            <article class="banner__menu__item">
                <a href="#" class="banner__menu__item__link">
                    <img src="http://lorempixel.com/257/164/sports/2/" alt="2" />
                    <span class="banner__menu__item__readmore">Read more +</span>
                </a>
                <h2 class="banner__menu__item__title">Lorem ipsum dolor</h2>
                
            </article>
            <article class="banner__menu__item">
                <a href="#" class="banner__menu__item__link">
                    <img src="http://lorempixel.com/257/164/sports/3/" alt="3" />
                    <span class="banner__menu__item__readmore">Read more +</span>
                </a>
                <h2 class="banner__menu__item__title">Lorem ipsum dolor</h2>
                
            </article>
            <article class="banner__menu__item">
                <a href="#" class="banner__menu__item__link">
                    <img src="http://lorempixel.com/257/164/sports/4/" alt="4" />
                    <span class="banner__menu__item__readmore">Read more +</span>
                </a>
                <h2 class="banner__menu__item__title">Lorem ipsum dolor</h2>
                 
            </article>
            
        </div>
    </section>

    <main class="main">
        <section class="content">
            <div class="inner">
               
               	<?php get_template_part( 'templates/loop' ); ?> 

               
            </div>
           
        </section>
                   
    
    </main>

<?php get_footer(); ?>