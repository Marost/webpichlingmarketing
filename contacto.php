<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES GENERALES
$script_css=true;
$script_fonts=true;
$script_galeria_fotos=true;
$script_formulario=true;
$script_ie=true;
$script_menu_servicios=true;

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Pichling Sports Marketing</title>

<?php require_once("header-scripts.php"); ?>

</head>

<body>

<div class="interior limpiar">

    <?php require_once("header.php"); ?>
    
    <section class="limpiar">
    	
        <div id="section_sup">
        
        	<div id="sec_news">
            	
                <h2 class="news_titulo">Conactenos</h2>
                
                <div id="msj_enviado" class="ocultar">
                    <div class="mensaje">
                        <img src="imagenes/img-contactenos.png" width="600" height="200" alt="Contactenos">
                        <ul id="smedia_contatenos">
                            <li><a target="_blank" href="http://www.facebook.com/pages/Femip-Per%C3%BA/213709345386192" class="wgsmdcon_facebook">Facebook</a></li>
                            <li><a target="_blank" href="http://twitter.com/femip_peru" class="wgsmdcon_twitter">Twitter</a></li>
                  		</ul>
                  </div>
                </div>
                
                <form method="post" id="form_contacto">
                	        	
                  <fieldset class="sin_borde">
                      <label for="fc_asoc_nombre">Nombre y Apellidos: </label>
                        <input class="inputtext1" name="fc_nombre_apellidos" id="fc_nombre_apellidos" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_asoc_pais">Empresa: </label>
                        <input class="inputtext2" name="fc_empresa" id="fc_empresa" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                      <label for="fc_asoc_direccion">Dirección: </label>
                        <input class="inputtext1" name="fc_direccion" id="fc_direccion" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_asoc_telcasa">Teléfono: </label>
                        <input class="inputtext2" name="fc_telefono" id="fc_telefono" size="50" />
                    </fieldset>
                                          
                    <fieldset class="sin_borde">
                        <label for="fc_asoc_email">Email: </label>
                        <input class="inputtext2" name="fc_email" id="fc_email" size="50" />
                    </fieldset>
                    
                  	<fieldset class="sin_borde">
                        <label for="fc_asoc_email">Comentario: </label>
                        <textarea name="fc_comentario" id="fc_comentario" cols="10" rows="7"></textarea>
                    </fieldset>
                    
                    <fieldset class="sin_borde boton">
                        <img src="imagenes/load.gif" width="20" height="20" alt="Cargando..." class="imagen ocultar">&nbsp;
                      	<button class="fc_enviar">&nbsp;</button>&nbsp;
                        <img src="imagenes/load.gif" width="20" height="20" alt="Cargando..." class="imagen ocultar">
                    </fieldset>
                                
                </form>
                
            </div><!-- FIN SECTION NEWS -->
            
            <div id="sec_sidebar">
            	
                <aside>
                	<h3>Eventos</h3>
                    
                  <div id="evnt_titulo">
                    	<h2><a href="#">Triatlon Cross Punta Hermosa 2012</a></h2>
                    </div>
                    
                    <div id="evnt_datos">
                    	<p>Lugar: Punta Hermosa</p>
                        <p>20 de Septiembre, 2012 - 11:00 am</p>
                    </div>
                    
                </aside><!-- FIN SECTION SIDEBAR ASIDE -->
                
            	<aside>
                	<h3>Galeria de Fotos</h3>
                    
                    <div id="wg_galeria" class="svwp">
                        <ul>                            
                            <li><a href="#" title="Galería de Fotos">
                                <img width="290" height="210" src="imagenes/galeria/copa-latina.jpg" alt="Conferencia de Prensa - Copa Latina" /></a></li>
                            <li><a href="#" title="Galería de Fotos">
                                <img width="290" height="210" src="imagenes/galeria/noche-crema.jpg" alt="La Noche del Hincha Crema - Presentación Universitario de Deportes" /></a></li>
                            <li><a href="#" title="Galería de Fotos">
                                <img width="290" height="210" src="imagenes/galeria/triatlon.jpg" alt="Triatlon 2012" /></a></li>
                            <li><a href="#" title="Galería de Fotos">
                                <img width="290" height="210" src="imagenes/galeria/voley.jpg" alt="Conferencia de Prensa - Federación Peruana de Voley - UNIQUE" /></a></li>    
                            <li><a href="#" title="Galería de Fotos">
                                <img width="290" height="210" src="imagenes/galeria/zona-impacto.jpg" alt="Imagen" /></a></li>    
                        </ul>
                    </div><!-- GALERIA WEB GALERIA -->
                    
                </aside><!-- FIN SECTION SIDEBAR ASIDE -->
            
            </div><!-- FIN SECTION SIDEBAR -->
        
        </div><!-- FIN SECTION SUPERIOR -->
            	
    </section><!-- FIN SECTION -->
    
    <?php require_once("footer.php"); ?>

</div><!-- FIN INTERIOR -->

</body>
</html>