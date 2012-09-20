<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");

//DECLARACION DE VARIABLES
$titulo=$_POST["titulo"];
$url=getUrlAmigable(eliminarTextoURL($titulo));
$contenido=$_POST["contenido"];
$tipo_video=$_POST["video"];

//FECHA PUBLICACION
$fecha_publicacion=$_POST["fecha"];
$hora_publicacion=$_POST["hora"];
$fecha_pub=$fecha_publicacion." ".$hora_publicacion.":00";

//IMAGEN O VIDEO
if($_POST['flash_uploader_0_tmpname']<>""){
	$mostrar_imagen=1;
	$imagen=$_POST['flash_uploader_0_tmpname'];
	$carpeta_imagen=fechaCarpeta()."/";
	if($tipo_video=="youtube"){
		$mostrar_video=1;
		$video=$_POST["video-youtube"];
	}elseif($tipo_video=="vimeo"){
		$mostrar_video=1;
		$video=$_POST["video-vimeo"];
	}elseif($tipo_video=="dailymotion"){
		$mostrar_video=1;
		$video=$_POST["video-dailymotion"];
	}elseif($tipo_video=="flv"){
		$mostrar_video=1;
		$carpeta_video=fechaCarpeta()."/";
		$video=$_POST['video_uploader_0_tmpname'];
	}else{
		$mostrar_video=0;
	}
}else{
	$imagen=="";
	$video="";
	$carpeta_imagen="";
	$carpeta_video="";
	$mostrar_imagen=0;
	$mostrar_video=0;
}

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_evento (url,
titulo, 
contenido, 
imagen, 
mostrar_imagen, 
tipo_video, 
video, 
mostrar_video, 
dato_usuario, 
carpeta_imagen,
carpeta_video, 
fecha_publicacion) VALUES('$url',
'".htmlspecialchars($titulo)."',
'$contenido',
'$imagen', 
$mostrar_imagen, 
'$tipo_video', 
'$video', 
$mostrar_video, 
'$usuario_user', 
'$carpeta_imagen',
'$carpeta_video', 
'$fecha_pub');",$conexion);

if (mysql_errno()!=0){
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1");
}

?>