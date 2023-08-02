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
<?php
	$log = mysql_query("SELECT * FROM pmkt_registro WHERE email='".$_SESSION['email']."'");
	if (mysql_num_rows($log)>0) {
		$row = mysql_fetch_array($log);
		$_SESSION["id"] = $row['id'];
		$_SESSION["nombre_apellido"] = $row['nombre_apellido'];
		$_SESSION["email"] = $row['email'];
		$_SESSION["foto"] = $row['foto']; 
		$_SESSION["dni"] = $row['dni']; 
		$_SESSION["asistencia"] = $row['asistencia'];
		$_SESSION["pareja"] = $row['pareja']; 

	echo '<p><br></p>';
	echo '<h4>Registro Confirmado</h4>';
	if($_SESSION["foto"]=="43747097.jpg")
	  {
		  echo '<p><img src="../invitacion2017/uploads/'.$_SESSION["foto"].'" height="200" title="'.$_SESSION["nombre_apellido"].'"></p>';
	  }else{
			  //echo '<p><img src="../invitacion2017/uploads/'.$_SESSION["foto"].'" height="100" title="'.$_SESSION["nombre_apellido"].'"></p>';
		  }
	echo '<h1>Hola '.$_SESSION["nombre_apellido"].'</h1>';
	echo '<p>Lo esperamos este Jueves 22 de Julio a las 12:00 horas (hora exacta) en la Rosa Náutica</p>';
	echo '<p>Sus datos ingresados son:</p>';
	//echo '<p>Presenta esta pantalla al ingresar</p>';
	echo '<p><strong>Email: </strong>'.$_SESSION["email"].'</p>';
	echo '<p><strong>DNI: </strong>'.$_SESSION["dni"].'</p>';
	
	if($_SESSION["asistencia"]=="Acompanado")
		{
			echo '<p><strong>Asistirás: </strong>'.$_SESSION["asistencia"].' por ' .$_SESSION["pareja"]. '</p>';
			}
	elseif($_SESSION["asistencia"]=="Solo")
		{
			echo '<p><strong>Si asistirá</strong></p>';
			}
	else
		{
			echo '<p><strong>No asistirá</strong></p>';
		}
	
	if($_SESSION["dni"] == '43747097' or $_SESSION["dni"] == '45831910' or $_SESSION["dni"] == '07748152')
		{ 
		echo '<p><a href="salir.php"><button>Cerrar Sesión</button></a> | <a href="update.php"><button>Actualizar Datos</button></a> | <a href="registro.php"><button>Lista de Participantes</button></a> | <a href="buscador.php"><button>Buscar Registro</button></a></p>';
		}else{
		echo '<p><a href="salir.php"><button>Cerrar Sesión</button></a> | <a href="update.php"><button>Actualizar Datos</button></a></p>';
		}
	}
?>
</section>
</body>
</html>
<?php
}else{
	echo '<script> window.location="login.php"; </script>';
}
?>