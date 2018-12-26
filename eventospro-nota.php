<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES
$sc_slnota=true;

//VARIABLES DE URL
$ReqID=$_REQUEST["id"];
$ReqURL=$_REQUEST["url"];

//NOTICIA INFERIOR
$rst_noticia=mysql_query("SELECT * FROM pmkt_evento_proximos WHERE id=$ReqID;", $conexion);
$fila_noticia=mysql_fetch_array($rst_noticia);

//VARIABLES
$noticia_titulo=$fila_noticia["titulo"];
$noticia_contenido=$fila_noticia["contenido"];
$noticia_imagen=$fila_noticia["imagen"];
$noticia_imagen_carpeta=$fila_noticia["imagen_carpeta"];
$noticia_cliente=$fila_noticia["ev_cliente"];
$noticia_lugar=$fila_noticia["ev_lugar"];
$noticia_fecha=$fila_noticia["ev_fecha"];

//URL
$noticia_UrlImagen=$web."imagenes/eventos/".$noticia_imagen_carpeta."".$noticia_imagen;

//EVENTOS
$rst_eventos=mysql_query("SELECT * FROM pmkt_evento_proximos WHERE id<>$ReqID AND fecha_publicacion<='$fechaActual' ORDER BY rand() LIMIT 4;", $conexion);

?>
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title><?php echo $noticia_titulo; ?> | <?php echo $web_nombre ?></title>

	<?php require_once("wg-script-header.php"); ?>
	
</head>
<body class="l-body">

<div class="l-background"></div>

<!-- CANVAS -->
<div class="l-canvas type_boxed col_cont">
	<div class="l-canvas-h">

		<!-- HEADER -->
		<?php require_once("wg-header.php"); ?>
		<!-- /HEADER -->

		<!-- MAIN -->
		<div class="l-main">
			<div class="l-main-h">

				<div class="l-submain for_pagehead">
					<div class="l-submain-h g-html i-cf">
						<div class="w-pagehead">
							<h1><?php echo $noticia_titulo; ?></h1>
						</div>
					</div>
				</div>
				
				<div class="l-submain">
					<div class="l-submain-h g-html">
					
						<div class="w-gallery type_slider">
							<div class="w-gallery-h">
								<div class="w-gallery-main nav_show">
									<div class="w-gallery-main-h flexslider flex-loading">
										<ul class="slides">
											<li>
												<img src="<?php echo $noticia_UrlImagen; ?>" alt="">
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
						<div class="g-cols">
							<div class="two-thirds">
								<h3>Descripción</h3>
								<?php echo $noticia_contenido; ?>
							</div>
							<div class="one-third">
								<h3>Detalles</h3>
								<div class="w-info">
								
									<div class="w-info-item">
										<h4 class="w-info-item-title">Contratante:</h4>
										<span class="w-info-item-content"><?php echo $noticia_cliente; ?></span>
									</div>
									
									<div class="w-info-item">
										<h4 class="w-info-item-title">Escenario:</h4>
										<span class="w-info-item-content"><?php echo $noticia_lugar; ?></span>
									</div>

									<div class="w-info-item">
										<h4 class="w-info-item-title">Fecha:</h4>
										<span class="w-info-item-content"><?php echo $noticia_fecha; ?></span>
									</div>
									
								</div>

							</div>
						</div>
						
						<div class="hr hr_invisible"></div>
				
					</div>
				</div>
				
			</div>
		</div>
		<!-- /MAIN -->

	</div>
</div>
<!-- /CANVAS -->

<!-- FOOTER -->
<?php require_once("wg-footer.php"); ?>
<!-- /FOOTER -->

<?php require_once("wg-script-footer.php"); ?>

<script>
var JqSlNot = jQuery.noConflict();
JqSlNot(document).ready(function() {
	JqSlNot('.flexslider').flexslider({
		controlNav: false,
		smoothHeight: true,
		start: function() {
			slider.removeClass('flex-loading');
		}
	});
});
</script>

<!-- AddThis Smart Layers BEGIN -->
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-520a92604c643807"></script>
<script type="text/javascript">
  addthis.layers({
    'theme' : 'transparent',
    'share' : {
      'position' : 'left',
      'numPreferredServices' : 5
    }, 
    'follow' : {
      'services' : [
        {'service': 'facebook', 'id': 'pichlingmarketing'},
        {'service': 'twitter', 'id': 'pichlingmkt'},
        {'service': 'youtube', 'id': 'pichlingmarketing'}
      ]
    }   
  });
</script>
<!-- AddThis Smart Layers END -->

</body>
</html>
