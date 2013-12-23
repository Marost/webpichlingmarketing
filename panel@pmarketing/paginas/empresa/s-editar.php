<?php
session_start();
include("../../conexion/conexion.php");
include("../../conexion/funciones.php");

//DECLARACION DE VARIABLES
$nota_id=$_REQUEST["id"];
$empresa=$_POST["nombre"];
$url_pagina=$_POST["url-pagina"];
$email_contacto=$_POST["email-contacto"];
$url_facebook=$_POST["url-facebook"];
$url_twitter=$_POST["url-twitter"];
$url_youtube=$_POST["url-youtube"];
$palabras_clave=$_POST["palabras-clave"];
$nosotros=$_POST["nosotros"];

//INSERTANDO DATOS
$rst_guardar=mysql_query("UPDATE ".$tabla_suf."_empresa SET nombre='".htmlspecialchars($empresa)."', 
	web='$web', 
	social_email='$email_contacto', 
	social_facebook='$url_facebook', 
	social_twitter='$url_twitter', 
	social_youtube='$url_youtube', 
	palabras_clave='".htmlspecialchars($palabras_clave)."',
	nosotros='$nosotros' WHERE id=$nota_id;", $conexion);

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?msj=ok");
}

?>