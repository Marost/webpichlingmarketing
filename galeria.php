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
$script_galleria=true;

//VARIABLES URL
$id_galeria=$_REQUEST["id"];
$url_galeria=$_REQUEST["url"];
$url_web=$web."galeria/".$id_galeria."-".$url_galeria;

//GALERIA
$rst_galeria=mysql_query("SELECT * FROM pmkt_galeria WHERE id=$id_galeria AND url='$url_galeria' ORDER BY id DESC;", $conexion);
$fila_galeria=mysql_fetch_array($rst_galeria);

//VARIABLES GALERIA
$galeria_titulo=$fila_galeria["titulo"];
$galeria_contenido=$fila_galeria["contenido"];

//GALERIA SLIDE
$rst_galeria_slide=mysql_query("SELECT * FROM pmkt_galeria_slide WHERE noticia=$id_galeria ORDER BY orden ASC;", $conexion);

//FOTO FACEBOOK
$rst_galslide_fb=mysql_query("SELECT * FROM pmkt_galeria_slide WHERE noticia=$id_galeria AND orden=0;", $conexion);
$fila_galslide_fb=mysql_fetch_array($rst_galslide_fb);
$galslide_fb_imagen=$fila_galslide_fb["imagen"];
$galslide_fb_imagen_carpeta=$fila_galslide_fb["carpeta"];

//NUESTRAS GALERIAS
$rst_galerias=mysql_query("SELECT * FROM pmkt_galeria WHERE id<>$id_galeria ORDER BY id DESC;", $conexion);

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<title><?php echo $galeria_titulo; ?></title>
<base href="<?php echo $web; ?>">
<link rel="image_src" href="<?php echo $web."imagenes/galeria/".$galslide_fb_imagen_carpeta."".$galslide_fb_imagen; ?>" >
<?php require_once("header-scripts.php"); ?>

</head>

<body>

<div class="interior limpiar">

    <?php require_once("header.php"); ?>
    
    <section class="limpiar">
    	
        <div id="section_sup">
        
        	<div id="sec_news" class="ancho940">
            	
                <h2 class="news_titulo_nota"><?php echo $galeria_titulo; ?></h2>
                
                <?php echo $galeria_contenido; ?>
                
                <div id="galleria">
					<?php while($fila_galeria_slide=mysql_fetch_array($rst_galeria_slide)){
                        
                        //VARIABLES
                        $galeriasl_imagen=$fila_galeria_slide["imagen"];
                        $galeriasl_imagen_carpeta=$fila_galeria_slide["carpeta"];
                    ?>
                    <a href="imagenes/galeria/<?php echo $galeriasl_imagen_carpeta."".$galeriasl_imagen; ?>">
                        <img
                             src="imagenes/galeria/<?php echo $galeriasl_imagen_carpeta."thumb/".$galeriasl_imagen; ?>"
                             data-title="<?php echo $galeria_titulo; ?>">
                    </a>
                    <?php } ?>
                </div><!-- FIN GALLERIA -->
                
                <div id="snw_social">
                    	
                        <div class="snws_twitter">
                            <a href="https://twitter.com/share" class="twitter-share-button" data-text="Estoy viendo las fotos: <?php echo $galeria_titulo; ?>" data-via="pichlingmkt" data-lang="es">Twittear</a>

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
                        
                    </div><!-- FIN SOCIAL -->
                    
                <div id="sec_galerias">
                	
                    <h3 class="news_titulo_nota">Nuestras Galerias de Fotos</h3>
                    
                    <?php while($fila_galerias=mysql_fetch_array($rst_galerias)){
						//VARIABLES
						$galerias_id=$fila_galerias["id"];
						$galerias_url=$fila_galerias["url"];
						$galerias_titulo=$fila_galerias["titulo"];
						$galerias_contenido=$fila_galerias["contenido"];
						
						//FOTO GALERIAS
						$rst_galerias_foto=mysql_query("SELECT * FROM pmkt_galeria_slide WHERE noticia=$galerias_id AND orden=0;", $conexion);
						$fila_galerias_foto=mysql_fetch_array($rst_galerias_foto);
						
						//VARIABLES
						$galerias_imagen=$fila_galerias_foto["imagen"];
						$galerias_imagen_carpeta=$fila_galerias_foto["carpeta"];
					?>
                    <article>
                    	
                        <div class="sglart_imagen">
                        	<a href="galeria/<?php echo $galerias_id."-".$galerias_url;  ?>">
                            <img src="imagenes/galeria/<?php echo $galerias_imagen_carpeta."thumb/".$galerias_imagen; ?>" width="150">
                            </a>
                        </div>
                        <div class="sglart_contenido">
                        	<h4><a href="galeria/<?php echo $galerias_id."-".$galerias_url;  ?>">
								<?php echo $galerias_titulo; ?></a></h4>
                            <?php echo $galerias_contenido; ?>
                        </div>
                        
                    </article>
                    <?php } ?>
                    
                </div>    
                
            </div><!-- FIN SECTION NEWS -->
                    
        </div><!-- FIN SECTION SUPERIOR -->
            	
    </section><!-- FIN SECTION -->
    
    <?php require_once("footer.php"); ?>

</div><!-- FIN INTERIOR -->

</body>
</html>