<footer class="footer">
            <div class="inner">
                
                 <div class="footer__top">

                       <?php get_template_part( 'templates/nav-footer' ); ?>
                       
                       
                       <div class="footer__partnership">
                           <h4>Partnership</h4>
                          
                           <a href="http://www.riostropicales.com/" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/logo-rios-tropicales.png" alt="Rios Tropicales"/></a>
                           <!--<a href="#" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/logo-el-viejo.png" alt="El viejo"/></a>-->
                           <!--<a href="http://www.canopyparqueaventura.com/" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/logo-parque-aventure.png" alt="Parque Aventure"/></a>-->
                           <a href="http://www.kohalazipline.com/" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/logo-kohala-zipline.png" alt="kohala zipline"/></a>

                           <a href="http://skyadventures.travel/skytrek/" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/logo-skytrek.png" alt="skytrek"/></a>
                           
                           <!--<a href="http://www.dantalodge.com/" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/logo-corcovado.png" alt="Corcovado"/></a>-->
                           <!--<a href="http://www.canopycostarica.com/" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/logo-sky.png" alt="Sky mountain"/></a>-->
                           <!--<a href="http://antiguacanopytours.com/" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/logo-antigua.png" alt="Antigua Canopy Tours"/></a>-->
                           
                           <a href="http://www.diamanteecoadventurepark.com/" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/logo-diamante.png" alt="Diamante Park"/></a>
                           <a href="http://www.hotelpuntaislita.com/" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/logo-punta-islita.png" alt="Punta Islita"/></a>
                            <a href="http://dokaestate.com/" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/logo-doka.png" alt="Doka Estate"/></a>
                             <a href="http://www.elsilenciolodge.com/" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/logo-elsilencio.jpg" alt="El Silencio Lodge"/></a>
                               <a href="http://acctcertifications.com/" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/logo-acct.jpg" alt="ACCT"/></a>


                       </div>
                       
                       <div class="footer__contact">
                           <h4><?php  echo (get_locale() == "es_ES") ? "Ponerse en contácto" : "Get in touch" ?></h4>
                           <strong><a href="tel:(506) 2282-0167"><i class="icon-phone"></i>  <?php  echo (get_locale() == "es_ES") ? "Oficina" : "Office" ?>: (506) 2282-0167</a> </strong><br/>
                          <strong><a href="tel:(506) 8425-9899"><i class="icon-phone"></i>  <?php  echo (get_locale() == "es_ES") ? "Ventas" : "Sales" ?>: (506) 8425-9899</a> </strong>
                           
 



                           <br>
                           <a href="mailto:info@adventureplaygd.com">info@adventureplaygd.com</a>
                           <br>

                           San Jose, Costa Rica

                           <br>

                           <a href="#" target="_blank"><i class="icon-compass"></i><strong><?php  echo (get_locale() == "es_ES") ? "Abrir en" : "Open in" ?> Google Maps</strong></a>
                           <!--<div class="say-hi"><img src="http://www.discoveryadventurepark.org/wp-content/themes/outdoor-ventures-2014/library/images/say_hi.png"></div>-->
                       </div>
                   </div>

                  <div class="footer__bottom">
                      <div class="footer__copyright">
                         <a href="http://www.avotz.com" class="avotz" target="_blank"><i class="icon-avotz"></i></a> &copy; 2015 Adventure playground
                      </div>

                     <div class="footer__social">
                         <a href="https://www.facebook.com/CANOPYZIPLINETOURS" class="footer__social__link" target="_blank"><i class="icon-facebook"></i></a>
                         <!--<a href="#" class="footer__social__link"><i class="icon-twitter"></i></a>
                         <a href="#" class="footer__social__link"><i class="icon-google-plus"></i></a>
                         <a href="#" class="footer__social__link"><i class="icon-youtube"></i></a>->
                    </div>

                  </div>
               
            </div>
        </footer>
        <!--<div class="tree__left"></div>
        <div class="tree__footer__left"></div>
        <div class="tree__right"></div>
         <div class="tree__footer__right"></div>-->

        
       
        <script src="<?php echo get_template_directory_uri() ?>/js/bundle.js"></script>
         <?php wp_footer(); ?>
    </body>
</html>