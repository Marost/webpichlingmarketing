<h4>CONFIRMACIÓN</h4>
<dl>
    <strong style="font-size:12px;">Completa tus datos y confirma tu asistencia</strong>
    <dd>
        <form enctype='multipart/form-data' action="" method="post" id="subscribe-form" style="display:block">
            <span>
                <fieldset class="sin_borde">
                    <label for="nombre_apellido">Nombres y Apellidos: </label>
                    <input type="text" name="nombre_apellido" id="nombre_apellido" size="30" />
                </fieldset>
            </span>
            <span>
                <fieldset class="sin_borde">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" size="30" />
                </fieldset>
            </span>
            <span>
                <fieldset class="sin_borde">
                    <label for="DNI">DNI: </label>
                    <input type="text" name="DNI" id="DNI" maxlength="8" size="30" />
                </fieldset>
            </span>
            <!--<span>
            	<fieldset class="sin_borde">
                    <label for="imagen"><strong>No olvides subir tu Foto: </strong></label>
                    <input name='uploadedfile' type='file'  accept="image/*" style="font-size:10.3px">
                </fieldset>
            </span>-->
            <span>
                <fieldset class="sin_borde">
                    <input type="radio" name="asistencia" value="Solo(a)"/> Asistiré solo(a)</br></br>
                    <input type="radio" name="asistencia" value="Acompañado(a)" /> Asistiré con pareja</br></br>
                    <input type="radio" name="asistencia" value="No Irás" /> No podré asistir
                </fieldset>
            </span>
            <span>
                <input type="hidden" name="evento" value="50 Anos">
            </span>
            <span>
            	<br />
                <input type="submit" name="enviar" value="Confirmar">-->
            </span>
        </form>
    </dd>
</dl>
<?php
if(isset($_POST['enviar'])) 
{ 
    if($_POST['nombre_apellido'] == '' or $_POST['email'] == '' or $_POST['DNI'] == '' or $_POST['asistencia'] == '') 
    { 
        echo "<script type=\"text/javascript\">alert('Por favor llene todos los campos.'); window.location='salir.php';</script>";
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
            if($_POST['dni'] == $_POST['dni']) 
            { 
			
			$target_path = "uploads/";
			$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
			if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) 
			{ 
			echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";
			}//else{
			//echo "Ha ocurrido un error, trate de nuevo!";
			//} 
			
			 	$nombre = $_POST['nombre_apellido'];
				$email = $_POST['email'];
                $DNI = $_POST['DNI'];
				//$foto=basename( $_FILES['uploadedfile']['name']);
				$asistencia=$_POST['asistencia'];
				$evento=$_POST['evento'];
				
				$sql = "INSERT INTO pmkt_registro (nombre_apellido, email, DNI, asistencia, evento) VALUES ('$nombre', '$email', '$DNI', '$asistencia', '$evento')"; 
                mysql_query($sql); 
				
				//$sel=mysql_query("SELECT email, password FROM cdsm_registro WHERE email = '$_POST[email]'");
			 	//$datos=mysql_fetch_array($sel);
				//Iniciar Sesion
				$_SESSION["nombre_apellido"]=$nombre;
				$_SESSION['email']=$email;
				$_SESSION["DNI"]=$DNI;
				$_SESSION["asistencia"]=$asistencia;
				$_SESSION["evento"]=$evento;

                //echo $_SESSION["nombre_apellido"].'  usted se ha registrado correctamente.';

				echo "<script type=\"text/javascript\">alert('¡Tu confirmación ha sido exitosa!'); window.location='salir.php';</script>";
            }
            else 
            { 
                echo 'Las claves no son iguales, intente nuevamente.'; 
            } 
        } 
        else 
        { 				
			echo "<script type=\"text/javascript\">alert('Este usuario ya se encuentra en la lista de invitados.'); window.location='salir.php';</script>";
        } 
    } 
} 
?>