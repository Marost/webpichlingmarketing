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

	<title>ADFP | Almuerzo por el Día del Periodista Deportivo</title>

    <div><br/><br/></div>
			<section class="main">

				<div id="rm-container" class="rm-container">

					<div class="rm-wrapper">

						<div class="rm-cover">

							<div class="rm-front">
								<div class="rm-content">
									<img src="images/caratula2.png" width="100%"  style="margin: 150px 0px 100px 0px;">
									<a href="#" class="rm-button-open"><button>Ingresar</button></a>
                                    <strong style="font-size:12px;">Abrir con:</strong>
                                    <br />
                                    <img src="images/logos.png" width="80px">
								</div><!-- /rm-content -->
							</div><!-- /rm-front -->

							<div class="rm-back">
								<div class="rm-content">
									<dl>
										<dt><img src="images/f_izquierdo2.png" width="100%"></dt>
									</dl>
								</div><!-- /rm-content -->
								<div class="rm-overlay"></div>
							</div><!-- /rm-back -->
						</div><!-- /rm-cover -->

						<div class="rm-middle">
							<div class="rm-inner">
								<div class="rm-content">
                                	<dl>
	                                    <dt><img src="images/txt_centro2.png" width="100%"></dt>
                                    </dl>
								</div><!-- /rm-content -->
								<div class="rm-overlay"></div>
							</div><!-- /rm-inner -->
						</div><!-- /rm-middle -->

						<div class="rm-right">

							<div class="rm-front"></div>

							<div class="rm-back">
								<span class="rm-close">Cerrar</span>
								<div class="rm-content">
                                    <?php require_once("caja-inscripcion.php"); ?>
								</div>
                                <div class="rm-info">
                                    <a href="login.php"><button>Modificar Datos</button></a>
                                    <br />
                                    <!--<p>Tenemos estacionamientos disponibles para ti en Av. Primavera 1796 - Surco</p>-->
                                    <img src="images/isotipo_negro2.png" width="150px">
                                </div>
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