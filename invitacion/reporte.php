<?php
	session_start();
	include("../panel@jurecpi/conexion/conexion.php");
	include("../panel@jurecpi/conexion/funciones.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Invitación 20 años</title>
</head>

<body>
<dd><h4>Lista de Invitados</h4></dd>
<?php
$jugadores=mysql_query("SELECT * FROM jrcp_registro order by `asistencia` asc");
while($filas=mysql_fetch_array($jugadores)){
$nombre_apellido=$filas['nombre_apellido'];
$asistencia=$filas['asistencia'];

echo '<dl>Invitado: '.$nombre_apellido.' | Asistencia: '.$asistencia.'</dl>';
}
?>
</body>
</html>