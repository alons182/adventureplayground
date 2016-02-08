<?php 
    /*
    Template Name: Page Home
     */
 ?>
<?php get_header(); ?>


        <main class="main">
            <section class="content main-home">
                <div class="inner">
                    
                    <?php rewind_posts(); ?>
                    <?php query_posts( 'page_id=70' ); ?>
                  <?php get_template_part( 'templates/loop' ); ?> 

                
                </div>
               
            </section>
            <section class="map">
                <div class="inner">
                    <h1 class="txt-center"><?php  echo (get_locale() == "es_ES") ? "Proyectos" : "Projects" ?></h1>
                   <div class="map__container">
                       
                       <div class="map__bg">
                           <span class="map__label-country label-guatemala" data-country="guatemala">
                               <img src="<?php echo get_template_directory_uri();  ?>/img/flags/gt.jpg" alt="Guatemala"/> Guatemala
                           </span>
                           <span class="map__label-country label-honduras" data-country="honduras">
                               <img src="<?php echo get_template_directory_uri();  ?>/img/flags/hn.jpg" alt="Honduras"/> Honduras
                           </span>
                           <span class="map__label-country label-cr" data-country="costa-rica">
                               <img src="<?php echo get_template_directory_uri();  ?>/img/flags/cr.jpg" alt="Costa Rica"/> Costa Rica 
                           </span>
                           <span class="map__label-country label-jamaica" data-country="jamaica">
                               <img src="<?php echo get_template_directory_uri();  ?>/img/flags/jm.jpg" alt="Jamaica"/> Jamaica
                           </span>
                           <span class="map__label-country label-santalu" data-country="santa-lucia">
                               <img src="<?php echo get_template_directory_uri();  ?>/img/flags/lc.jpg" alt="Santa Lucia"/> Santa Lucia
                           </span>
                           <span class="map__label-country label-bolivia" data-country="bolivia">
                               <img src="<?php echo get_template_directory_uri();  ?>/img/flags/bo.jpg" alt="Bolivia"/> Bolivia
                           </span>
                            <span class="map__label-country label-laos" data-country="laos">
                               <img src="<?php echo get_template_directory_uri();  ?>/img/flags/la.jpg" alt="Laos"/> Laos
                           </span>

                           <div class="map__country animated zoomIn" data-costa-rica>
                                   <span class="map__close">x</span>
                                   <div class="map__country__cr">
                                      <a href="#mawamba" class="map__label-province label-mawamba" data-effect="mfp-zoom-out" data-project="216">Mawamba - Gavilan</a>
                                      <div id="mawamba" class="white-popup mfp-hide mfp-with-anim" data-project="216">
                                        <div class="content-project">
                                          <h1 style="text-align:center;">Loading...</h1>
                                        </div>
                                      </div>
                                      <a href="#vida" class="map__label-province label-vida" data-effect="mfp-zoom-out" data-project="221">Vida Aventura</a>
                                      <div id="vida" class="white-popup mfp-hide mfp-with-anim" data-project="221">
                                        <div class="content-project">
                                          <h1 style="text-align:center;">Loading...</h1>
                                        </div>
                                      </div>
                                      <a href="#punta" class="map__label-province label-punta" data-effect="mfp-zoom-out" data-project="202">Hotel Punta Islita</a>
                                      <div id="punta" class="white-popup mfp-hide mfp-with-anim" data-project="202">
                                        <div class="content-project">
                                          <h1 style="text-align:center;">Loading...</h1>
                                        </div>
                                      </div>
                                      <a href="#barranca" class="map__label-province label-barranca" data-effect="mfp-zoom-out" data-project="226">Parque Aventure Rio Barranca</a>
                                      <div id="barranca" class="white-popup mfp-hide mfp-with-anim" data-project="226">
                                        <div class="content-project">
                                          <h1 style="text-align:center;">Loading...</h1>
                                        </div>
                                      </div>
                                      <a href="#telepacifico" class="map__label-province label-telepacifico" data-effect="mfp-zoom-out" data-project="231">Teleferico Pacifico</a>
                                      <div id="telepacifico" class="white-popup mfp-hide mfp-with-anim" data-project="231">
                                        <div class="content-project">
                                          <h1 style="text-align:center;">Loading...</h1>
                                        </div>
                                      </div>
                                      <a href="#sky" class="map__label-province label-sky" data-effect="mfp-zoom-out" data-project="175">Sky Mountain</a>
                                      <div id="sky" class="white-popup mfp-hide mfp-with-anim" data-project="175">
                                        <div class="content-project">
                                          <h1 style="text-align:center;">Loading...</h1>
                                        </div>
                                      </div>
                                      <a href="#eukomeni" class="map__label-province label-eukomeni" data-effect="mfp-zoom-out" data-project="183">Eukomeni</a>
                                      <div id="eukomeni" class="white-popup mfp-hide mfp-with-anim" data-project="183">
                                        <div class="content-project">
                                          <h1 style="text-align:center;">Loading...</h1>
                                        </div>
                                      </div>    
                                      <a href="#teleatlantico" class="map__label-province label-teleatlantico" data-effect="mfp-zoom-out" data-project="211">Teleferico Atlantico</a>
                                      <div id="teleatlantico" class="white-popup mfp-hide mfp-with-anim" data-project="211">
                                        <div class="content-project">
                                          <h1 style="text-align:center;">Loading...</h1>
                                        </div>
                                      </div>
                                       <a href="#cairo" class="map__label-province label-cairo" data-effect="mfp-zoom-out" data-project="192">Rios Tropicales Cairo</a>
                                        <div id="cairo" class="white-popup mfp-hide mfp-with-anim" data-project="192">
                                          <div class="content-project">
                                            <h1 style="text-align:center;">Loading...</h1>
                                          </div>
                                        </div>   

                                        <a href="#pacuare" class="map__label-province label-pacuare" data-effect="mfp-zoom-out" data-project="197">Ríos Tropicales Pacuare Lodge</a>
                                        <div id="pacuare" class="white-popup mfp-hide mfp-with-anim" data-project="197">
                                          <div class="content-project">
                                            <h1 style="text-align:center;">Loading...</h1>
                                          </div>
                                        </div>
                                        <a href="#trogon" class="map__label-province label-trogon" data-effect="mfp-zoom-out" data-project="93">Trogon Lodge</a>
                                        <div id="trogon" class="white-popup mfp-hide mfp-with-anim" data-project="93">
                                          <div class="content-project">
                                            <h1 style="text-align:center;">Loading...</h1>
                                          </div>
                                        </div>   
                                        <a href="#corcovado" class="map__label-province label-corcovado" data-effect="mfp-zoom-out" data-project="207">Corcovado Lodge</a>
                                        <div id="corcovado" class="white-popup mfp-hide mfp-with-anim" data-project="207">
                                          <div class="content-project">
                                            <h1 style="text-align:center;">Loading...</h1>
                                          </div>
                                        </div>    
                                        <a href="#diamante" class="map__label-province label-diamante" data-effect="mfp-zoom-out" data-project="482">Diamante Eco Adventure Park</a>
                                        <div id="diamante" class="white-popup mfp-hide mfp-with-anim" data-project="482">
                                          <div class="content-project">
                                            <h1 style="text-align:center;">Loading...</h1>
                                          </div>
                                        </div>      

                                        

                                   </div>
                                   
                                   
                            </div>
                            <div class="map__country animated zoomIn" data-guatemala>
                                   <span class="map__close">x</span>
                                   <div class="map__country__gt">
                                      <a href="#antigua" class="map__label-province label-antigua" data-effect="mfp-zoom-out" data-project="248">Antigua Canopy Tours</a>
                                      <div id="antigua" class="white-popup mfp-hide mfp-with-anim" data-project="248">
                                        <div class="content-project">
                                          <h1 style="text-align:center;">Loading...</h1>
                                        </div>
                                      </div>
                                      <a href="#circo" class="map__label-province label-circo" data-effect="mfp-zoom-out" data-project="475">Canopy Circo del Aire</a>
                                      <div id="circo" class="white-popup mfp-hide mfp-with-anim" data-project="475">
                                        <div class="content-project">
                                          <h1 style="text-align:center;">Loading...</h1>
                                        </div>
                                      </div>  
                                   </div>
                            </div>
                            <div class="map__country animated zoomIn" data-honduras>
                                   <span class="map__close">x</span>
                                   <div class="map__country__hn">
                                      <a href="#rawacala" class="map__label-province label-rawacala" data-project="253">Rawacala</a>
                                      <div id="rawacala" class="white-popup mfp-hide mfp-with-anim" data-project="253">
                                        <div class="content-project">
                                          <h1 style="text-align:center;">Loading...</h1>
                                        </div>
                                      </div>  
                                   </div>
                            </div>
                            <div class="map__country animated zoomIn" data-jamaica>
                                   <span class="map__close">x</span>
                                   <div class="map__country__jm">
                                      <a href="#mystic" class="map__label-province label-mystic" data-project="259">Mystic Mountain</a>
                                      <div id="mystic" class="white-popup mfp-hide mfp-with-anim" data-project="259">
                                        <div class="content-project">
                                          <h1 style="text-align:center;">Loading...</h1>
                                        </div>
                                      </div>  
                                   </div>
                            </div>
                            <div class="map__country animated zoomIn" data-santa-lucia>
                                   <span class="map__close">x</span>
                                   <div class="map__country__st">
                                      <a href="#rainforestst" class="map__label-province label-rainforestst" data-project="265">Rainforest Trams - St. Lucia</a>
                                      <div id="rainforestst" class="white-popup mfp-hide mfp-with-anim" data-project="265">
                                        <div class="content-project">
                                          <h1 style="text-align:center;">Loading...</h1>
                                        </div>
                                      </div>  
                                      <a href="#palm" class="map__label-province label-palm" data-project="270">Palm Services</a>
                                      <div id="palm" class="white-popup mfp-hide mfp-with-anim" data-project="270">
                                        <div class="content-project">
                                          <h1 style="text-align:center;">Loading...</h1>
                                        </div>
                                      </div> 
                                   </div>
                            </div>
                            <div class="map__country animated zoomIn" data-bolivia>
                                   <span class="map__close">x</span>
                                   <div class="map__country__bo">
                                      
                                   </div>
                            </div>
                            <div class="map__country animated zoomIn" data-laos>
                                   <span class="map__close">x</span>
                                   <div class="map__country__la">
                                      
                                   </div>
                            </div>
                       
                       </div>
                   </div>
                   
                    
                </div>
               
            </section>
                       
        
        </main>

<?php get_footer(); ?>