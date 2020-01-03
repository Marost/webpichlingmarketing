<script src= 
"https://code.jquery.com/jquery-1.12.4.min.js"> 
</script> 
<style type="text/css"> 
	.selectt { 
		display: none; 
	} 
</style> 
<h4>CONFIRMACIÓN</h4>
<dl>
    <strong style="font-size:12px;">Completa tus datos y confirma tu asistencia</strong>
    <dd>
        <form enctype='multipart/form-data' action="" method="post" id="subscribe-form" style="display:block">
            <span>
                <fieldset class="sin_borde">
                    <label for="nombre_apellido">Nombres y Apellidos: </label>
                    <br />
                    <input type="text" name="nombre_apellido" id="nombre_apellido" />
                </fieldset>
            </span>
            <span>
                <fieldset class="sin_borde">
                    <label for="email">Email: </label>
                    <br />
                    <input type="email" name="email" id="email" />
                </fieldset>
            </span>
            <span>
                <fieldset class="sin_borde">
                    <label for="DNI">DNI: </label>
                    <br />
                    <input type="text" name="DNI" id="DNI" maxlength="8" />
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
                    <input type="radio" name="asistencia" value="Solo" /> Si asistiré</br></br>
                    <!--<input type="radio" name="asistencia" value="Acompanado"/> Asistiré con acompañante</br></br>-->
                    <input type="radio" name="asistencia" value="NoIras" /> No podré asistir
                </fieldset>
            </span>
            <div class="Solo selectt">
			</div>
            <div class="Acompanado selectt">
                <span>
                    <fieldset class="sin_borde">
                        <label for="pareja"><strong>Nombre del acompañante: </strong></label>
                        <br />
                        <input type="text" name="pareja" id="pareja" placeholder="Insertar nombre"/>
                    </fieldset>
                </span>
			</div>
            <div class="NoIras selectt">
			</div>
            <span>
                <input type="hidden" name="evento" id="evento" value="25 Anos">
            </span>
            <span>
            	<br />
                <input type="submit" name="enviar" value="Confirmar">
            </span>
        </form>
    </dd>
</dl>
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
            if($result->email == $_POST['email'] and $result->evento == "25 Anos")
            { 
                $verificar_usuario = 1;
				}
			else
			{
				if($result->dni == $_POST['DNI'] and $result->evento == "25 Anos")
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
				$pareja=$_POST['pareja'];
				$evento=$_POST['evento'];
				
				$sql = "INSERT INTO pmkt_registro (nombre_apellido, email, DNI, asistencia, pareja, evento) VALUES ('$nombre', '$email', '$DNI', '$asistencia', '$pareja', '$evento')"; 
                mysql_query($sql); 
				
				//$sel=mysql_query("SELECT email, password FROM cdsm_registro WHERE email = '$_POST[email]'");
			 	//$datos=mysql_fetch_array($sel);
				//Iniciar Sesion
				$_SESSION['nombre_apellido']=$nombre;
				$_SESSION['email']=$email;
				$_SESSION["DNI"]=$DNI;
				$_SESSION["asistencia"]=$asistencia;
				$_SESSION["pareja"]=$pareja;
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