<?php
	session_start();
	include("../panel@pmarketing/conexion/conexion.php");
	include("../panel@pmarketing/conexion/funciones.php");
    include("variables.php");
	
	if(isset($_SESSION['email'])){
	echo '<script> window.location="panel.php"; </script>';
	}
?>
<!DOCTYPE HTML>
<html lang="es-ES">
<?php include ("header.php") ?>

<body>
<section class="main">
	<p><br></p>
    <h4>Login</h4>
    <form method="post" action="validar.php" style="text-align:center; color:white; font-size:18px;">
    	<span>
            <fieldset class="sin_borde">
            <label for="email">Email: </label><br>
            <input type="email" class="form-control" name="email" id="email" required><br>
            </fieldset>
        </span>
        <span>
            <fieldset class="sin_borde">
            <label for="dni">DNI: </label><br>
        	<input type="text" class="form-control" name="dni" id="dni" maxlength="8" required><br>
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