<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES
$sc_home=false;
$sc_slider=false;

//VARIABLES DE URL
$ReqID=$_REQUEST["id"];
$ReqURL=$_REQUEST["url"];

//SERVICIO
$rst_noticia=mysql_query("SELECT * FROM pmkt_servicios WHERE url='$ReqURL';", $conexion);
$fila_noticia=mysql_fetch_array($rst_noticia);

//VARIABLES
$noticia_titulo=$fila_noticia["titulo"];
$noticia_contenido=$fila_noticia["contenido"];

$noticia_fechapub=$fila_noticia["fecha_publicacion"];
$noticia_fechaGen=explode(" ", $noticia_fechapub);
$noticia_fechaPub=explode("-", $noticia_fechaGen[0]);

//SERVICIOS
$rst_servicios=mysql_query("SELECT * FROM pmkt_servicios;", $conexion);

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php echo $noticia_titulo; ?> | <?php echo $web_nombre ?></title>

	<?php require_once("wg-script-header.php"); ?>
	
</head>
<body class="l-body">

<div class="l-background"></div>

<!-- CANVAS -->
<div class="l-canvas type_boxed col_sidecont">
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
							<!-- breadcrums -->
							<div class="g-breadcrumbs">
								<a href="/" class="g-breadcrumbs-item">Inicio</a>
								<span class="g-breadcrumbs-separator">&raquo;</span>
								<span class="g-breadcrumbs-item">Servicios</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="l-submain">
					<div class="l-submain-h g-html i-cf">
						<div class="l-content">
						<div class="l-content-h">

							<?php echo $noticia_contenido; ?>

						</div>
						</div>
						
						<div class="l-sidebar at_left">
							<div class="l-sidebar-h">

								<div class="widget">
									<h4>Servicios</h4>
									
									<nav class="w-nav">
										<div class="w-nav-h">
											<div class="w-nav-list layout_ver level_1">
												<div class="w-nav-list-h">

													<?php while($fila_servicios=mysql_fetch_array($rst_servicios)){
															$servicios_id=$fila_servicios["id"];
															$servicios_url=$fila_servicios["url"];
															$servicios_titulo=$fila_servicios["titulo"];

															//URL
															$servicios_UrlWeb=$web."servicios/".$servicios_url;
													?>
													<div class="w-nav-item level_1 <?php if($servicios_url==$ReqURL){ echo "active"; } ?>">
														<div class="w-nav-item-h">
															<a href="<?php echo $servicios_UrlWeb; ?>" class="w-nav-anchor level_1">
																<span class="w-nav-title"><?php echo $servicios_titulo; ?></span>
															</a>
														</div>
													</div>
													<?php } ?>													

												</div>
											</div>
										</div>
									</nav>
									
								</div>
							
							</div>
						</div>		
						
						<div class="l-sidebar at_right">
							<div class="l-sidebar-h">
							
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
