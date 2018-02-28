<?php
	session_start();
	include("../panel@pmarketing/conexion/conexion.php");
	include("../panel@pmarketing/conexion/funciones.php");
	
	if(isset($_SESSION['email'])){
	echo '<script> window.location="panel.php"; </script>';
	}
?>
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500|Arvo:700' rel='stylesheet' type='text/css'>
<title>Michele & William 50 Años</title>
<meta charset="utf-8">
</head>
<body>
<section class="main">
	<p><br></p>
    <h4>Login</h4>
    <form method="post" action="validar.php" style="text-align:center; color:white; font-size:18px;">
    	<span>
            <fieldset class="sin_borde">
            <label for="email">Email: </label><br>
            <input type="email" class="form-control" name="email" id="email" size="50" required><br>
            </fieldset>
        </span>
        <span>
            <fieldset class="sin_borde">
            <label for="dni">DNI: </label><br>
        	<input type="text" class="form-control" name="dni" id="dni" size="50" maxlength="8" required><br>
            </fieldset>
        </span>
        <span>
            <fieldset class="sin_borde">
        	<input type="submit" class="btn btn-success" name="login" value="Entrar">
        	</fieldset>
        </span>
    </form>
    <p><a href="index.php"><button>Regresar</button></a></p>
</section>
</body>
</html>