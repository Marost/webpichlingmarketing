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

                <h2 class="news_titulo_nota">Ubicanos</h2>
                
                <div id="mapa">
                    
                    <iframe width="620" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com.pe/maps/ms?msa=0&amp;msid=217338416310728973847.0004c1d8fdb4ead94c443&amp;ie=UTF8&amp;t=m&amp;z=17&amp;output=embed"></iframe>

                    <div>
                        <ul>
                            <li>
                                <span class="icon icon-home"></span>
                                <p>Av. Primavera 1796 - Torre Alpha Of. 701 - Surco</p>
                            </li>

                            <li>
                                <span class="icon icon-phone"></span>
                                <p>(511) 344-2459</p>
                            </li>

                            <li>
                                <span class="icon icon-email"></span>
                                <p>contacto@pichlingmarketing.com</p>
                            </li>
                        </ul>
                    </div>

                </div>
            	
                <h2 class="news_titulo_nota">Contactenos</h2>
                
                <div id="msj_enviado" class="ocultar">
                    <div class="mensaje">
                        <img src="imagenes/img-contactenos.png" width="600" height="200" alt="Contactenos">
                        <ul id="smedia_contatenos">
                            <li><a target="_blank" href="http://www.facebook.com/pichlingmarketing" class="wgsmdcon_facebook">Facebook</a></li>
                            <li><a target="_blank" href="http://twitter.com/pichlingmkt" class="wgsmdcon_twitter">Twitter</a></li>
                  		</ul>
                  </div>
                </div>
                
                <form method="post" id="form_contacto">
                	        	
                  <fieldset class="sin_borde">
                      <label for="fc_nombre_apellidos">Nombre y Apellidos: </label>
                        <input class="inputtext1" name="fc_nombre_apellidos" id="fc_nombre_apellidos" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_empresa">Empresa: </label>
                        <input class="inputtext2" name="fc_empresa" id="fc_empresa" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                      <label for="fc_direccion">Dirección: </label>
                        <input class="inputtext1" name="fc_direccion" id="fc_direccion" size="50" />
                    </fieldset>
                    
                    <fieldset class="sin_borde">
                        <label for="fc_telefono">Teléfono: </label>
                        <input class="inputtext2" name="fc_telefono" id="fc_telefono" size="50" />
                    </fieldset>
                                          
                    <fieldset class="sin_borde">
                        <label for="fc_email">Email: </label>
                        <input class="inputtext2" name="fc_email" id="fc_email" size="50" />
                    </fieldset>
                    
                  	<fieldset class="sin_borde">
                        <label for="fc_comentario">Comentario: </label>
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
            	
                <?php require_once("widgets/wg_eventos.php"); ?>
            
            </div><!-- FIN SECTION SIDEBAR -->
        
        </div><!-- FIN SECTION SUPERIOR -->
            	
    </section><!-- FIN SECTION -->
    
    <?php require_once("footer.php"); ?>

</div><!-- FIN INTERIOR -->

</body>
</html>