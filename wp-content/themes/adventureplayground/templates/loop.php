
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php if ( !is_home() && ! is_front_page() ) : ?>
		<h1 class="main__content__title"><?php the_title(); ?></h1>
	<?php endif; ?>	
	
	 <?php 
	     $images = rwmb_meta( 'rw_gallery', 'type=image&size=large' ); 
		 if ( $images ) {?>
			<div class="carousel alignleft">
				<div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-timeout="4000" data-cycle-prev="#prevGallery" data-cycle-next="#nextGallery">
					<div class="cycle-pager banner__pager"></div>
               
               <?php foreach ( $images as $image )
                    {?>
                       
                        
                            <img src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?>" />
                        

                    <?php
                      
                     }
                ?>
	                <div class="center">
	                	<a id="prevGallery" href="#"><i class="icon-angle-left"></i></a>
						<a id="nextGallery" href="#"><i class="icon-angle-right"></i></a>
					</div>
                </div>
				
			</div>

		 <?php         
              }
          ?>

	<?php the_content(); ?>	


<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>