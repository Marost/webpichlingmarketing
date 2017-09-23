<?php
session_start();
include("../panel@jurecpi/conexion/conexion.php");
include("../panel@jurecpi/conexion/funciones.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Torneo Amistad 2016</title>
</head>

<body>
<h1>Lista de Participantes</h1>
<table border="1">
<tr>
  <td><strong>Nombres y Apellidos</strong></td>
  <td><strong>Talla de Camiseta</strong></td>
  <td><strong>Camiseta</strong></td>
  <td><strong>Número de Camiseta</strong></td>
</tr>
<?php
$sql = 'SELECT * FROM jrcp_registro WHERE ID <> 0 ORDER BY camiseta, genero asc'; 
$rec = mysql_query($sql);

while($filas=mysql_fetch_array($rec)){
$nombre_apellido=$filas['nombre_apellido'];
$asistencia=$filas['asistencia'];
$camiseta=$filas['camiseta'];
$genero=$filas['genero'];

echo '<tr><td>'.$nombre_apellido.'</td><td align="center">'.$asistencia.'</td><td align="center">'.$camiseta.'</td><td align="center">'.$genero.'</td></tr>';
}
?>
</table>
<p><a href="social.php">Regresar</a></p>
<p><a href="salir.php">Salir</a></p>

</body>
</html>
