<?php
	session_start();
	include("../panel@pmarketing/conexion/conexion.php");
	//include("../panel@pmarketing/conexion/funciones.php");

	if(isset($_SESSION["dni"])){ ?>

<form action="" method="post" id="subscribe-form">
<fieldset>
<span>
<input type="text" name="nombre_apellido" value="<?php echo $_SESSION["nombre_apellido"];?>">
</span>
<span>
<input type="email" name="email" value="<?php echo $_SESSION["email"];?>">
</span>
<span>
<input type="text" name="dni" value="<?php echo $_SESSION["dni"];?>">
</span>
<span>
<input type="text" name="equipo" value="<?php echo $_SESSION["equipo"];?>">
</span>
<span>
<input type="submit" name="actualizar" value="Actualizar">
</span>
<a href="salir.php">Cerrar Sesion</a>
</fieldset>
</form>

<?php
if(isset($_POST['actualizar'])) 
{ 
if($_POST['dni'] == '' or $_POST['email'] == '' or $_POST['equipo'] == '' or $_POST['nombre_apellido'] == '') 
{ 
echo 'Por favor llene todos los campos.'; 
} 
else 
{ 
$sql = 'SELECT * FROM pmkt_registro'; 
$rec = mysql_query($sql); 


$nombre = $_POST['nombre_apellido'];
$email = $_POST['email']; 
$dni= $_POST['dni'];
$equipo= $_POST['equipo'];

$sql = "UPDATE pmkt_registro SET nombre_apellido='$nombre', email='$email', equipo='$equipo', dni='$dni' WHERE dni='$dni'"; 
mysql_query($sql); 

//Iniciar Sesion
$_SESSION["nombre_apellido"]=$nombre;
$_SESSION["email"]=$email;
$_SESSION["dni"]=$dni;
$_SESSION["equipo"]=$equipo;

echo $_SESSION["nombre_apellido"].' sus datos se han actualizado correctamente.';
?>
<form action="" method="post" id="subscribe-form">
<fieldset>
<span>
<input type="text" name="nombre_apellido" value="<?php echo $_SESSION["nombre_apellido"];?>">
</span>
<span>
<input type="email" name="email" value="<?php echo $_SESSION["email"];?>">
</span>
<span>
<input type="text" name="dni" value="<?php echo $_SESSION["dni"];?>">
</span>
<span>
<input type="text" name="equipo" value="<?php echo $_SESSION["equipo"];?>">
</span>
<span>
<input type="submit" name="actualizar" value="Actualizar">
</span>
<a href="salir.php">Cerrar Sesion</a>
</fieldset>
</form>
<?php
} 
} 
}else{
echo 'No puedes ver esta página, <a href="salir.php">Registrate ó Inicia Sesión</a>';
} ?>
