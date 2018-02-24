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
		$_SESSION["id"] = $row['id'];
		
	echo '<p><br></p>';
	echo '<h4>Actualizar Datos</h4>';
?>
<dl>
    <dd>
        <form enctype='multipart/form-data' action="" method="post" id="subscribe-form" style="text-align:center; color:white; font-size:18px;">
            <span>
                <fieldset class="sin_borde">
                <label for="nombre_apellido">Nombres y Apellidos: </label><br>
                <input type="text" name="nombre_apellido" id="nombre_apellido" size="50" value="<? echo $_SESSION["nombre_apellido"];?>"/>
                </fieldset>
            </span>
            <span>
                <fieldset class="sin_borde">
                <label for="email">Email: </label><br>
                <input type="email" name="email" id="email" size="50" value="<? echo $_SESSION["email"];?>" />
                </fieldset>
            </span>
            <span>
                <fieldset class="sin_borde">
                <label for="DNI">DNI: </label><br>
                <input type="text" name="dni" id="dni" onkeyUp="return ValNumero(this);" maxlength="8" size="50" value="<? echo $_SESSION["dni"];?>" />
                </fieldset>
            </span>
            <span>
            	<fieldset class="sin_borde">
                <?php
					if($_SESSION["equipo"]=="")
					{
					echo '<p><img src="uploads/'.$_SESSION["equipo"].'" title="No ingreso foto"></p>';
					}else{
					echo '<p><img src="uploads/'.$_SESSION["equipo"].'" height="100px" title="'.$_SESSION["nombre_apellido"].'"></p>';
					}
				?>
                <label for="imagen"><strong>No olvides subir tu Foto: </strong></label><br>
                <input name='uploadedfile' type='file'>
                </fieldset>
            </span>
            <span>
            	<fieldset class="sin_borde">
                	<input type="submit" name="enviar" value="Actualizar Datos">
                </fieldset>
            </span>
        </form>
    </dd>
</dl>
<p><a href="salir.php"><button>Cerrar Sesión</button></a> | <a href="panel.php"><button>Cancelar</button></a></p>
</section>
</body>
</html>
<script language="javascript" type="text/javascript">
	function Solo_Numerico(variable){
	Numer=parseInt(variable);
	if (isNaN(Numer)){
	return "";
	}
	return Numer;
	}
	function ValNumero(Control){
	Control.value=Solo_Numerico(Control.value);
	}
</script>
<?php
}
if(isset($_POST['enviar'])) 
{ 
    if($_POST['nombre_apellido'] == '' or $_POST['email'] == '' or $_POST['dni'] == '') 
    { 
        echo "<script type=\"text/javascript\">alert('Por favor llene todos los campos.'); window.location='update.php';</script>";
    } 
    else 
    { 
        $sql = 'SELECT * FROM pmkt_registro'; 
        $rec = mysql_query($sql); 
        $verificar_usuario = 0; 
  
        while($result = mysql_fetch_object($rec)) 
        { 
            if($result->email == $_POST['email']) 
            { 
                $verificar_usuario = 1; 
            } 
        } 
  
        if($verificar_usuario == 0) 
        { 
        } 
        else 
        { 				
		$target_path = "uploads/";
		$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
		if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) 
		{ 
		echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";
		}			
			$nombre = $_POST['nombre_apellido'];
			$email = $_POST['email']; 
			$dni = $_POST['dni'];
			$equipo=basename( $_FILES['uploadedfile']['name']);
	$sql = "UPDATE pmkt_registro SET nombre_apellido='$nombre', email='$email', dni='$dni', equipo='$equipo' WHERE id='$id'"; 
			mysql_query($sql); 
			$_SESSION["email"] = $email; 
			$_SESSION["dni"] = $dni; 
			$_SESSION["nombre_apellido"] = $nombre; 
			$_SESSION["equipo"] = $equipo;
			
			echo "<script type=\"text/javascript\">alert('Datos actualizados correctamente.'); window.location='panel.php';</script>";
        } 
    } 
} 
			
			

}else{
	echo '<script> window.location="login.php"; </script>';
}
?>