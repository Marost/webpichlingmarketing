<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES
$sc_home=false;
$sc_slider=false;

//NOTICIA INFERIOR
$rst_noticia=mysql_query("SELECT * FROM pmkt_noticia WHERE fecha_publicacion<='$fechaActual' AND publicar=1 ORDER BY fecha_publicacion DESC LIMIT 4;", $conexion);
?>
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Noticias</title>

	<?php require_once("wg-script-header.php"); ?>

</head>
<body class="l-body">

<div class="l-background"></div>

<!-- CANVAS -->
<div class="l-canvas type_boxed col_contside">
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
							<h1>Noticias</h1>
							<p></p>
							<!-- breadcrums -->
							<div class="g-breadcrumbs">
								<a href="/" class="g-breadcrumbs-item">Inicio</a>
								<span class="g-breadcrumbs-separator">&raquo;</span>
								<span class="g-breadcrumbs-item">Noticias</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="l-submain">
					<div class="l-submain-h g-html i-cf">
						<div class="l-content">
						<div class="l-content-h">

							<div class="w-blog date_atleft meta_all more_hidden">
								<div class="w-blog-h">
									<div class="w-blog-list">

										<?php while($fila_noticia=mysql_fetch_array($rst_noticia)){
												$noticia_id=$fila_noticia["id"];
												$noticia_url=$fila_noticia["url"];
												$noticia_titulo=$fila_noticia["titulo"];
												$noticia_contenido=primerParrafo($fila_noticia["contenido"], 150);
												$noticia_fechaGen=explode(" ", $fila_noticia["fecha_publicacion"]);
												$noticia_fechaPub=explode("-", $noticia_fechaGen[0]);

												//URLS
												$noticia_WebURL=$web."noticia/".$noticia_id."-".$noticia_url;
										?>
									
										<div class="w-blog-entry">
											<div class="w-blog-entry-h">
												<a class="w-blog-entry-link" href="<?php echo $noticia_WebURL; ?>">
													<h2 class="w-blog-entry-title">
														<span class="w-blog-entry-title-h"><?php echo $noticia_titulo; ?></span>
													</h2>
												</a>
												<div class="w-blog-entry-body">
													<div class="w-blog-entry-meta">
														<div class="w-blog-entry-meta-date">
															<i class="icon-time"></i>
															<span class="w-blog-entry-meta-date-month"><?php echo nombreMesCorto($noticia_fechaPub[1]); ?></span>
															<span class="w-blog-entry-meta-date-day"><?php echo $noticia_fechaPub[2]; ?></span>
															<span class="w-blog-entry-meta-date-year"><?php echo $noticia_fechaPub[0]; ?></span>
														</div>

													</div>

													<div class="w-blog-entry-short">
														<?php echo $noticia_contenido; ?>
													</div>

													<a class="w-blog-entry-more g-btn size_small type_color" href="blog-post.html">Leer más...</a>
												</div>
											</div>
										</div>

										<?php } ?>

									</div>
									<div class="w-blog-pagination">
										<div class="g-pagination">
											<a href="javascript:void(0);" class="g-pagination-item to_prev">Prev</a>
											<a href="javascript:void(0);" class="g-pagination-item">1</a>
											<a href="javascript:void(0);" class="g-pagination-item active">2</a>
											<a href="javascript:void(0);" class="g-pagination-item">3</a>
											<a href="javascript:void(0);" class="g-pagination-item">4</a>
											<a href="javascript:void(0);" class="g-pagination-item">5</a>
											<a href="javascript:void(0);" class="g-pagination-item to_next">Next</a>
										</div>
									</div>
								</div>
							</div>
					
						</div>
						</div>
						
						<div class="l-sidebar at_left">
							<div class="l-sidebar-h">
							
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
