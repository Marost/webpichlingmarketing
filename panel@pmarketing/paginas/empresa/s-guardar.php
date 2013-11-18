<?php
session_start();
include("../../conexion/conexion.php");
include("../../conexion/funciones.php");

//DECLARACION DE VARIABLES
$empresa=$_POST["nombre"];
$url_pagina=$_POST["url-pagina"];
$email_contacto=$_POST["email-contacto"];
$url_facebook=$_POST["url-facebook"];
$url_twitter=$_POST["url-twitter"];
$url_youtube=$_POST["url-youtube"];
$palabras_clave=$_POST["palabras-clave"];

//SUBIR IMAGEN
$imagen=$_POST["uploader_0_tmpname"];
$imagen_carpeta=fechaCarpeta()."/";

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_empresa (nombre, web, social_email, social_facebook, social_twitter, social_youtube, palabras_clave) 
	VALUES('".htmlspecialchars($empresa)."', '$web', '$email_contacto', '$url_facebook', '$url_twitter', '$url_youtube', '".htmlspecialchars($palabras_clave)."');",$conexion);

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?msj=ok");
}

?>