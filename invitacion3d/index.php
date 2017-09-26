<?php
	session_start();
	include("../panel@pmarketing/conexion/conexion.php");
	include("../panel@pmarketing/conexion/funciones.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Registro</title>
</head>

<body>
<dd><h4>Lista de Jugadores Inscritos</h4></dd>
<dd><img src="images/logo.jpg"/></dd>
	<?php
$jugadores=mysql_query("SELECT * FROM pmkt_registro order by `equipo` asc");
while($filas=mysql_fetch_array($jugadores)){
$equipo=$filas['equipo'];
$nombre_apellido=$filas['nombre_apellido'];
$talla=$filas['talla'];

echo '<dl>'.$equipo.' | Jugador: '.$nombre_apellido.' | Talla: '.$talla.'</dl>';
}
?>
</body>
</html>