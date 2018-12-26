<?php
	session_start();
	include("../panel@pmarketing/conexion/conexion.php");
	include("../panel@pmarketing/conexion/funciones.php");
?>
<!DOCTYPE HTML>
<html lang="es-ES">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    
    <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,500|Arvo:700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
    <!--[if lte IE 8]><style>.support-note .note-ie{display:block;}</style><![endif]-->
	<!-- Codrops top bar --><!--/ Codrops top bar -->
    
    <title>Michele & William 50 Años</title>
    <div><br/><br/></div>
			<section class="main">

				<div id="rm-container" class="rm-container">

					<div class="rm-wrapper">

						<div class="rm-cover">

							<div class="rm-front">
								<div class="rm-content">

									<div class="rm-logo"></div>
									<h2>Invitación</h2>
									<img src="images/texto_intro.png" width="200px">

									<a href="#" class="rm-button-open"><button>Abrir</button></a>

								</div><!-- /rm-content -->
							</div><!-- /rm-front -->

							<div class="rm-back">
								<div class="rm-content">
									<h4>Michele &amp; William</h4>
									<dl>
										<dt><img src="images/fondo_izquierdo.png" width="270px"></dt>
									</dl>
								</div><!-- /rm-content -->
								<div class="rm-overlay"></div>

							</div><!-- /rm-back -->

						</div><!-- /rm-cover -->

						<div class="rm-middle">
							<div class="rm-inner">
								<div class="rm-content">
									<!--<h4>Invitación</h4>
									<dl>
                                    	<dt><a href="#" class="rm-viewdetails" data-thumb="images/13.jpg">para mostrar enlace mas bonito</a></dt>
										<dt>Hola!!!</dt>
										<dd>Te invitamos a acompañarnos a celebrar nuestro cumpleaños</dd>

										<dt>Día y Hora</dt>
										<dd>Viernes 06 de Octubre, a partir de las 20:00 horas</dd>

										<dt>Dirección</dt>
										<dd>Pasaje Zinnia 151, Monterrico, Surco</dd>
										
										<dt>Dresscode</dt>
										<dd><strong>Fiesta de Blanco y Negro</strong></dd>
									</dl>-->
                                    <dt><img src="images/otro_texto_nuevo.png" width="260px"></dt>
								</div><!-- /rm-content -->
								<div class="rm-overlay"></div>
							</div><!-- /rm-inner -->
						</div><!-- /rm-middle -->

						<div class="rm-right">

							<div class="rm-front">
								
							</div>

							<div class="rm-back">
								<span class="rm-close">Cerrar</span>
								<div class="rm-content">
                                    <?php require_once("caja-inscripcion.php"); ?>
								</div><!-- /rm-content -->
                                <div class="rm-info">
                                    <p><a href="login.php" class="rm-button-open"><button>Modificar Datos</button></a></p>
                                    <p>Tenemos estacionamientos disponibles para ti en Av. Primavera 1796 - Surco</p>
                                </div>
                                <dl>
                                    <dt><img src="images/isotipo_negro.png" width="150px"></dt>
                                </dl>
							</div><!-- /rm-back -->

						</div><!-- /rm-right -->
					</div><!-- /rm-wrapper -->

				</div><!-- /rm-container -->

			</section>
			
        </div>
		<!-- jQuery if needed -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
		<script type="text/javascript">
			$(function() {

				Menu.init();
			
			});
		</script>
</html>