<?php get_header(); ?>


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