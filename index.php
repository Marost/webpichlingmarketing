<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES
$sc_home=true;
$sc_slider=true;

//NOTICIAS
$rst_noticias=mysql_query("SELECT * FROM pmkt_noticia WHERE fecha_publicacion<='$fechaActual' AND publicar=1 ORDER BY fecha_publicacion DESC LIMIT 2;", $conexion);

//EVENTOS
$rst_eventos=mysql_query("SELECT * FROM pmkt_evento WHERE fecha_publicacion<='$fechaActual' ORDER BY fecha_publicacion DESC LIMIT 4;", $conexion);

//EVENTOS IMAGENES
$rst_eventos_img=mysql_query("SELECT * FROM pmkt_evento WHERE fecha_publicacion<='$fechaActual' ORDER BY fecha_publicacion DESC LIMIT 10;", $conexion);

?>
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title><?php echo $web_nombre." | ".$social_palabrasclave; ?></title>

	<meta name="keywords" content="<?php echo $social_palabrasclave; ?>">
	<meta name="description" content="<?php echo $social_nosotros; ?>">

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

	<!-- POPUP 
	<link href="libs/popup-reveal/reveal.css" rel="stylesheet" type="text/css" media="all">
	<script src="http://code.jquery.com/jquery-1.6.min.js"></script>
	<script src="libs/popup-reveal/jquery.reveal.js"></script>
	<script>
		var jPopUp = jQuery.noConflict();
		jPopUp(document).ready(function(){
			jPopUp("#myModal").reveal({
			     animation: 'none',                   //fade, fadeAndPop, none
			     animationspeed: 300,                       //how fast animtions are
			     closeonbackgroundclick: true,              //if you click background will modal close?
			     dismissmodalclass: 'close-reveal-modal'    //the class of a button or element that will close an open modal
			});
		});
	</script>-->

	<?php require_once("wg-script-header.php"); ?>

</head>
<body class="l-body home">

