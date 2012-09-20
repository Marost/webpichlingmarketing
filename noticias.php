<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES GENERALES
$script_css=true;
$script_fonts=true;
$script_galeria_fotos=true;
$script_ie=true;
$script_menu_servicios=true;

//NOTICIAS
$rst_noticias=mysql_query("SELECT * FROM pmkt_noticia WHERE id>0 ORDER BY fecha_publicacion DESC;", $conexion);

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Noticias</title>

<?php require_once("header-scripts.php"); ?>

</head>

<body>

<div class="interior limpiar">

    <?php require_once("header.php"); ?>
    
    <section class="limpiar">
    	
        <div id="section_sup">
        
        	<div id="sec_news">
            	
                <div id="snews_notprin">
                	
                    <div id="snwnp_cabecera"> Noticias</div>
                    
                    <div id="snwnp_noticias">
                    	
                        <?php while($fila_noticias=mysql_fetch_array($rst_noticias)){
							
							//VARIABLES DE NOTICIA
							$noticia_id=$fila_noticias["id"];
							$noticia_url=$fila_noticias["url"];
							$noticia_titulo=$fila_noticias["titulo"];
							$noticia_contenido=$fila_noticias["contenido"];
							$noticia_imagen=$fila_noticias["imagen"];
							$noticia_imagen_carpeta=$fila_noticias["carpeta_imagen"];
						?>
                        <article>
                        	<div class="art_imagen">
                            	<img src="imagenes/upload/<?php echo $noticia_imagen_carpeta."thumb/".$noticia_imagen; ?>" alt="<?php echo $noticia_titulo; ?>" >
                            </div>
                            <div class="art_contenido">
                            	<h2><a href="noticia/<?php echo $noticia_id."-".$noticia_url; ?>">
									<?php echo $noticia_titulo; ?></a></h2>
                                <?php echo primerParrafo($noticia_contenido)."</p>" ?>
                            </div>
                        </article>
                        <?php } ?>
                                               
                    </div>
                    
                </div><!-- FIN SECTION NOTICIAS PRINCIPAL -->
                                
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