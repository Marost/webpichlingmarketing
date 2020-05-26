<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES
$sc_home=false;
$sc_slider=false;

//VARIABLES DE URL
$ReqID=$_REQUEST["id"];
$ReqURL=$_REQUEST["url"];

//NOTICIA INFERIOR
$rst_noticia=mysql_query("SELECT * FROM pmkt_noticia WHERE id=$ReqID;", $conexion);
$fila_noticia=mysql_fetch_array($rst_noticia);

//VARIABLES
$noticia_titulo=$fila_noticia["titulo"];
$noticia_contenido=$fila_noticia["contenido"];
$noticia_imagen=$fila_noticia["imagen"];
$noticia_imagen_carpeta=$fila_noticia["imagen_carpeta"];
$noticia_tags=$fila_noticia["tags"];

$noticia_fechapub=$fila_noticia["fecha_publicacion"];
$noticia_fechaGen=explode(" ", $noticia_fechapub);
$noticia_fechaPub=explode("-", $noticia_fechaGen[0]);

//META
$noticia_palabrasclave=$fila_noticia["palabras_clave"];
$noticia_descripcion=soloDescripcion($fila_noticia["contenido"]);

//TAGS
$tags=explode(",", $noticia_tags);    //SEPARACION DE ARRAY CON COMAS
$rst_tags=mysql_query("SELECT * FROM pmkt_noticia_tags ORDER BY nombre ASC;", $conexion);

//URLS
$noticia_WebIMG=$web."imagenes/upload/".$noticia_imagen_carpeta."".$noticia_imagen;
$noticia_WebURL=$web."noticia/".$ReqID."-".$ReqURL;

?>
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title><?php echo $noticia_titulo; ?></title>

	<meta name="keywords" content="<?php echo $noticia_palabrasclave; ?>">
	<meta name="description" content="<?php echo $noticia_descripcion; ?>">

	<!-- TWITTER CARD -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@pichlingmkt">
	<meta name="twitter:creator" content="@pichlingmkt">
	<meta name="twitter:title" content="<?php echo $noticia_titulo; ?> | <?php echo $web_nombre; ?>">
	<meta name="twitter:description" content="<?php echo $noticia_descripcion; ?>">
	<meta name="twitter:image" content="<?php echo $noticia_WebIMG; ?>">
	<meta name="twitter:domain" content="pichlingmarketing.com">
	<!-- FIN TWITTER CARD -->

	<!-- OPEN GRAPH -->
	<meta property="og:type" content='article' /> 
	<meta property="og:site_name" content='<?php echo $web_nombre; ?>' /> 
	<meta property="og:title" content='<?php echo $noticia_titulo; ?> | <?php echo $web_nombre ?>'/> 
	<meta property="og:description" content='<?php echo $noticia_descripcion; ?>'/>
	<meta property="og:url" content='<?php echo $noticia_WebURL; ?>' /> 
	<meta property="og:image" content='<?php echo $noticia_WebIMG; ?>' />
	<!-- FIN OPEN GRAPH -->

	<?php require_once("wg-script-header.php"); ?>
    
    <script data-ad-client="ca-pub-1054063152096160" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	
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

				<div class="l-submain">
					<div class="l-submain-h g-html i-cf">
						<div class="l-content">
						<div class="l-content-h">
							<div class="w-blogpost meta_all with_image">
								<div class="w-blogpost-h">
									
									<h1 class="w-blogpost-title"><?php echo $noticia_titulo; ?></h1>
									
									<div class="w-blogpost-meta">
										<div class="w-blogpost-meta-date">
											<i class="icon-time"></i>
											<span class="w-blogpost-meta-date-month"><?php echo nombreMesSC($noticia_fechaPub[1]); ?></span>
											<span class="w-blogpost-meta-date-day"><?php echo $noticia_fechaPub[2]; ?></span>
											<span class="w-blogpost-meta-date-year"><?php echo $noticia_fechaPub[0]; ?></span>
										</div>

									</div>

									<div class="w-blogpost-image">
										<img src="<?php echo $noticia_WebIMG; ?>" alt="">
									</div>
									
									<div class="w-blogpost-content">
										<div class="w-blogpost-text">
											<?php echo $noticia_contenido; ?>
										</div>
									</div>

									<div class="w-tags layout_block title_atleft">
										<div class="w-tags-h">
											<div class="w-tags-title">
												<h4 class="w-tags-title-h">Tags:</h4>
											</div>
											<div class="w-tags-list">

												<?php while($fila_tags=mysql_fetch_array($rst_tags)){
							                        $tags_id=$fila_tags["id"];
							                        $tags_url=$fila_tags["url"];
							                        $tags_nombre=$fila_tags["nombre"];

							                        //URL
							                        $tags_WebURL=$web."tags/".$tags_id."-".$tags_url;
							                        if(in_array($tags_id, $tags)){
								                ?>
								                <div class="w-tags-item">
													<a class="w-tags-item-link" href="<?php echo $tags_WebURL; ?>"><?php echo $tags_nombre; ?></a>
													<span class="w-tags-item-separator">,</span>
												</div>
								                <?php }} ?>
												
											</div>
										</div>
									</div>	
									
								</div>
							</div>

							<div id="comments" class="w-comments has_form">
								<div class="w-comments-h">
									
								    <div id="disqus_thread"></div>
								    <script type="text/javascript">
								        var disqus_shortname = 'pichling';
								        (function() {
								            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
								            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
								            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
								        })();
								    </script>
								    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>    

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

<script type="text/javascript">
var disqus_shortname = 'pichling';
(function () {
    var s = document.createElement('script'); s.async = true;
    s.type = 'text/javascript';
    s.src = '//' + disqus_shortname + '.disqus.com/count.js';
    (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
}());
</script>

<!-- AddThis Smart Layers BEGIN -->
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-520a92604c643807"></script>
<script type="text/javascript">
  addthis.layers({
    'theme' : 'transparent',
    'share' : {
      'position' : 'left',
      'numPreferredServices' : 5
    }, 
    'follow' : {
      'services' : [
        {'service': 'facebook', 'id': 'pichlingmarketing'},
        {'service': 'twitter', 'id': 'pichlingmkt'},
        {'service': 'youtube', 'id': 'pichlingmarketing'}
      ]
    }   
  });
</script>
<!-- AddThis Smart Layers END -->

</body>
</html>
