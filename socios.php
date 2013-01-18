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

//NOTICIA
$rst_socios=mysql_query("SELECT * FROM pmkt_socios ORDER BY orden ASC;", $conexion);
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Socios</title>
<base href="<?php echo $web; ?>">
<?php require_once("header-scripts.php"); ?>

</head>

<body>

<div class="interior limpiar">

    <?php require_once("header.php"); ?>
    
    <section class="limpiar">
    	
        <div id="section_sup">
        
        	<div id="sec_news">
            	
                <h2 class="news_titulo_nota">Socios Estratégicos</h2>
                
                <div id="socios_contenido">
                	
                    <?php while($fila_socios=mysql_fetch_array($rst_socios)){
						//VARIABLES
						$socio_titulo=$fila_socios["titulo"];
						$socio_imagen=$fila_socios["imagen"];
						$socio_imagen_carpeta=$fila_socios["carpeta_imagen"];
					?>
                    <div class="soccnt_logo">
                    	<table>
                            <tr>
	                            <td><img src="imagenes/socios/<?php echo $socio_imagen_carpeta."".$socio_imagen; ?>" alt="<?php echo $socio_titulo; ?>" ></td>
                            </tr>
                        </table>
                    </div>
                    <?php } ?>
                    
                </div><!-- FIN SOCIOS CONTENIDO -->
                
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