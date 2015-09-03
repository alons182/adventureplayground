<?php get_header(); ?>

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

    <main class="main">
        <section class="content">
            <div class="inner">
                
               	<?php get_template_part( 'templates/loop' ); ?> 

            
            </div>
           
        </section>
                   
    
    </main>

<?php get_footer(); ?>