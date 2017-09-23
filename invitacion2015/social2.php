<?php
session_start();
include("../panel@jurecpi/conexion/conexion.php");
include("../panel@jurecpi/conexion/funciones.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
	--><title>Torneo Amistad 2015</title>
<style type="text/css">
body {
margin:50px auto;
width:500px;
text-align:center;
background:url(images/fondo.jpg) no-repeat;
}
/* FORMULARIO */
form{ padding:0 0 0 0;}
form.form_contacto{ width:100%; float:right;}
form fieldset.sin_borde{ border:none; float:right;}
form fieldset.boton{ text-align:center; }
form fieldset{ width:500px; float:right; }
form fieldset label{ width:120px; float:right; text-align:right; font-family: 'Actor', sans-serif; padding:0 3px 0 0; font-weight:bold; }
form fieldset button.fc_enviar{ width:200px !important; height:40px !important; background:url(../imagenes/fondo_inputboton.jpg) no-repeat #eee; border:none; cursor:pointer; }
.ocultar{ display:none;}
#msj_enviado{ width:680px; height:500px; position:relative; background:#dbdbdb; }

ul#smedia_contatenos{ list-style:none; margin:0; padding:0 0 0 160px; clear: both; float: left;}
ul#smedia_contatenos li{ margin: 0; padding: 0; overflow: hidden; float: left; text-indent:-1000em; width:90px; height:80px;}
ul#smedia_contatenos li a{ clear:both; float:left; width:80px; height:80px; background-image:url(../imagenes/sp_social-contactenos.png); margin:0 5px;}
ul#smedia_contatenos li a.wgsmdcon_facebook{ background-position:0 0;}
ul#smedia_contatenos li a.wgsmdcon_twitter{ background-position:-89px 0;}
ul#smedia_contatenos li a.wgsmdcon_youtube{ background-position:-179px 0;}
ul#smedia_contatenos li a.wgsmdcon_blog{ background-position:-269px 0;}
</style>
</head>
<body>
<?php
if(empty($_SESSION["facebook_id"])){
	
  require_once("src/facebook.php");
  require_once("src/config.php");
  
$facebook = new Facebook($config);
$params = array(
	'scope' => 'email',
	'redirect_uri' => 'http://www.jurecpiexport.com/invitacion2015/insertar.php'
);
$loginUrl = $facebook->getLoginUrl($params);
?>
<p><a href="<?php echo $loginUrl;?>"><img src="images/conectate-con-facebook.png" width="300" height="46"></a></p>
<?php
}else{
	?>
    <img src="images/camisetas/<?php echo $_GET["camiseta"];?>.png" width="300">
    <p><a href="salir.php"><img src="images/salir.png" width="212" height="71"></a></p>
<?php
	}
	//$datos= $facebook->api("/me");
	//var_dump($datos);
?>
</body>
</html>