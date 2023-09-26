<?php
   // This function will take $_SERVER['REQUEST_URI'] and build a breadcrumb based on the user's current path
   function breadcrumbs($separator = ' &raquo; ', $home = 'Home') {
       // This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
       $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
   
       // This will build our "base URL" ... Also accounts for HTTPS :)
       $base = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
   
       // Initialize a temporary array with our breadcrumbs. (starting with our home page, which I'm assuming will be the base URL)
       $breadcrumbs = Array("<a href=\"$base\">$home</a>");
   
       // Find out the index for the last value in our path array
       //print_r($path); 
   
   //  $last = $path[count($path)-1];
       $tmp = array_keys($path);
     	$last = end($tmp);
     	unset($tmp);
   
       // Build the rest of the breadcrumbs
       foreach ($path AS $x => $crumb) {
           // Our "title" is the text that will be displayed (strip out .php and turn '_' into a space)
           $title = ucwords(str_replace(Array('.html', '-'), Array('', ' '), $crumb));
   
           // If we are not on the last index, then display an <a> tag
           if ($x == 1){
               $breadcrumbs[] = "<a href=\"$base$crumb\">$title</a>";
           }
               elseif ($x > 1 && $x < $last){
                 $tmp ="";
           for($i = 1; $i <= $x; $i++){ 
             $tmp .= $path[$i] . '/'; 
           } 
           $xyz =  "<a href=\"$base$tmp\">$title</a>";
           $breadcrumbs[] = $xyz;
           unset($tmp);
           }
           // Otherwise, just display the title (minus)
           else
               $breadcrumbs[] = $title;
       }
   
   
       // Build our temporary array (pieces of bread) into one big string :)
       return implode($separator, $breadcrumbs);
   }
   
   ?>
<div id="overlapblackbg"></div>
<header>
  
   <div class="clearfix wsmobileheader"> 
      <a href="<?=BASE_URL?>" class="smallogo">TuskTravel</a>
      <a class="animated-arrow" id="wsnavtoggle"> <span></span></a> 
      <!-- <span class="call_action call"><a href="tel:+919205642688" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a></span>
			
			<span class="mail_action" style="right:112px;"><a href="https://wa.me/919205642688?text=¡Hola!%20Tusk%20Travel"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></span>


			<span class="mail_action"><a href="mailto:contact@tusktravel.com?Subject=Viajes India" target=_top><i class="fa fa-envelope-open-o" aria-hidden="true"></i></a></span> -->
   </div>



   <div class="header">
      <!--desk logo row section-->
      <div class="clearfix top-header">
         <div class="col-xs-12 col-lg-4 col-md-4 col-sm-12">
            <div class="clearfix logo">
               <a href="<?=BASE_URL?>" title="Responsive Slide Menus">
               <img src="<?=BASE_URL?>images/logo.png" alt="TUSK TRAVEL LOGO">
               </a>
            </div>
         </div>
         <div class="col-lg-4 col-md-8 col-sm-12">
            <?php include ('search-data.php') ?>
         </div>
         <div class="col-lg-4 col-md-8 col-sm-12">
            <div class="center-header">
               <ul class="top-nav">
                  <li>
                     <div class="phone"><a href="https://web.whatsapp.com/send?phone=919205642688?text=%C2%A1Hola!"><img src="<?=BASE_URL?>/images/wats-app-icon.png" width="22">+91 920 564 2688</a>
                     </div>
                  </li>
                  <!-- Trigger/Open The Modal -->
                  <li class="lang dropdown">
                     <!-- 	<a href="">Language</a> -->
                     <a class="dropdown-toggle" type="button" data-toggle="dropdown"> <img src="<?=BASE_URL?>images/span.jpg">Español<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                     	<li><a href="https://www.tusktravel.com.mx/"><img src="<?=BASE_URL?>images/span.jpg"> Español</a></li>
                        <li><a href="https://www.tusktravel.com/" target="_blank"><img src="<?=BASE_URL?>images/eng.png">English</a></li>
                        
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!--menu navigatin section-->
      <div class="header-nav">
         <nav class="clearfix wsmenu">
            
            <ul class="mobile-sub wsmenu-list">
               
                  <li> 				
                  <a href="https://www.tusktravel.com.mx/">Inicio</a>
               </li>
               
