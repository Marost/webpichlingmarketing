<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES
$sc_home=false;
$sc_slider=false;

//URL
$url_web=$web."noticias";

//PAGINACION
require("libs/pagination/class_pagination.php");

//INICIO DE PAGINACION
$page = (isset($_GET['page'])) ? intval($_GET['page']) : 1;
$rst_noticia        = mysql_query("SELECT COUNT(*) as count FROM pmkt_noticia WHERE fecha_publicacion<='$fechaActual' AND publicar=1 ORDER BY fecha_publicacion DESC, id DESC", $conexion);
$fila_noticia       = mysql_fetch_assoc($rst_noticia);
$generated      = intval($fila_noticia['count']);
$pagination     = new Pagination("4", $generated, $page, $url_web."?page", 1, 0);
$start          = $pagination->prePagination();
$rst_noticia        = mysql_query("SELECT * FROM pmkt_noticia WHERE fecha_publicacion<='$fechaActual' AND publicar=1 ORDER BY fecha_publicacion DESC, id DESC LIMIT $start, 4", $conexion);

?>
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Noticias | <?php echo $web_nombre ?></title>

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
