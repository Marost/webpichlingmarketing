<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES
$sc_home=false;
$sc_slider=false;

//GALERIA DE F_galeria
$rst_galeria=mysql_query("SELECT * FROM pmkt_galeria ORDER BY fecha_publicacion DESC, id DESC;", $conexion);

?>
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Galería de Fotos | <?php echo $web_nombre ?></title>

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
							<h1>Galería de Fotos</h1>
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

						<div class="w-portfolio columns_4 type_sortable">
							<div class="w-portfolio-h">
								<div class="w-portfolio-list">
									<div class="w-portfolio-list-h">
									
										<?php while($fila_galeria=mysql_fetch_array($rst_galeria)){
												$galeria_id=$fila_galeria["id"];
												$galeria_url=$fila_galeria["url"];
												$galeria_titulo=$fila_galeria["titulo"];

												//SELECCIONAR IMAGEN DE GALERIA
												$rst_slide=mysql_query("SELECT * FROM pmkt_galeria_slide WHERE noticia=$galeria_id AND orden=0", $conexion);
												$fila_slide=mysql_fetch_array($rst_slide);

												$galeria_imagen=$fila_slide["imagen"];
												$galeria_imagen_carpeta=$fila_slide["imagen_carpeta"];

												//URLS
												$galeria_UrlWeb=$web."galeria/".$galeria_id."-".$galeria_url;
												$galeria_UrlImagen=$web."imagenes/galeria/".$galeria_imagen_carpeta."thumb465/".$galeria_imagen;
										?>
										<div class="w-portfolio-item order_1 naming webdesign">
											<div class="w-portfolio-item-h">
												<a class="w-portfolio-item-anchor" href="<?php echo $galeria_UrlWeb; ?>">
													<div class="w-portfolio-item-image">
														<img src="<?php echo $galeria_UrlImagen; ?>" alt="<?php echo $galeria_titulo; ?>"/>
														<div class="w-portfolio-item-meta">
															<h2 class="w-portfolio-item-title"><?php echo $galeria_titulo; ?></h2>
														</div>
													</div>
												</a>
											</div>
										</div>
										<?php } ?>

									</div>
								</div>
								
							</div>
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