<!-- CANVAS -->
<div class="l-canvas type_boxed col_cont">
	<div class="l-canvas-h">

		<!-- HEADER -->
		<?php require_once("wg-header.php"); ?>
		<!-- /HEADER -->

		<!-- MAIN -->
		<div class="l-main">
			<div class="l-main-h">

				<div class="l-submain type_grey">
					<div class="l-submain-h g-html i-cf">
						<div class="g-cols">

							<div class="one-half animate_afl">
								<div class="w-gallery type_slider">
									<div class="w-gallery-h">
										<div class="w-gallery-main nav_show">
											<div class="w-gallery-main-h flexslider flex-loading">
												<ul class="slides">
													<?php /*while($fila_eventos_img=mysql_fetch_array($rst_eventos_img)){
															$eventosFT_imagen=$fila_eventos_img["imagen"];
															$eventosFT_imagen_carpeta=$fila_eventos_img["imagen_carpeta"];

															//URL
															$eventosFT_UrlIMG=$web."imagenes/eventos/".$eventosFT_imagen_carpeta."thumb/".$eventosFT_imagen;
															*/
													?>
													<li>
														<img src="imagenes/slides/logo-psm-slide.jpg">
													</li>

													<li>
														<img src="imagenes/slides/edificio.jpg">
													</li>
													<?php //} ?>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="one-half">
								<h2 style="text-transform:uppercase;">¿Por qué es importante el Marketing Deportivo?</h2>
								<div class="hr hr_short hr_left">
									<span class="hr-h">
										<span class="hr-hh"></span>
									</span>
								</div>
								<p>Permite a las empresas una oportunidad &uacute;nica de comunicaci&oacute;n y fidelizaci&oacute;n:</p>
								<ul>
									<li>Supera las barreras culturales y del idioma.</li>
									<li>Plataforma para la confecci&oacute;n de planes estrat&eacute;gicos.</li>
									<li>Importante cobertura publicitaria.</li>
									<li>Entretiene al p&uacute;blico, conexi&oacute;n con las emociones.</li>
									<li>Mejora la recordaci&oacute;n de la marca.</li>
									<li>Multiplica contactos con consumidores.</li>
								</ul>

								<div class="hr hr_short hr_left">
									<span class="hr-h">
										<span class="hr-hh"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="l-submain with_shadow">
					<div class="l-submain-h g-html">
					
						<h1 style="text-align: center;">Últimos Eventos Producidos</h1>
						<p style="text-align: center;">En <strong>Pichling Sports Marketing</strong> desarrollamos TÚ evento</p>
						
						<div class="hr hr_short">
							<span class="hr-h">
								<span class="hr-hh"></span>
							</span>
						</div>
					
						<div class="w-portfolio columns_4">
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
											<div class="w-portfolio-item-h animate_wfc">
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
						
						<div class="hr hr_short">
							<span class="hr-h">
								<span class="hr-hh"></span>
							</span>
						</div>
						
						<p style="text-align: center;"><a class="g-btn type_color" href="eventos">Eventos Producidos</a></p>
					
					</div>
				</div>				
								
				<div class="l-submain">
					<div class="l-submain-h g-html i-cf">
					
						<h3>Últimas Noticias</h3>
						
						<div class="w-shortblog columns_2 date_atleft">
							<div class="w-shortblog-h">
																
								<div class="w-shortblog-list">

									<?php while($fila_noticias=mysql_fetch_array($rst_noticias)){
										$noticias_id=$fila_noticias["id"];
										$noticias_url=$fila_noticias["url"];
										$noticias_titulo=$fila_noticias["titulo"];
										$noticias_contenido=primerParrafo($fila_noticias["contenido"]);
										$noticias_fechaGen=explode(" ", $fila_noticias["fecha_publicacion"]);
										$noticias_fechaPub=explode("-", $noticias_fechaGen[0]);

										//URL
										$noticias_UrlWeb=$web."noticia/".$noticias_id."-".$noticias_url;
									?>
									<div class="w-shortblog-entry">
										<div class="w-shortblog-entry-h">
											<a class="w-shortblog-entry-link" href="<?php echo $noticias_UrlWeb; ?>">
												<h4 class="w-shortblog-entry-title">
													<span class="w-shortblog-entry-title-h"><?php echo $noticias_titulo; ?></span>
												</h4>
											</a>
											<div class="w-shortblog-entry-meta">
												<div class="w-shortblog-entry-meta-date">
													<span class="w-shortblog-entry-meta-date-month"><?php echo nombreMesCorto($noticias_fechaPub[1]); ?></span>
													<span class="w-shortblog-entry-meta-date-day"><?php echo $noticias_fechaPub[2]; ?></span>
													<span class="w-shortblog-entry-meta-date-year"><?php echo $noticias_fechaPub[0]; ?></span>
												</div>
											</div>
											<div class="w-shortblog-entry-short">
											<p><?php echo $noticias_contenido; ?></p>
											</div>
										</div>
									</div>
									<?php } ?>
									
								</div>
							</div>
						</div>
						
						<div class="hr">
							<span class="hr-h">
								<span class="hr-hh"></span>
							</span>
						</div>
						
						<?php require_once("wg-clientes.php"); ?>
						
					</div>
				</div>
				
				<div class="l-submain type_colored with_arrow">
					<div class="l-submain-h g-html">

						<div class="w-actionbox controls_aside">
							<div class="w-actionbox-h">
								<div class="w-actionbox-text">
									<h2>El Deporte está ligado a las emociones mas fieles, apasionadas y reconfortantes de las personas… es justamente ahí donde tiene que estar presente TÚ marca.</h2>
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

<!--
<div id="myModal" data-reveal-id="myModal" data-animation="none" class="reveal-modal">
	<img src="imagenes/navidad-2013.jpg" alt="">
	<a class="close-reveal-modal">&#215;</a>
</div>
-->

</body>
</html>