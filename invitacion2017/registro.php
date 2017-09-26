<h4>INICIAR SESIÓN</h4>
<strong>Inicia Sesión para descargar tu invitación o actualizar tus datos</strong><br>
<?php
	session_start();
	//include("../panel@pmarketing/conexion/conexion.php");
	//include("../panel@pmarketing/conexion/funciones.php");
?>

<form action="perfil.php" method="post" id="subscribe-form">
<fieldset>
<span>
    <fieldset class="sin_borde">
    <label for="email">Email: </label>
    <input type="email" name="email" id="email" size="30" />
    </fieldset>
</span>
<span>
    <fieldset class="sin_borde">
    <label for="dni">DNI: </label>
    <input type="text" name="dni" id="dni" onkeyUp="return ValNumero(this);" maxlength="8" size="30" />
    </fieldset>
</span>
<span>
<input type="submit" name="iniciar" value="Iniciar Sesión">
</span>
</fieldset>
</form>
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
if(isset($_POST['iniciar'])) 
	{ 
	if($_POST['dni'] == '' or $_POST['email'] == '') 
		{ 
			echo 'Por favor llene todos los campos.'; 
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
						echo "Usuario no registrado";
					} 
				else 
					{ 
					
					//Comprobar si el Usuario existe
					
					$dni=$_POST['dni'];
					$email=$_POST['email'];
			
					$query =mysql_query("SELECT * FROM pmkt_registro WHERE dni='".$dni."' AND email='".$email."'");
			 
					$numrows=mysql_num_rows($query);
					if($numrows<>0) 
						{
						//if ($sql->num_row<>0){
								//$datos=$sql->fetch_array(MYSQLI_ASSOC);
								$datos=mysql_fetch_array($query);
								var_dump($datos);
								//Iniciar Sesion
								//$_SESSION["dni"]=$datos["dni"];
								$_SESSION["dni"]=$dni;
								$_SESSION["nombre_apellido"]=$datos["nombre_apellido"];
								$_SESSION["email"]=$datos["email"];
								$_SESSION["equipo"]=$datos["equipo"];
								//echo $_SESSION["dni"];
						}
					} 
		} 
	}
?>

