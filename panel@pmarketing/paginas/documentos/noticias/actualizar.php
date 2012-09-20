<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");
require_once('../../../../libs/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$idnoticia=$_REQUEST["id"];
$titulo=$_POST["titulo"];
$url=getUrlAmigable(eliminarTextoURL($titulo));
$enlace=$_POST["enlace"];
$tipo=$_REQUEST["tipo"];

//FECHA PUBLICACION
$fecha_publicacion=$_POST["fecha"];
$hora_publicacion=$_POST["hora"];
$fecha_pub=$fecha_publicacion." ".$hora_publicacion.":00";

//VERIFICACION DE DOCUMENTO
$rst_doc=mysql_query("SELECT * FROM ".$tabla_suf."_documento WHERE id=$idnoticia", $conexion);
$fila_doc=mysql_fetch_array($rst_doc);

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
}elseif($fila_doc["documento"]!=""){
	$carpeta_archivo=$fila_doc["carpeta_documento"];
	$archivo_name_total=$fila_doc["documento"];
}


//GUARDAR DATOS
mysql_query("UPDATE ".$tabla_suf."_documento SET url='$url',
titulo='".htmlspecialchars($titulo)."', 
documento='$archivo_name_total',
carpeta_documento='$carpeta_archivo',
enlace='$enlace',
dato_usuario='$usuario_user', 
categoria=$tipo,
fecha_publicacion='$fecha_pub' WHERE id=$idnoticia;", $conexion);
	
if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=5");
} else {
	//echo "si subio";
	//echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?tipo=$tipo&mensaje=2");
}

?>