<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES GENERALES
$script_css=true;
$script_fonts=true;
$script_galeria_fotos=true;
$script_formulario=true;
$script_ie=true;
$script_menu_servicios=true

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<title><?php echo $web_nombre; ?></title>

<?php require_once("header-scripts.php"); ?>

</head>

<body>

<div class="interior limpiar">

    <?php require_once("header.php"); ?>
    
    <section class="limpiar">
    	
        <div id="section_sup">
        
        	<div id="sec_news">
            	
                <h2 class="news_titulo_nota">Nosotros</h2>
                
                <?php echo $web_nosotros; ?>
                
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