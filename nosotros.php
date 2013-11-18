<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES
$sc_home=true;

?>
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Nosotros</title>

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
							<h1>Nosotros</h1>
							<p></p>
							<!-- breadcrums -->
							<div class="g-breadcrumbs">
								<a href="index.html" class="g-breadcrumbs-item">Inicio</a>
								<span class="g-breadcrumbs-separator">&raquo;</span>
								<span class="g-breadcrumbs-item">Nosotros</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="l-submain">
					<div class="l-submain-h g-html">
					
						<div class="w-timeline">
							<div class="w-timeline-h">

								<div class="w-timeline-sections">
									<div class="w-timeline-section active animate_afr">
										<div class="w-timeline-section-h">
										
											<div class="w-timeline-section-content">
												<div class="g-cols">
													<div class="one-third">
														<p>Somos una Agencia de Marketing Deportivo con años de experiencia en el mercado, gestionando negocios, patrocinios, activaciones BTL y siendo también representantes de deportistas.</p>
													</div>
													<div class="two-thirds">
														<img src="imagenes/oficina/oficina-interior.jpg" alt="">
													</div>
												</div>
											</div>
											
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>
								
				<div class="l-submain type_colored with_arrow">
					<div class="l-submain-h g-html">

						<div class="w-mission">
							<span class="w-mission-title">Nuestra Misión</span>
							<h2>Crear permanentemente herramientas originales que ayuden a relacionar el marketing empresarial y el deporte en una sola industria, buscando principalmente la fidelización de las marcas a través del deporte.</h2>
						</div>

					</div>
				</div>

				<?php require_once("wg-clientes.php"); ?>				

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
