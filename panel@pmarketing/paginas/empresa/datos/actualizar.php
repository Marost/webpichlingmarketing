<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");

//DECLARACION DE VARIABLES
$nombre=$_POST["titulo"];
$enlace=$_POST["enlace_web"];
$nosotros=$_POST["nosotros"];
$bienvenidos=$_POST["bienvenidos"];

//GUARDAR DATOS
mysql_query("UPDATE ".$tabla_suf."_empresa SET nombre='".htmlspecialchars($nombre)."', web='$enlace', nosotros='$nosotros', bienvenidos='$bienvenidos' WHERE id=1;", $conexion);
	
if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=5");
} else {
	mysql_close($conexion);
	header("Location:empresa.php");
}

?>