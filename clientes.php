<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES
$sc_home=false;
$sc_slider=false;

//clientes DE F_clientes
$rst_clientes=mysql_query("SELECT * FROM pmkt_clientes ORDER BY titulo ASC;", $conexion);

?>
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Nuestros Clientes | <?php echo $web_nombre ?></title>

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
							<h1>Nuestros Clientes</h1>
							<p></p>
							<!-- breadcrums -->
							<div class="g-breadcrumbs">
								<a href="/" class="g-breadcrumbs-item">Inicio</a>
								<span class="g-breadcrumbs-separator">&raquo;</span>
								<span class="g-breadcrumbs-item">Nuestros Clientes</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="l-submain">
					<div class="l-submain-h g-html">

                        <div class="w-clients type_carousel columns_5">
                            <div class="w-clients-h">
                                <div class="w-clients-list">
                                    <div class="w-clients-list-h">

										<?php while($fila_clientes=mysql_fetch_array($rst_clientes)){
												$clientes_id=$fila_clientes["id"];
												$clientes_titulo=$fila_clientes["titulo"];
												$clientes_imagen=$fila_clientes["imagen"];

												//URLS
												$clientes_UrlImagen=$web."imagenes/clientes/".$clientes_imagen;
										?>
										<a class="w-clients-item w-portfolio-item" style="margin:5px;">
											<img src="<?php echo $clientes_UrlImagen; ?>" alt="<?php echo $clientes_titulo; ?>"/>
										</a>
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