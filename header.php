<?php
//MENU SERVICIOS
$rst_menu_servicios=mysql_query("SELECT * FROM pmkt_servicios ORDER BY titulo ASC;", $conexion);

//SLIDER SUPERIOR
$rst_slider_superior=mysql_query("SELECT * FROM pmkt_slide_superior ORDER BY orden ASC;", $conexion);
?>
<header class="limpiar">
        
    <div id="header_sup">
        
        <div id="hsup_logo_social">
        
            <div id="hsls_logo">
            
                <h1><a href="/">Pichling Sports Marketing</a></h1>
            
            </div><!-- FIN HEADER SUPERIOR LOGO SOCIAL LOGO -->
            
            <div id="wg_social">
            
                <ul id="wgsc_items">
                    <li><a href="http://www.facebook.com/pichlingmarketing" target="_blank" class="wgsc_facebook">Facebook</a></li>
                    <li><a href="http://twitter.com/pichlingmkt" target="_blank" class="wgsc_twitter">Twitter</a></li>
                </ul>
            
            </div><!-- FIN HEADER SUPERIOR LOGO SOCIAL SOCIAL -->
        
        </div><!-- FIN HEADER SUPERIOR LOGO SOCIAL -->
        
        <div id="hsup_menu">
            
            <nav>
                <ul id="hspm_prin">
                	<?php $url_final=URL_final(); $url_menu=parse_url($url_final, PHP_URL_PATH); ?>
                    <li class="hspm_item"><a <?php if($url_menu=="/"){ ?> class="active" <?php } ?> href="/">Inicio</a></li>
                    <li class="hspm_item"><a <?php if($url_menu=="/nosotros"){ ?> class="active" <?php } ?> href="nosotros">Nosotros</a></li>
                    <li class="hspm_item servicios"><a <?php if($url_menu=="/servicios"){ ?> class="active" <?php } ?> href="javascript:;">Servicios</a>
                        <ul class="sfm-servicios">
                        	<?php while($fila_menu_servicios=mysql_fetch_array($rst_menu_servicios)){
								//VARIABLES MENU SERVICIOS
								$menuser_url=$fila_menu_servicios["url"];
								$menuser_titulo=$fila_menu_servicios["titulo"];
							?>
                            	<li><a href="servicios/<?php echo $menuser_url; ?>" title="<?php echo $menuser_titulo; ?>"><?php echo $menuser_titulo; ?></a></li>
                            <?php } ?>
                        </ul><!-- FIN MENU SERVICIOS --> 
                    </li>
                    <li class="hspm_item"><a <?php if($url_menu=="/eventos"){ ?> class="active" <?php } ?> href="eventos">Eventos</a></li>
                    <li class="hspm_item"><a <?php if($url_menu=="/noticias"){ ?> class="active" <?php } ?> href="noticias">Noticias</a></li>
                    <li class="hspm_item"><a <?php if($url_menu=="/contacto"){ ?> class="active" <?php } ?> href="contacto">Contactenos</a></li>
                </ul>
            </nav>
            
        </div><!-- FIN HEADER SUPERIOR MENU -->	
    
    </div><!-- FIN HEADER SUPERIOR -->
    
    <?php if($wg_slider==true){ ?>
    <div id="header_inf">
        
        <div class="wg_slide">
        	<?php while($fila_slider_superior=mysql_fetch_array($rst_slider_superior)){
				//VARIABLES
				$slidesup_titulo=$fila_slider_superior["titulo"];
				$slidesup_imagen=$fila_slider_superior["imagen"];
				$slidesup_imagen_carpeta=$fila_slider_superior["carpeta_imagen"];				
			?>
            <div><img class="borde-10" src="imagenes/slide/<?php echo $slidesup_imagen_carpeta."".$slidesup_imagen; ?>" width="940" height="300" alt="<?php echo $slidesup_titulo; ?>"></div>
            <?php } ?>
        </div><!-- FIN SLIDER -->
        
    </div><!-- FIN HEADER INFERIOR -->
    <?php } ?>

</header><!-- FIN HEADER -->