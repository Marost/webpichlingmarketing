<?php
session_start();
	include("../panel@pmarketing/conexion/conexion.php");
	include("../panel@pmarketing/conexion/funciones.php");

if(isset($_SESSION['email'])) {?>
<!DOCTYPE HTML>
<html lang="es-ES">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500|Arvo:700' rel='stylesheet' type='text/css'>
<title>Invitación Julio &amp; LuisFe</title>
<body>
<section class="main">
<?php
	$log = mysql_query("SELECT * FROM pmkt_registro WHERE email='".$_SESSION['email']."'");
	if (mysql_num_rows($log)>0) {
		$row = mysql_fetch_array($log);
		$_SESSION["email"] = $row['email']; 
		$_SESSION["dni"] = $row['dni']; 
		$_SESSION["nombre_apellido"] = $row['nombre_apellido']; 
		$_SESSION["equipo"] = $row['equipo']; 

	echo '<p><br></p>';
	echo '<h4>Registro Confirmado</h4>';
	if($_SESSION["equipo"]=="")
	  {
		  echo '<p><img src="uploads/'.$_SESSION["equipo"].'" title="No ingreso foto"></p>';
	  }else{
			  echo '<p><img src="uploads/'.$_SESSION["equipo"].'" height="200px" title="'.$_SESSION["nombre_apellido"].'"></p>';
		  }
	echo '<h1>Hola '.$_SESSION["nombre_apellido"].'</h1>';
	echo '<p>Te esperamos este viernes 06 de Octubre a partir de las 20:00 horas</p>';
	echo '<p>Presenta esta pantalla al ingresar</p>';
	echo '<p>'.$_SESSION["email"].'</p>';
	echo '<p>'.$_SESSION["dni"].'</p>';
	echo '<p><a href="salir.php"><button>Cerrar Sesión</button></a> | <a href="update.php"><button>Actualizar Datos</button></a></p>';
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