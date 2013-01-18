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
$rst_noticias=mysql_query("SELECT * FROM pmkt_evento WHERE id>0 ORDER BY fecha_publicacion DESC;", $conexion);

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Eventos</title>

<?php require_once("header-scripts.php"); ?>

</head>

<body>

<div class="interior limpiar">

    <?php require_once("header.php"); ?>
    
    <section class="limpiar">
    	
        <div id="section_sup">
        
        	<div id="sec_news">
            	
                <div id="snews_notprin">
                	
                    <div id="snwnp_cabecera">Eventos</div>
                    
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
                            	<img src="imagenes/upload/<?php echo $noticia_imagen_carpeta."".$noticia_imagen; ?>" alt="<?php echo $noticia_titulo; ?>" width="150" >
                          </div>
                            <div class="art_contenido">
                            	<h2><a href="evento/<?php echo $noticia_url; ?>">
									<?php echo $noticia_titulo; ?></a></h2>
                                <?php echo primerParrafo($noticia_contenido)."</p>" ?>
                            </div>
                        </article>
                        <?php } ?>
                                               
                    </div>
                    
                </div><!-- FIN SECTION NOTICIAS PRINCIPAL -->
                                
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