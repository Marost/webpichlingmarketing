<script src= 
"https://code.jquery.com/jquery-1.12.4.min.js"> 
</script> 
<style type="text/css"> 
	.selectt { 
		display: none; 
	} 
</style> 
<?php
session_start();
	include("../panel@pmarketing/conexion/conexion.php");
	include("../panel@pmarketing/conexion/funciones.php");
	include("variables.php");

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
		$id=$filas['id'];
		$nombre_apellido=$filas['nombre_apellido'];
		$email=$filas['email'];
		$foto=$filas['foto'];
		$dni=$filas['dni'];
		$asistencia=$filas['asistencia'];
		
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
                <input type="text" name="dni" id="dni" maxlength="8" size="50" value="<? echo $_SESSION["dni"];?>" />
                </fieldset>
            </span>
            <!--<span>
            	<fieldset class="sin_borde">
                <?php
					/*if($_SESSION["foto"]=="")
					{
					echo '<p><img src="uploads/'.$_SESSION["foto"].'" title="No ingreso foto"></p>';
					}else{
					echo '<p><img src="uploads/'.$_SESSION["foto"].'" height="100px" title="'.$_SESSION["nombre_apellido"].'"></p>';
					}*/
				?>
                <label for="imagen"><strong>No olvides subir tu Foto: </strong></label><br>
                <input name='uploadedfile' type='file'>
                </fieldset>
            </span>-->
            <span>
                <fieldset class="sin_borde">
                    <input type="radio" name="asistencia" <?php if($_SESSION["asistencia"]=="Solo"){echo 'checked="true"';}	?>value="Solo"/> Con gusto asistiré</br></br>
                    <!--<input type="radio" name="asistencia" <?php if($_SESSION["asistencia"]=="Acompanado"){echo 'checked="true"';}	?> value="Acompanado"  /> Asistiré con pareja</br></br>-->
                    <input type="radio" name="asistencia" <?php if($_SESSION["asistencia"]=="NoIras"){echo 'checked="true"';}	?> value="NoIras" /> No podré asistir
                </fieldset>
            </span>
            <div class="Solo selectt">
			</div>
            <div class="Acompanado selectt">
                <span>
                    <fieldset class="sin_borde">
                        <label for="pareja">Pareja: </label>
                        <input type="text" name="pareja" id="pareja" size="30" />
                    </fieldset>
                </span>
			</div>
            <div class="NoIras selectt">
			</div>
            <span>
                <input type="hidden" name="evento" id="evento" value="<?php echo $clave; ?>">
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
<script type="text/javascript"> 
	$(document).ready(function() { 
		$('input[type="radio"]').click(function() { 
			var inputValue = $(this).attr("value"); 
			var targetBox = $("." + inputValue); 
			$(".selectt").not(targetBox).hide(); 
			$(targetBox).show(); 
		}); 
	}); 
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
			else
			{
				if ($result->dni == $_POST['DNI']) 
				{
					$verificar_usuario = 1; 
					}
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
                $DNI = $_POST['dni'];
				//$foto=basename( $_FILES['uploadedfile']['name']);
				$asistencia=$_POST['asistencia'];
				$pareja=$_POST['pareja'];
				$evento=$_POST['evento'];
	$sql = "UPDATE pmkt_registro SET nombre_apellido='$nombre', email='$email', dni='$DNI', asistencia='$asistencia', pareja='$pareja', evento='$evento' WHERE id='$id'"; 
			mysql_query($sql); 
				$_SESSION["nombre_apellido"]=$nombre;
				$_SESSION['email']=$email;
				$_SESSION["dni"]=$DNI;
				$_SESSION["foto"]=$foto;
				$_SESSION["asistencia"]=$asistencia;
				$_SESSION["pareja"]=$pareja;
				$_SESSION["evento"]=$evento;
			
			echo "<script type=\"text/javascript\">alert('Datos actualizados correctamente.'); window.location='panel.php';</script>";
        } 
    } 
} 
			
			

}else{
	echo '<script> window.location="login.php"; </script>';
}
?>