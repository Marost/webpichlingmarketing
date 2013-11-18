<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES
$sc_home=false;
$sc_slider=false;

//VARIABLES DE URL
$ReqID=$_REQUEST["id"];
$ReqURL=$_REQUEST["url"];

//GALERIA DE FOTOS
$rst_galeria=mysql_query("SELECT * FROM pmkt_galeria WHERE id=$ReqID ;", $conexion);
$fila_galeria=mysql_fetch_array($rst_galeria);

//VARIABLES
$galeria_titulo=$fila_galeria["titulo"];

//GALERIA SELECCIONADA
$rst_fotos=mysql_query("SELECT * FROM pmkt_galeria_slide WHERE noticia=$ReqID ORDER BY orden ASC");

?>
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>FOTOS: <?php echo $galeria_titulo; ?> | Pichling Sports Marketing</title>

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
							<h1><?php echo $galeria_titulo; ?></h1>
							<p></p>
							<!-- breadcrums -->
							<div class="g-breadcrumbs">
								<a href="/" class="g-breadcrumbs-item">Inicio</a>
								<span class="g-breadcrumbs-separator">&raquo;</span>
								<span class="g-breadcrumbs-item">Galería de Fotos</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="l-submain">
					<div class="l-submain-h g-html">

						<div class="w-gallery layout_tile size_s">
							<div class="w-gallery-h">
								<div class="w-gallery-tnails">
									<div class="w-gallery-tnails-h">
									
										<?php while($fila_fotos=mysql_fetch_array($rst_fotos)){
												$fotos_imagen=$fila_fotos["imagen"];
												$fotos_imagen_carpeta=$fila_fotos["imagen_carpeta"];

												$fotos_UrlImg140=$web."imagenes/galeria/".$fotos_imagen_carpeta."thumb140/".$fotos_imagen;
												$fotos_UrlImg=$web."imagenes/galeria/".$fotos_imagen_carpeta."".$fotos_imagen;
										?>
										<a class="w-gallery-tnail" href="<?php echo $fotos_UrlImg; ?>">
											<span class="w-gallery-tnail-h">
												<img class="w-gallery-tnail-img" src="<?php echo $fotos_UrlImg140; ?>" alt=""/>
												<span class="w-gallery-tnail-title"><i class="icon-search"></i></span>
											</span>
										</a>
										<?php } ?>

									</div>
								</div>
							</div>
						</div>
					
						<div class="hr hr_invisible">
							<span class="hr-h">
								<span class="hr-hh"></span>
							</span>
						</div>
						
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

</body>
</html>