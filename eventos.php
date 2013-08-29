<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES
$sc_home=false;
$sc_slider=false;

//EVENTOS
$rst_eventos=mysql_query("SELECT * FROM pmkt_evento ORDER BY fecha_publicacion DESC;", $conexion);

?>
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Eventos | Pichling Sports Marketing</title>

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
							<h1>Eventos Producidos</h1>
							<p></p>
							<!-- breadcrums -->
							<div class="g-breadcrumbs">
								<a href="/" class="g-breadcrumbs-item">Inicio</a>
								<span class="g-breadcrumbs-separator">&raquo;</span>
								<span class="g-breadcrumbs-item">Eventos</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="l-submain">
					<div class="l-submain-h g-html">

						<div class="w-portfolio columns_3 type_sortable">
							<div class="w-portfolio-h">
								<div class="w-portfolio-list">
									<div class="w-portfolio-list-h">
									
										<?php while($fila_eventos=mysql_fetch_array($rst_eventos)){
												$eventos_id=$fila_eventos["id"];
												$eventos_url=$fila_eventos["url"];
												$eventos_titulo=$fila_eventos["titulo"];
												$eventos_imagen=$fila_eventos["imagen"];
												$eventos_imagen_carpeta=$fila_eventos["imagen_carpeta"];

												//URLS
												$eventos_UrlWeb=$web."eventos/".$eventos_id."-".$eventos_url;
												$eventos_UrlImagen=$web."imagenes/eventos/".$eventos_imagen_carpeta."thumb/".$eventos_imagen;
										?>
										<div class="w-portfolio-item order_1 naming webdesign">
											<div class="w-portfolio-item-h">
												<a class="w-portfolio-item-anchor" href="<?php echo $eventos_UrlWeb; ?>">
													<div class="w-portfolio-item-image">
														<img src="<?php echo $eventos_UrlImagen; ?>" alt="<?php echo $eventos_titulo; ?>"/>
														<div class="w-portfolio-item-meta">
															<h2 class="w-portfolio-item-title"><?php echo $eventos_titulo; ?></h2>
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