<?php
session_start();
	include("../panel@pmarketing/conexion/conexion.php");
	include("../panel@pmarketing/conexion/funciones.php");

if(isset($_SESSION['email'])) {?>
<!DOCTYPE HTML>
<html lang="es-ES">
<?php include ("header.php") ?>

<body>
	<section class="main">
		<p><a href="salir.php"><button>Cerrar Sesión</button></a> | <a href="panel.php"><button>Volver</button></a></p>

		<h4>Lista de Invitados</h4>
		<table style="text-align:center; color:white; font-size:18px;">
			<tr>
			    <td><strong>ID</strong></td>
			    <td><strong>Nombres y Apellidos</strong></td>
			    <td><strong>E-mail</strong></td>
			    <td><strong>DNI</strong></td>
			    <td><strong>Asistencia</strong></td>
			    <!--<td><strong>Pareja</strong></td>
				<td><strong>Foto</strong></td>-->
			</tr>
			<?php
			$otros_eventos = 237;
			$consultaCategoria=mysql_query("select * from pmkt_registro where id <> 0 and evento='Almuerzo Bicentenario' order by `id` asc");

			while($filas=mysql_fetch_array($consultaCategoria)){
			$id=$filas['id']-$otros_eventos;
			$nombre_apellido=$filas['nombre_apellido'];
			$email=$filas['email'];
			$foto=$filas['foto'];
			$dni=$filas['dni'];

			if ($filas['asistencia']=="Solo"){
				$asistencia="Si participa";
			} elseif ($filas['asistencia']=="NoIras") {
				$asistencia="No participa";
			}


			$pareja=$filas['pareja'];

				echo '<tr>';
				echo '<td>'.$id.'</td>';
				echo '<td>'.$nombre_apellido.'</td>';
				echo '<td>'.$email.'</td>';
				echo '<td>'.$dni.'</td>';
				echo '<td>'.$asistencia.'</td>';
				//echo '<td>'.$pareja.'</td>';
			//	if($foto=="")
			//		{
			//			echo '<td><img src="uploads/'.$foto.'" height="100" title="No ingreso foto"></td>';
			//		}else{
			//				echo '<td style="text-align:center;"><img src="uploads/'.$foto.'" height="100" title="'.$nombre_apellido.'"></td>';
			//			}
				echo '</tr>';
			}
			?>
		</table>
	</section>
</body>
</html>
<?php
}else{
	echo '<script> window.location="login.php"; </script>';
}
?>