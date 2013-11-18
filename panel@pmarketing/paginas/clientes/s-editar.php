<?php
session_start();
include("../../conexion/conexion.php");
include("../../conexion/funciones.php");
require_once('../../js/plugins/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$nota_id=$_REQUEST["id"];
$titulo=$_POST["titulo"];

//IMAGEN
if($_POST['uploader_clientes_0_tmpname']<>""){
	$imagen=$_POST["uploader_clientes_0_tmpname"];
}else{
	$imagen=$_POST["imagen"];
}

//INSERTANDO DATOS
$rst_guardar=mysql_query("UPDATE ".$tabla_suf."_clientes SET titulo='".htmlspecialchars($titulo)."', 
	imagen='$imagen' WHERE id=$nota_id;", $conexion);

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?msj=ok");
}

?>