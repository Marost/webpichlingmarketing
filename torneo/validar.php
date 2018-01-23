<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
</head>
<body>
		<?php
			include("../panel@pmarketing/conexion/conexion.php");
			include("../panel@pmarketing/conexion/funciones.php");
			if(isset($_POST['email'])){
				$email = $_POST['email'];
				$password = $_POST['password'];
				$log = mysql_query("SELECT * FROM pmkt_equipo WHERE email='$email' AND password='$password'");
				if (mysql_num_rows($log)>0) {
					$row = mysql_fetch_array($log);
					$_SESSION["email"] = $row['email']; 
				  	echo 'Iniciando sesión para '.$_SESSION['email'].' <p>';
					echo '<script> window.location="home.php"; </script>';
				}
				else{
					echo '<script> alert("Email o Contraseña incorrectos.");</script>';
					echo '<script> window.location="login.php"; </script>';
				}
			}
		?>	
</body>
</html>