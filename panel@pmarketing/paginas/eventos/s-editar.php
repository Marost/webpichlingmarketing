<?php
session_start();
include("../../conexion/conexion.php");
include("../../conexion/funciones.php");
require_once('../../js/plugins/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$nota_id=$_REQUEST["id"];
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

//IMAGEN
if($_POST['uploader_eventos_0_tmpname']<>""){
	$imagen=$_POST["uploader_eventos_0_tmpname"];
	$imagen_carpeta=fechaCarpeta()."/";
	$thumb=PhpThumbFactory::create("../../../imagenes/eventos/".$imagen_carpeta."".$imagen."");
	$thumb->adaptiveResize(465,465);
	$thumb->save("../../../imagenes/eventos/".$imagen_carpeta."thumb/".$imagen."", "jpg");
}else{
	$imagen=$_POST["imagen"];
	$imagen_carpeta=$_POST["imagen_carpeta"];
}

//INSERTANDO DATOS
$rst_guardar=mysql_query("UPDATE ".$tabla_suf."_evento SET titulo='".htmlspecialchars($titulo)."', 
	contenido='$contenido', 
	imagen='$imagen', 
	imagen_carpeta='$imagen_carpeta', 
	ev_cliente='$evento_cliente', 
	ev_lugar='$evento_lugar', 
	ev_fecha='$evento_fecha', 
	fecha_publicacion='$fecha_publicacion' WHERE id=$nota_id;", $conexion);

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?msj=ok");
}

?>