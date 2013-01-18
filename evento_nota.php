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
$url_noticia=$_REQUEST["url"];
$url_web=$web."evento/".$url_noticia;

//NOTICIA
$rst_noticia=mysql_query("SELECT * FROM pmkt_evento WHERE url='$url_noticia'", $conexion);
$fila_noticia=mysql_fetch_array($rst_noticia);

//NOTICIA VARIABLES
$noticia_titulo=$fila_noticia["titulo"];
$noticia_contenido=$fila_noticia["contenido"];
$noticia_imagen=$fila_noticia["imagen"];
$noticia_imagen_carpeta=$fila_noticia["carpeta_imagen"];
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
                
                	<div id="snw_player">
                    	<img src="imagenes/upload/<?php echo $noticia_imagen_carpeta."".$noticia_imagen; ?>" alt="<?php echo $noticia_titulo; ?>">
                    </div>
                	
                    <div id="snw_social">
                    	
                        <div class="snws_twitter">
                            <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $url_web; ?>" data-text="<?php echo $noticia_titulo; ?>" data-via="pichlingmkt" data-lang="es">Twittear</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                        
                        <div class="snws_google">
                        	
                        	<g:plusone href="<?php echo $url_web; ?>"></g:plusone>
							<script type="text/javascript">
							  window.___gcfg = {lang: 'es-419'};
							
							  (function() {
								var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
								po.src = 'https://apis.google.com/js/plusone.js';
								var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
							  })();
							</script>
                        	
                        </div>
                        
                        <div class="snws_pinterest">
                        	
                            <a href="http://pinterest.com/pin/create/button/?url=<?php echo $url_web; ?>&media=<?php echo $web."imagenes/upload/".$noticia_imagen_carpeta."".$noticia_imagen; ?>&description=<?php echo $noticia_titulo; ?>" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>
                            <script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
                            
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
                            
                            <div class="fb-like" data-href="<?php echo $url_web; ?>" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false"></div>
                            
                        </div>
                        
                    </div>
                <div id="scnw_contenido">
                	<?php echo $noticia_contenido; ?>
                </div>
                
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