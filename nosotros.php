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
	<title>Nosotros | <?php echo $web_nombre ?></title>

	<?php require_once("wg-script-header.php"); ?>

	<!-- TWITTER CARD -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@pichlingmkt">
	<meta name="twitter:creator" content="@pichlingmkt">
	<meta name="twitter:title" content="<?php echo $web_nombre." | ".$social_palabrasclave; ?>">
	<meta name="twitter:description" content="<?php echo $social_nosotros; ?>">
	<meta name="twitter:image" content="<?php echo $web."imagenes/logo.png" ?>">
	<meta name="twitter:domain" content="pichlingmarketing.com">
	<!-- FIN TWITTER CARD -->

	<!-- OPEN GRAPH -->
	<meta property="og:type" content='website' /> 
	<meta property="og:site_name" content='<?php echo $web_nombre; ?>' /> 
	<meta property="og:title" content='<?php echo $web_nombre." | ".$social_palabrasclave; ?>'/> 
	<meta property="og:description" content='<?php echo $social_nosotros; ?>'/>
	<meta property="og:url" content='<?php echo $web; ?>' /> 
	<meta property="og:image" content='<?php echo $web."imagenes/logo.png" ?>' />
	<!-- FIN OPEN GRAPH -->

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
														<p><?php echo $social_nosotros; ?></p>
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
                
            	<div class="l-submain type_colored_vision with_arrow">
					<div class="l-submain-h g-html">
                        
                        <div class="w-mission">
							<span class="w-mission-title">Nuestra Visión</span>
							<h2 style="font-size:20px;">Ser líderes referentes en la conceptualización y ejecución de negocios deportivos.</h2>
						</div>

					</div>
				</div>
								
				<div class="l-submain type_colored_mision with_arrow">
					<div class="l-submain-h g-html">

						<div class="w-mission">
							<span class="w-mission-title">Nuestra Misión</span>
							<h2 style="font-size:20px;">Potenciamos los negocios de nuestros clientes, brindándoles soluciones profesionales, creativas, innovadoras y personalizadas con el fin de que logren sus objetivos.</h2>
						</div>

					</div>
				</div>
                
				<div class="l-submain type_colored_valores with_arrow">
					<div class="l-submain-h g-html">
						<!--<div style="float: right;">-->
                            <div class="w-mission">
                                <span class="w-mission-title">Nuestros Valores</span>
                                <h2 style="font-size:18px;">
                                   * <strong>PROFESIONALISMO,</strong> buscamos la mejor alternativa a tus necesidades.<br>
                                   * <strong>CONFIANZA,</strong> somos la solución para tus problemas.<br>
                                   * <strong>HONESTIDAD,</strong> ofrecemos lo mejor a un precio justo.<br>
                                   * <strong>RESPONSABILIDAD,</strong> nuestro trabajo bien ejecutado en el tiempo oportuno.
                                </h2>
                            </div>
						<!--</div>-->
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
