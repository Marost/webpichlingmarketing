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

//NOTICIA REQUEST
$id_noticia=$_REQUEST["id"];
$url_noticia=$_REQUEST["url"];

//NOTICIA
$rst_noticia=mysql_query("SELECT * FROM pmkt_noticia WHERE id=$id_noticia", $conexion);
$fila_noticia=mysql_fetch_array($rst_noticia);

//NOTICIA VARIABLES
$noticia_url=$fila_noticia["url"];
$noticia_titulo=$fila_noticia["titulo"];
$noticia_contenido=$fila_noticia["contenido"];
$noticia_imagen=$fila_noticia["imagen"];
$noticia_imagen_carpeta=$fila_noticia["carpeta_imagen"];
$noticia_imagen_mostrar=$fila_noticia["mostrar_imagen"];
$noticia_video=$fila_noticia["video"];
$noticia_video_carpeta=$fila_noticia["carpeta_video"];
$noticia_video_tipo=$fila_noticia["tipo_video"];
$noticia_video_mostrar=$fila_noticia["mostrar_video"];

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<title><?php echo $noticia_titulo; ?></title>
<base href="<?php echo $web; ?>">
<link rel="image_src" href="<?php echo $web."imagenes/upload/".$noticia_imagen_carpeta."".$noticia_imagen; ?>" >
<?php require_once("header-scripts.php"); ?>

</head>

<body>

<div class="interior limpiar">

    <?php require_once("header.php"); ?>
    
    <section class="limpiar">
    	
        <div id="section_sup">
        
        	<div id="sec_news">
            	
                <h2 class="news_titulo_nota"><?php echo $noticia_titulo; ?></h2>
                
                <?php if($noticia_imagen_mostrar==1){ ?>
                	<div id="snw_player">
                    	<img src="imagenes/upload/<?php echo $noticia_imagen_carpeta."".$noticia_imagen; ?>" alt="<?php echo $noticia_titulo; ?>">
                    </div>
                <?php }elseif($noticia_video_mostrar==1){ ?>
                	<div id="snw_player"></div>
                <?php } ?>
                	
                    <div id="snw_social">
                    	
                        <div class="snws_twitter">
                            <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $web."noticia/".$id_noticia."-".$url_noticia; ?>" data-text="<?php echo $noticia_titulo; ?>" data-via="pichlingmkt" data-lang="es">Twittear</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                        
                        <div class="snws_google">
                        	
                        	<g:plusone href="<?php echo $web."noticia/".$id_noticia."-".$url_noticia; ?>"></g:plusone>
							<script type="text/javascript">
							  window.___gcfg = {lang: 'es-419'};
							
							  (function() {
								var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
								po.src = 'https://apis.google.com/js/plusone.js';
								var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
							  })();
							</script>
                        	
                        </div>
                        
                        <div class="snws_facebook">
                        	
                            <div id="fb-root"></div>
							<script>(function(d, s, id) {
                              var js, fjs = d.getElementsByTagName(s)[0];
                              if (d.getElementById(id)) return;
                              js = d.createElement(s); js.id = id;
                              js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=217179171676130";
                              fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                            
                            <div class="fb-like" data-href="<?php echo $web."noticia/".$id_noticia."-".$url_noticia; ?>" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false"></div>
                            
                        </div>
                        
                    </div>
                <div id="scnw_contenido">
                	<?php echo $noticia_contenido; ?>
                </div>
                
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