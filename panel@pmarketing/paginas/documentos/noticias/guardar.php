<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");
require_once('../../../../libs/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$titulo=$_POST["titulo"];
$url=getUrlAmigable(eliminarTextoURL($titulo));
$tipo=$_REQUEST["tipo"];
$enlace=$_POST["enlace"];

//FECHA PUBLICACION
$fecha_publicacion=$_POST["fecha"];
$hora_publicacion=$_POST["hora"];
$fecha_pub=$fecha_publicacion." ".$hora_publicacion.":00";

//DOCUMENTO
if($_POST['flash_uploader_0_tmpname']<>""){
	$archivo_tmp=$_POST['flash_uploader_0_tmpname'];
	$archivo_tmp_extension=end(explode('.',$archivo_tmp));
	$archivo_tmp_nombre=substr($archivo_tmp,0,strlen($archivo_tmp)-(strlen($archivo_tmp_extension)+1));
	
	$archivo_name=$_POST['flash_uploader_0_name'];	
	$archivo_name_extension=end(explode('.',$archivo_name));
	$archivo_name_nombre=substr($archivo_name,0,strlen($archivo_name)-(strlen($archivo_name_extension)+1));
	$archivo_name_prmlnk=getUrlAmigable($archivo_name_nombre);
	$archivo_name_total=$archivo_name_prmlnk.".".$archivo_name_extension;
	
	$carpeta_archivo=fechaCarpeta()."/";
	$ruta_archivo="../../../../archivos/".$carpeta_archivo."";
	if(file_exists($ruta_archivo.$archivo_tmp)){
		rename($ruta_archivo.$archivo_tmp, $ruta_archivo.$archivo_name_total);
	}
}

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_documento (url,
titulo,
documento,
carpeta_documento,
categoria, 
enlace,
fecha_publicacion,
dato_usuario) VALUES('$url',
'".htmlspecialchars($titulo)."',
'$archivo_name_total',
'$carpeta_archivo',
$tipo, 
'$enlace',
'$fecha_pub',
'$usuario_user');",$conexion);

if (mysql_errno()!=0){
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?tipo=$tipo&mensaje=1");
}

?>