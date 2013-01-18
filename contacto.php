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
            	
                <h2 class="news_titulo_nota">Conactenos</h2>
                
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
                
            	<?php require_once("widgets/wg_galeria.php"); ?>
            
            </div><!-- FIN SECTION SIDEBAR -->
        
        </div><!-- FIN SECTION SUPERIOR -->
            	
    </section><!-- FIN SECTION -->
    
    <?php require_once("footer.php"); ?>

</div><!-- FIN INTERIOR -->

</body>
</html>