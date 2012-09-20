<?php
include ("../../../conexion/conexion.php");

//VARIABLES
$tipo=$_REQUEST["tipo"];

mysql_query("DELETE FROM ".$tabla_suf."_documento WHERE id=".$_REQUEST["id"].";",$conexion);

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:listar.php?tipo=$tipo&mensaje=6");
} else {
	mysql_close($conexion);
	header("Location:listar.php?tipo=$tipo&mensaje=3");
}

?>