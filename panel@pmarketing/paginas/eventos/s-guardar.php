<?php
session_start();
include("../../conexion/conexion.php");
include("../../conexion/funciones.php");
require_once('../../js/plugins/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$titulo=$_POST["titulo"];
$url=getUrlAmigable(eliminarTextoURL($titulo));
$contenido=$_POST["contenido"];
$evento_cliente=$_POST["evento_cliente"];
$evento_fecha=$_POST["evento_fecha"];
$evento_lugar=$_POST["evento_lugar"];

//FECHA Y HORA
$pub_fecha=$_POST["pub_fecha"];
$pub_hora=$_POST["pub_hora"];
$fecha_publicacion=$pub_fecha." ".$pub_hora;

//SUBIR IMAGEN
$imagen=$_POST["uploader_0_tmpname"];
$imagen_carpeta=fechaCarpeta()."/";

while($imagen<>""){
	$thumb=PhpThumbFactory::create("../../../imagenes/upload/".$imagen_carpeta."".$imagen."");
	$thumb->adaptiveResize(465,465);
	$thumb->save("../../../imagenes/upload/".$imagen_carpeta."thumb/".$imagen."", "jpg");
}

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_evento (url, 
	titulo, 
	contenido, 
	imagen, 
	imagen_carpeta, 
	ev_cliente, 
	ev_lugar, 
	ev_fecha, 
	fecha_publicacion) 
	VALUES('$url', 
	'".htmlspecialchars($titulo)."', 
	'$contenido', 
	'$imagen', 
	'$imagen_carpeta',
	'$evento_cliente',
	'$evento_lugar',
	'$evento_fecha',
	'$fecha_publicacion');",$conexion);

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?msj=ok");
}

?>