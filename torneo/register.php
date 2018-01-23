<?php
	session_start();
	include("../panel@pmarketing/conexion/conexion.php");
	include("../panel@pmarketing/conexion/funciones.php");
	
	if(isset($_SESSION['email'])) {
		echo '<script> window.location="home.php"; </script>';
	}else{
?>
<!DOCTYPE HTML>
<html>
	<?php require_once("head.php"); ?>
	<body class="homepage">

	<!-- Wrapper -->
		<div id="wrapper">

			<!-- Header -->
			<div id="header">
                <div class="container">
                    <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li><a href="index.php">Principal</a></li>
                            <li class="active"><a href="register.php">Registro de Equipos</a></li>
                            <li><a href="login.php">Iniciar Sesión</a></li>
                            <li><a href="home.php">Perfil del Equipo</a></li>
                        </ul>
                    </nav>
                </div>
				<?php require_once("nav.php"); ?>
			</div>
			<!-- /Header -->
			
		<!-- Main -->
			<div id="main-wrapper">
					<div class="divider">&nbsp;</div>
				<div id="main">
					<div class="container">
						<div class="row">
								<section>

									<div class="post">
										<header>
											<h2>Registrar Equipo</h2>
											<span class="byline">Completa el formulario para registrar a tu equipo</span>
										</header>
                                        	<form enctype='multipart/form-data' class="g-form" action="" method="post" id="subscribe-form">
									<div class="g-form-group">
										<div class="g-form-group-rows">
											<div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="equipo">Nombre de Equipo*: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                    	<input type="text" name="equipo" id="equipo" size="30" autocomplete="off" required/>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
                                            <div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="escudo">Escudo del Equipo: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                    	<input name='uploadedfile' type='file' accept="image/*">
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
											<div class="g-form-row">
												<div class="g-form-row-label">
													<label class="g-form-row-label-h" for="email">Email*: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                    	<input type="email" name="email" id="email" size="30" autocomplete="off" required/>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
											<div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="password">Contraseña*: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                    	<input type="password" name="password" id="password" size="30" autocomplete="off" required/>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
                                            <div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="repeat_password">Repetir Contraseña*: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                    	<input type="password" name="repeat_password" id="repeat_password" size="30" autocomplete="off" required/>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
											<div class="g-form-row">
												<div class="g-form-row-label"></div>
												<div class="g-form-row-field">
                                                	<input type="submit" name="enviar" value="Registrar Equipo">
												</div>
											</div>
										</div>
									</div>
								</form>

                                        <?php
                                        if(isset($_POST['enviar'])) 
                                        { 
                                            if($_POST['equipo'] == '' or $_POST['email'] == '' or $_POST['password'] == '' or $_POST['repeat_password'] == '') 
                                            { 
                                                echo "<script type=\"text/javascript\">alert('Por favor llene todos los campos.'); window.location='salir.php';</script>";
                                            } 
                                            else 
                                            { 
                                                $sql = 'SELECT * FROM pmkt_equipo'; 
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
                                                    if($_POST['password'] == $_POST['repeat_password']) 
                                                    { 
                                                    
                                                    /*$target_path = "uploads/";
                                                    $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
                                                    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) 
                                                    { 
                                                    echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";
                                                    }*/
if(is_uploaded_file($_FILES['uploadedfile']['tmp_name'])) { // verifica haya sido cargado el archivo
	$archivo = $_FILES['uploadedfile']['name'];
	$tipo = stristr($archivo,'.');
	$nambre = $_POST['email'].$tipo;
	$nambre = strtolower($nambre);
	$nambre = rtrim($nambre);
	$SUBIRADIRECCION = $_SERVER['DOCUMENT_ROOT']."/torneo/uploads/";
	$SUBIRADIRECCION .= "$archivo";
	$SUBIRADIRECCIONXYZ = $_SERVER['DOCUMENT_ROOT']."/torneo/uploads/";
	$SUBIRADIRECCIONXYZ .= "$nambre";
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $SUBIRADIRECCION)) { // se coloca en su lugar final
		if($_FILES['uploadedfile']['size'] == "0") {
			echo "No Se Pudo Transferir El Contenido Adecuadamente<br>";
			echo "Intentelo Nuevamente<br>";
			echo "GRACIAS<br>";
			exit();
			}
		$rutaarchivosxxx = $_SERVER['DOCUMENT_ROOT']."/torneo/uploads/$nambre";
		/*if(file_exists($rutaarchivosxxx)) {
			echo "El Nombre De Archivo YA EXISTE!<br>";
			echo "CAMBIELO!!!<br>";
			echo "E Intentelo Nuevamente!<br>";
			echo "GRACIAS<br>";
			exit();
			}*/
		rename("$SUBIRADIRECCION", "$SUBIRADIRECCIONXYZ"); 
		/*echo "<b>Upload exitoso!. Datos:</b><br>";
		echo "Nombre: <i><a href=\"http://tusitio.com/jugadores/$nambre\">".$nambre."</a></i><br>"; 
		echo "Tipo MIME: <i>".$_FILES['uploadedfile']['type']."</i><br>"; 
		echo "Tamaño: <i>".$_FILES['uploadedfile']['size']." bytes</i><br>"; 
		echo "<hr><br>";*/ 
		}
	else {
		echo "No Se Pudo Colocar El Archivo En Su Ubicacion Final!<br>";
		echo "Probar Nuevamente.<br>";
		exit();
		} 
	}
else {
	echo "Hubo Error En La Subida Del Archivo!<br>";
	echo "Probar Nuevamente.<br>";
	exit();
	}
                                                    
                                                        $equipo = $_POST['equipo'];
														//$escudo=basename( $_FILES['uploadedfile']['name']);
														$escudo = $nambre;
                                                        $email = $_POST['email']; 
                                                        $password = $_POST['password']; 
                                                        
                                                        $sql = "INSERT INTO pmkt_equipo (equipo, escudo, email, password) VALUES ('$equipo', '$escudo', '$email', '$password')"; 
                                                        mysql_query($sql); 
                                                        
                                                        //$sel=mysql_query("SELECT email, password FROM cdsm_registro WHERE email = '$_POST[email]'");
                                                        //$datos=mysql_fetch_array($sel);
                                                        //Iniciar Sesion
                                                        $_SESSION["equipo"]=$equipo;
                                                        $_SESSION['escudo']=$escudo;
                                                        $_SESSION["email"]=$email;
                                                        $_SESSION["password"]=$password;
                                        
                                                        //echo $_SESSION["nombre_apellido"].'  usted se ha registrado correctamente.';
                                        
                                                        echo "<script type=\"text/javascript\">alert('¡Equipo Registrado, Ahora debes ingresar a los jugadores de tu equipo'); window.location='home.php';</script>";
                                                    }
                                                    else 
                                                    { 
                                                        echo "<script type=\"text/javascript\">alert('Las claves no son iguales, intente nuevamente.'); window.location='register.php';</script>";
                                                    } 
                                                } 
                                                else 
                                                { 				
                                                    echo "<script type=\"text/javascript\">alert('Este usuario ya se encuentra en la lista de equipos registrados.'); window.location='register.php';</script>";
                                                } 
                                            } 
                                        } 
                                        ?>
									</div>

								</section>
							</div>
					</div>
				</div>
			</div>
		<!-- /Main -->
			
		</div>
	<!-- /Wrapper -->

	<!-- Copyright -->
	<?php require_once("copyright.php"); ?>
	</body>
</html>
<?php	
}
?>
