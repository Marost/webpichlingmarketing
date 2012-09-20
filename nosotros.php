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
            	
                <h2 class="news_titulo">Nosotros</h2>
                
                <p>PICHLING SPORTS MARKETING es reconocida actualmente como la agencia líder en marketing deportivo dentro del mercado nacional. Es una empresa con una amplia experiencia en organización de eventos y torneos deportivos que crea mediante herramientas innovadoras, alianza estratégicas con patrocinadores y deportistas.
</p>

<p>Crea estrategias de fidelización, mantenimiento, posicionamiento de marcas, con el fin de reconocer y sembrar una pasión relacionada entre el producto y deporte.</p>

<h2 class="news_titulo">Visión</h2>
<p>Ser la empresa líder  e innovadora en el desarrollo de estrategias e implementaciones en marketing deportivo.</p>

<h2 class="news_titulo">Misión</h2>
<p>Crear permanentemente  herramientas originales que ayuden a relacionar el marketing empresarial y el deporte en una sola industria, buscando principalmente la fidelización de las marcas a través del deporte.</p>
                
                
                
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