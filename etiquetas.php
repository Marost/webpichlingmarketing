<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES
$sc_home=false;
$sc_slider=false;

//VARIABLES DE URL
$Req_ID=$_REQUEST["id"];
$Req_URL=$_REQUEST["url"];

//URL
$url_web=$web."tags/"-$Req_ID."-".$Req_URL;

//TAGS
$rst_notags=mysql_query("SELECT * FROM pmkt_noticia_tags WHERE id=$Req_ID", $conexion);
$fila_notags=mysql_fetch_array($rst_notags);

//VARIABLES
$notTags_titulo=$fila_notags["nombre"];

//PAGINACION
require("libs/pagination/class_pagination.php");

//INICIO DE PAGINACION
$page = (isset($_GET['page'])) ? intval($_GET['page']) : 1;
$rst_noticia        = mysql_query("SELECT COUNT(*) as count FROM pmkt_noticia WHERE tags LIKE '%,$Req_ID,%' AND publicar=1 AND fecha_publicacion<='$fechaActual' ORDER BY fecha_publicacion DESC, id DESC", $conexion);
$fila_noticia       = mysql_fetch_assoc($rst_noticia);
$generated      = intval($fila_noticia['count']);
$pagination     = new Pagination("4", $generated, $page, $url_web."?page", 1, 0);
$start          = $pagination->prePagination();
$rst_noticia        = mysql_query("SELECT * FROM pmkt_noticia WHERE tags LIKE '%,$Req_ID,%' AND publicar=1 AND fecha_publicacion<='$fechaActual' ORDER BY fecha_publicacion DESC, id DESC LIMIT $start, 4", $conexion);

?>
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title><?php echo $notTags_titulo; ?> | <?php echo $web_nombre ?></title>

	<?php require_once("wg-script-header.php"); ?>

	<!-- PAGINACION -->
    <link rel="stylesheet" href="/libs/pagination/pagination.css" media="screen">

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
							<h1>Noticias de <?php echo $notTags_titulo; ?></h1>
							<p></p>
							<!-- breadcrums -->
							<div class="g-breadcrumbs">
								<a href="/" class="g-breadcrumbs-item">Inicio</a>
								<span class="g-breadcrumbs-separator">&raquo;</span>
								<span class="g-breadcrumbs-item"><?php echo $notTags_titulo; ?></span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="l-submain">
					<div class="l-submain-h g-html i-cf">
						<div class="l-content" style="width:100%">
						<div class="l-content-h">

							<div class="w-blog imgpos_atleft meta_tagscomments">
								<div class="w-blog-h">
									<div class="w-blog-list">

										<?php while($fila_noticia=mysql_fetch_array($rst_noticia)){
												$noticia_id=$fila_noticia["id"];
												$noticia_url=$fila_noticia["url"];
												$noticia_titulo=$fila_noticia["titulo"];
												$noticia_contenido=primerParrafo($fila_noticia["contenido"], 150);
												$noticia_imagen=$fila_noticia["imagen"];
												$noticia_imagen_carpeta=$fila_noticia["imagen_carpeta"];

												//FECHA
												$noticia_fechaGen=explode(" ", $fila_noticia["fecha_publicacion"]);
												$noticia_fechaPub=explode("-", $noticia_fechaGen[0]);

												//URLS
												$noticia_WebURL=$web."noticia/".$noticia_id."-".$noticia_url;
												$noticia_WebURLImg=$web."imagenes/upload/".$noticia_imagen_carpeta."".$noticia_imagen;
										?>
										<div class="w-blog-entry">
											<div class="w-blog-entry-h">
												<a class="w-blog-entry-link" href="<?php echo $noticia_WebURL; ?>">
													<span class="w-blog-entry-img animate_afc">
														<img class="w-blog-entry-img-h" src="<?php echo $noticia_WebURLImg; ?>" alt="">
													</span>

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

													<a class="w-blog-entry-more g-btn size_small type_color" href="<?php echo $noticia_WebURL; ?>">Seguir leyendo...</a>
												</div>
											</div>
										</div>

										<?php } ?>

									</div>

									<div class="w-blog-pagination">
										<div class="g-pagination">
											<?php $pagination->pagination(); ?>
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