<li> 
              <span class="wsmenu-click"><i class="fa fa-plus wsmenu-arrow"></i></span>
              <a href="#">Destinos<span class="fa fa-chevron-down"></span></a>
             
              <div class="clearfix megamenu">
                <div class="-fluid new-contain">
                  <div class="">
                    <div class="col-xs-12 col-md-12 col-lg-4 coln_menu menu-border menu-less-padding-form-mob">         
                      <div class="nav_link_title"><a href="javascript:void(0)"> <strong>Viajes a Asia</strong></a></div>
                      <ul class="col-xs-12 col-md-12 link-list col-lg-6 menu-less-padding-form-mob">
                         <li><a href="<?=BASE_URL?>viajes-india/"> <i class="fa fa-arrow-circle-right"></i>India</a></li>
                     <li><a href="<?=BASE_URL?>viajes-nepal/"> <i class="fa fa-arrow-circle-right"></i>Nepal</a></li>
                     <li><a href="<?=BASE_URL?>viajes-maldivas/"> <i class="fa fa-arrow-circle-right"></i>Maldivas</a></li>
                     <li><a href="<?=BASE_URL?>viajes-tailandia/"> <i class="fa fa-arrow-circle-right"></i>Tailandia</a></li>
                     <li><a href="<?=BASE_URL?>viajes-sri-lanka/"><i class="fa fa-arrow-circle-right"></i>Sri Lanka</a></li>
                     <li><a href="<?=BASE_URL?>viajes-dubai/"> <i class="fa fa-arrow-circle-right"></i>Dubai</a></li>
                     <li><a href="<?=BASE_URL?>viajes-butan/"> <i class="fa fa-arrow-circle-right"></i>Bután</a></li>
                     <li><a href="<?=BASE_URL?>viajes-tibet/"> <i class="fa fa-arrow-circle-right"></i>Tibet</a></li>  
                        
                      </ul>
                      <ul class="col-xs-12 col-md-12 link-list col-lg-6 menu-less-padding-form-mob">
                        
                        <li><a href="<?=BASE_URL?>viajes-vietnam/"> <i class="fa fa-arrow-circle-right"></i>Vietnam</a></li>
                     <li><a href="<?=BASE_URL?>viajes-laos/"> <i class="fa fa-arrow-circle-right"></i>Laos</a></li>
                     <li><a href="<?=BASE_URL?>viajes-myanmar/"> <i class="fa fa-arrow-circle-right"></i>Myanmar</a></li>
                     <li><a href="<?=BASE_URL?>viajes-camboya/"><i class="fa fa-arrow-circle-right"></i>Camboya</a></li>
                     <li><a href="<?=BASE_URL?>viajes-indonesia/"> <i class="fa fa-arrow-circle-right"></i>Indonesia</a></li>
                     <li><a href="<?=BASE_URL?>viajes-malasia/"> <i class="fa fa-arrow-circle-right"></i>Malasia</a></li>
                     <li><a href="<?=BASE_URL?>viajes-japon/"> <i class="fa fa-arrow-circle-right"></i>Japón</a></li>  
                        

                      </ul>
                    </div>
                    
                    <div class="col-xs-12 col-md-12 col-lg-5 menu-less-padding-form-mob">
                      <div class="nav_link_title"><a href="<?=BASE_URL?>viajes-india/"> <strong>Viajes a India</strong></a></div>
                      <ul class="col-xs-12 col-md-12 col-lg-6 link-list">   

                <li><a href="<?=BASE_URL?>viajes-india/rajastan/"><i class="fa fa-arrow-circle-right"></i>Rajastán</a></li>
                <li><a href="<?=BASE_URL?>viajes-india/delhi/"> <i class="fa fa-arrow-circle-right"></i>Delhi</a></li>
                <li><a href="<?=BASE_URL?>viajes-india/mumbai/"> <i class="fa fa-arrow-circle-right"></i>Bombay</a></li>
                <li><a href="<?=BASE_URL?>viajes-india/kerala/"><i class="fa fa-arrow-circle-right"></i>Kerala</a></li>
                <li><a href="<?=BASE_URL?>viajes-india/benares/">  <i class="fa fa-arrow-circle-right"></i>Benares</a></li>
                <li><a href="<?=BASE_URL?>viajes-india/agra/">  <i class="fa fa-arrow-circle-right"></i>Agra</a></li> 
                <li><a href="<?=BASE_URL?>viajes-india/goa/">  <i class="fa fa-arrow-circle-right"></i>Goa</a></li>
                <li><a href="<?=BASE_URL?>viajes-india/ladakh/">  <i class="fa fa-arrow-circle-right"></i>Ladakh</a></li>
               
                
                
                      </ul>
                      <ul class="col-xs-12 col-md-12 col-lg-6 link-list">                       
                  <li><a href="<?=BASE_URL?>viajes-india/triangulo-de-oro-india/"> <i class="fa fa-arrow-circle-right"></i>Triángulo de Oro</a></li>
                  <li><a href="<?=BASE_URL?>viajes-india/sur-de-india/"> <i class="fa fa-arrow-circle-right"></i>Sur de India </a></li>
                  <li><a href="<?=BASE_URL?>viajes-india/norte-de-india/"> <i class="fa fa-arrow-circle-right"></i>Norte de India</a></li>
                  <li><a href="<?=BASE_URL?>viajes-india/noreste-de-india/"> <i class="fa fa-arrow-circle-right"></i>Noreste de India</a></li>


                  
                      </ul>
                     </div>
                  </div>
                </div>
              </div>
            </li>
            



               
                <li>
                  <span class='wsmenu-click'><i class="fa fa-plus wsmenu-arrow"></i></span><a href="#">Estilo de viaje<span class="fa fa-chevron-down"></span></a>
                  <ul class=wsmenu-submenu>
                    <li><a href="<?=BASE_URL?>viajes-india/yoga-y-meditacion/">Yoga y Meditacion</a></li>
                    <li><a href="<?=BASE_URL?>viajes-india/culturales/">India Culturales</a></li>
                    <li><a href="<?=BASE_URL?>viajes-india/retiro-espiritual/">Retiro Espiritual India</a></li>
                    <li><a href="<?=BASE_URL?>viajes-india/luna-de-miel/">Luna de miel India</a></li>                    
                     <li><a href="<?=BASE_URL?>viajes-india/lujo-paquetes/">Lujo Viaje India</a></li>
                     <li><a href="<?=BASE_URL?>viajes-india/vacaciones-familiares/">Vacaciones Familiares</a></li>
                     <li><a href="<?=BASE_URL?>viajes-india/safari-vida-silvestre/">Safari Vida Silvestre</a></li>
                     <li><a href="<?=BASE_URL?>viajes-india/vacaciones-playa/">Vacaciones Playa</a></li>
                     <li><a href="<?=BASE_URL?>viajes-india/aventura-tour/">Viaje de Aventura a India</a></li>
                  </ul>
               </li>

               <li>
                  <span class='wsmenu-click'><i class="fa fa-plus wsmenu-arrow"></i></span><a href="#">Tours Combinados<span class="fa fa-chevron-down"></span></a>
                  <ul class=wsmenu-submenu>
                    <li><a href="<?=BASE_URL?>paquetes/15-dias-viaje-india-y-nepal.html">Viaje India y Nepal</a></li>
                     <li><a href="<?=BASE_URL?>paquetes/viaje-india-y-tailandia-paquetes.html">Viaje India y Tailandia</a></li>
                     <li><a href="<?=BASE_URL?>paquetes/viaje-a-india-nepal-y-butan.html">Viaje India, Nepal y Bután</a></li>
                     <li><a href="<?=BASE_URL?>paquetes/viajes-india-nepal-y-dubai.html">Viaje Paquetes India y Dubái</a></li>
                  </ul>
               </li>

              

               

               <li>
                  <span class='wsmenu-click'><i class="fa fa-plus wsmenu-arrow"></i></span><a href="#">Paquetes India <span class="fa fa-chevron-down"></span></a>
                  <ul class=wsmenu-submenu>
                     <li><a href="<?=BASE_URL?>viajes-india/viaje-india-en-10-dias-paquetes.html">Benarés y Khajuraho</a></li>
                     <li><a href="<?=BASE_URL?>viajes-india/viajes-rajasthan-y-varanasi.html.html">Viaje Rajasthan y Benarés</a></li>
                     <li><a href="<?=BASE_URL?>viajes-india/triangulo-dorado-y-haridwar-rishikesh-viaje.html"> Triángulo de Oro con Yoga y Meditación</a></li>
                     <li><a href="<?=BASE_URL?>viajes-india/viaje-al-sur-de-la-india-20-dias.html">Viaje al Sur de la India</h3></a></li>
                  </ul>
               </li>
               
            
               <li> 				
                  <a href="<?=BASE_URL?>viajes-india/grupo/">Viaje India en grupo</a>
               </li>
               <li> 
                  <a href="https://www.tusktravel.com.mx/blog/" target="_blank">Blog</a>
               </li>
               <!--About us -->
               <li>
                  <span class='wsmenu-click'><i class="fa fa-plus wsmenu-arrow"></i></span><a href="#">Quiénes somos<span class="fa fa-chevron-down"></span></a>
                  <ul class=wsmenu-submenu>
                     <li><a href="<?=BASE_URL?>quienes-somos/"> <i class="fa fa-arrow-circle-right"></i>Perfil de la Compañía</a></li>
                     <li><a href="<?=BASE_URL?>quienes-somos/foto-de-viajero-invitado.html"><i class="fa fa-arrow-circle-right"></i>Foto de Invitado</a></li>
                     <li><a href="<?=BASE_URL?>quienes-somos/contactanos.html">  <i class="fa fa-arrow-circle-right"></i>Contacto</a></li>
                     <li><a href="<?=BASE_URL?>quienes-somos/terminos-condiciones.html">  <i class="fa fa-arrow-circle-right"></i>Términos y Condiciones</a></li>
                     <li><a href="<?=BASE_URL?>travellers-reviews.html">   <i class="fa fa-arrow-circle-right"></i>Comentarios</a></li>
                  </ul>
               </li>
               <li class="desk-plan-trip"> <a data-toggle="modal" data-target="#myModal"><i class="fa fa-paper-plane"></i> Planea tu Viaje</a></li>
            </ul>
         </nav>
      </div>
   </div>
</header>
<div class="specier_heder_mobile"></div>