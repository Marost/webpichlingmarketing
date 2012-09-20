<?php
include("../panel@pmarketing/conexion/conexion.php");

//VARIABLES - DATOS DE LA ASOCIACIÓN
$nombre_apellidos=$_POST["nombre_apellidos"];
$empresa=$_POST["empresa"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$email=$_POST["email"];
$comentario=$_POST["comentario"];

//GUARDAR EN LA BASE DE DATOS
mysql_query("INSERT INTO pmkt_contacto (nombre_apellidos,
empresa,
direccion,
telefono,
email,
comentario) VALUES ('$nombre_apellidos',
'$empresa',
'$direccion',
'$telefono',
'$email',
'$comentario')", $conexion);
	
$body = '<!DOCTYPE HTML> <html lang="es"> <head> <meta charset="utf-8">
<title></title>
<style type="text/css">
	body{ font-family: Arial, Helvetica, sans-serif; font-size: 12px;}
	body{ margin:0;}
</style>
</head>
<body>
<h2>Contacto</h2>
<p><strong>Nombre y Apellidos:</strong> '.$nombre_apellidos.'</p>
<p><strong>Empresa:</strong> '.$empresa.'</p>
<p><strong>Dirección:</strong> '.$direccion.'</p>
<p><strong>Teléfono:</strong> '.$telefono.'</p>
<p><strong>E-mail:</strong> '.$email.'</p>
<p><strong>Comentario:</strong></p>
<p>'.$comentario.'</p>
</body>
</html>';
	
$from="jrozeznic@pichlingmarketing.com";
$asunto="Pichling Sports Marketing | Contacto";
$headers= "From: Pichling Sports Marketing <".strip_tags($from)."> \r\n";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/html; charset=UTF-8\r\n";

mail($from, $asunto, $body, $headers);

?>