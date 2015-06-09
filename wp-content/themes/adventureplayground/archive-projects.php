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

                 <?php rewind_posts(); ?>
                  <?php query_posts( 'page_id=70' ); ?>
                <?php get_template_part( 'templates/loop' ); ?> 
             <!--<table class="table table-responsive table-striped table-bordered">
                <table class="table table-responsive table-striped table-bordered">
                <thead>
                <tr>
                <th>Project</th>
                <th>Localization</th>
                <th>Date</th>
                </tr>
                </thead>
                <tbody>
                

                <?php
                    $args = array(
                      'post_type' => 'projects',
                      'tax_query' => array(
                        array(
                          'taxonomy' => 'country',
                          'field' => 'slug',
                          'terms' => 'costa-rica'
                        )
                      )
                      
                    );
                    $projects = new WP_Query( $args );
                    if( $projects->have_posts() ) {
                      while( $projects->have_posts() ) {
                        $projects->the_post();
                        ?>
                           <tr>
                                <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                                <td>San Gerardo de Dota</td>
                                <td>January 2003</td>
                            </tr>

               
                          
                        <?php
                      }
                    }
                    else {
                      echo 'No projects!';
                    }
                  ?>
                   </tbody>
                </table>-->
            </div>
           
        </section>
                   
    
    </main>

<?php get_footer(); ?>