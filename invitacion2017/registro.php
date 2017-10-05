<?php
session_start();
	include("../panel@pmarketing/conexion/conexion.php");
	include("../panel@pmarketing/conexion/funciones.php");

if(isset($_SESSION['email'])) {?>
<!DOCTYPE HTML>
<html lang="es-ES">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Invitación Julio &amp; LuisFe</title>
<body>
<a href="salir.php"><button>Cerrar Sesión</button></a> | <a href="panel.php"><button>Volver</button></a></p>
<h4>Lista de Registrados<h4>
<table>
<tr>
    <td><strong>ID</strong></td>
    <td><strong>Nombres y Apellidos</strong></td>
    <td><strong>E-mail</strong></td>
    <td><strong>DNI</strong></td>
	<td><strong>Foto</strong></td>
</tr>
<?php
/*$i=rand(0,12);
$consultaCategoria=mysql_query("select * from sqtx_categoria order by `id` asc limit  $i , 6 ");*/
$consultaCategoria=mysql_query("select * from pmkt_registro where id <> 0 order by `id` asc");

while($filas=mysql_fetch_array($consultaCategoria)){
$id=$filas['id'];
$nombre_apellido=$filas['nombre_apellido'];
$email=$filas['email'];
$equipo=$filas['equipo'];
$dni=$filas['dni'];

	echo '<tr>';
	echo '<td>'.$id.'</td>';
	echo '<td>'.$nombre_apellido.'</td>';
	echo '<td>'.$email.'</td>';
	echo '<td>'.$dni.'</td>';
	if($equipo=="")
		{
			echo '<td><img src="uploads/'.$equipo.'" height="100" title="No ingreso foto"></td>';
		}else{
				echo '<td style="text-align:center;"><img src="uploads/'.$equipo.'" height="100" title="'.$nombre_apellido.'"></td>';
			}
	echo '</tr>';

}
?>
</table>
</body>
</html>
<?php
}else{
	echo '<script> window.location="login.php"; </script>';
}
?>