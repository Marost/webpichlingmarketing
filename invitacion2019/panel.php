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
<title>Michele & William 25 Años</title>
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
		  echo '<p><img src="../invitacion2017/uploads/'.$_SESSION["foto"].'" height="200" title="No ingreso foto"></p>';
	  }else{
			  //echo '<p><img src="../invitacion2017/uploads/'.$_SESSION["foto"].'" height="100" title="'.$_SESSION["nombre_apellido"].'"></p>';
		  }
	echo '<h1>Hola '.$_SESSION["nombre_apellido"].'</h1>';
	echo '<p>Te esperamos este Sábado 21 de Diciembre a partir de las 18:00 horas</p>';
	echo '<p>Tus datos ingresados son:</p>';
	//echo '<p>Presenta esta pantalla al ingresar</p>';
	echo '<p><strong>Email: </strong>'.$_SESSION["email"].'</p>';
	echo '<p><strong>DNI: </strong>'.$_SESSION["dni"].'</p>';
	
	if($_SESSION["asistencia"]=="Acompanado")
		{
			echo '<p><strong>Asistirás: </strong>'.$_SESSION["asistencia"].' por ' .$_SESSION["pareja"]. '</p>';
			}
	else
		{
			echo '<p><strong>Asistirás: </strong>'.$_SESSION["asistencia"].'</p>';
			}
	
	if($_SESSION["dni"] == '43747097' or $_SESSION["dni"] == '74295450' or $_SESSION["dni"] == '74295452' or $_SESSION["dni"] == '07748152' or $_SESSION["dni"] == '07966869')
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