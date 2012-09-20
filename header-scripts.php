<?php if($script_css==true){ ?>
<!-- ESTILOS -->
<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<?php } ?>

<?php if($script_fonts==true){ ?>
<!-- FONTS -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
<?php } ?>

<?php if($script_formulario==true){ ?>
<!-- FORMULARIO -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/funciones-contacto.js"></script>
<?php } ?>

<?php if($script_galeria_fotos==true){ ?>
<!-- GALERIA DE FOTOS -->
<link rel="stylesheet" href="libs/slideviewerpro/css/svwp_style.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> 
<script src="libs/slideviewerpro/js/jquery.slideViewerPro.1.0.js" type="text/javascript"></script>
<script type="text/javascript">
var jgalweb = jQuery.noConflict();
jgalweb(document).ready(function(){
    jgalweb("div#wg_galeria").slideViewerPro({
		thumbs: 3, 
		thumbsPercentReduction: 20,
		thumbsTopMargin: 5,
		thumbsRightMargin: 5,
		thumbsBorderWidth: 2,
		thumbsActiveBorderColor: "red",
		thumbsActiveBorderOpacity: 0.5,
		thumbsBorderOpacity: 0,
		buttonsTextColor: "#000",
		typo: true
	});
});
</script>
<?php } ?>

<?php if($script_socios==true){ ?>
<!-- SOCIOS -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="libs/caroufredsel/jquery.carouFredSel-5.5.0.js" type="text/javascript"></script>
<script type="text/javascript">
var jsocios = jQuery.noConflict();
jsocios(document).ready(function(){
    jsocios("#snwscl_logos").carouFredSel({
		auto	: {
			items 			: 1,
			duration		: 7500,
			easing			: "linear",
			pauseDuration	: 0,
			pauseOnHover	: "immediate"
		}
	});
});
</script>
<?php } ?>

<?php if($script_ie==true){ ?>
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/html5.js"></script>
    <link href="css/ie.css" rel="stylesheet" type="text/css">
<![endif]-->

<!--[if gte IE 9]>
  <style type="text/css"> .gradient { filter: none; } </style>
<![endif]-->
<?php } ?>

<?php if($script_menu_servicios==true){ ?>
<!-- MENU SERVICIOS -->
<script type="text/javascript" src="js/jquery.js"></script>
<script>
var jmser = jQuery.noConflict();
jmser(document).ready(function(){
		jmser('li.servicios').hover(
			function() { jmser('ul', this).css('display', 'block'); },
			function() { jmser('ul', this).css('display', 'none'); });
	});
</script>
<?php } ?>