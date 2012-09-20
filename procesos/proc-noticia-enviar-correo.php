<?php
include("../panel@femip/conexion/conexion.php");
include("../panel@femip/conexion/funciones.php");

//VARIABLES - DATOS DE LA ASOCIACIÓN
$idnoticia=$_POST["noticia"];
$nombre=$_POST["nombre"];
$amigo_nombre=$_POST["amigo_nombre"];
$amigo_email=$_POST["amigo_email"];

//NOTICIA
$rst_noticia=mysql_query("SELECT * FROM fmp_noticia WHERE id=$idnoticia;", $conexion);
$fila_noticia=mysql_fetch_array($rst_noticia);
$noticia_url=$web."noticia/".$fila_noticia["id"]."-".$fila_noticia["url"];
$noticia_titulo=$fila_noticia["titulo"];
$noticia_contenido=$fila_noticia["contenido"];

//ENVIAR CORREO
$body = '<!DOCTYPE HTML> <html lang="es"> <head> <meta charset="utf-8">
<title>'.$web_nombre.'</title>
<style type="text/css">
	body{ font-family: Arial, Helvetica, sans-serif; font-size: 12px;}
	body{ margin:0;}
</style>
</head>
<body>
<img src="'.$web.'/imagenes/logo-sm.png" width="235" height="80" />
<p>&nbsp;</p>
<p>Hola <strong>'.$amigo_nombre.'</strong>, tu amigo <strong>'.$nombre.'</strong> ha compartido contigo un contenido de <a href='.$web.'>FEMIP</a></p>
<p><a href='.$noticia_url.'>'.$noticia_titulo.'</a></p>
'.cortarTextoRH($noticia_contenido,1,0,400).'
<p>&nbsp;</p>
<p>Noticia completa: <a href='.$noticia_url.'>'.$noticia_url.'</a></p>
</body>
</html>';
	
$from=$amigo_email;
$asunto="FEMIP | $nombre ha compartido un contenido contigo";
$headers= "From: FEMIP <no-reply@femip.org> \r\n";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/html; charset=UTF-8\r\n";

mail($from, $asunto, $body, $headers);

?>