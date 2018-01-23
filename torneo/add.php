<?php
	session_start();
	include("../panel@pmarketing/conexion/conexion.php");
	include("../panel@pmarketing/conexion/funciones.php");
	
	if(isset($_SESSION['email'])) {
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
<?php
	$log = mysql_query("SELECT * FROM pmkt_equipo WHERE email='".$_SESSION['email']."'");
	if (mysql_num_rows($log)>0) {
		$row = mysql_fetch_array($log);
		$_SESSION["id"] = $row['id'];
		$_SESSION["equipo"] = $row['equipo'];
		$_SESSION["escudo"] = $row['escudo'];
		$_SESSION["empresa"] = $row['empresa'];
		$_SESSION["entrenador"] = $row['entrenador'];
		$_SESSION["delegado"] = $row['delegado'];
		$_SESSION["capitan"] = $row['capitan'];
		$_SESSION["foto_equipo"] = $row['foto_equipo'];
		$_SESSION["email"] = $row['email'];
		$_SESSION["password"] = $row['password']; 
	}
?>
                    <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li><a href="index.php">Principal</a></li>
                            <li><a href="register.php">Registro de Equipos</a></li>
                            <li><a href="login.php">Iniciar Sesión</a></li>
                            <li class="active"><a href="home.php">Perfil del Equipo</a></li>
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
											<h2>Registrar Jugador</h2>
											<span class="byline">Completa el formulario para registrar a tu jugador</span>
										</header>
                                        	<form enctype='multipart/form-data' class="g-form" action="" method="post" id="subscribe-form">
									<div class="g-form-group">
										<div class="g-form-group-rows">
											<div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="nombre">Nombre del Jugador: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                    	<input type="text" name="nombre" id="nombre" size="30" autocomplete="off" required/>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
                                            <input type="hidden" name="empresa" value="<?php echo $_SESSION["empresa"];?>">
                                            <input type="hidden" name="equipo" value="<?php echo $_SESSION["equipo"];?>">
                                            <div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="foto">Foto del Jugador: </label>
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
                                                	<label class="g-form-row-label-h" for="camiseta">Numero de Camiseta: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                    	<input type="text" name="camiseta" id="camiseta" size="30" onkeyUp="return ValNumero(this);" maxlength="3" autocomplete="off" required/>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
											<div class="g-form-row">
												<div class="g-form-row-label">
													<label class="g-form-row-label-h" for="email">Email: </label>
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
                                                	<label class="g-form-row-label-h" for="password">Contraseña: </label>
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
                                                	<label class="g-form-row-label-h" for="repeat_password">Repetir Contraseña: </label>
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
                                                	<input type="submit" name="enviar" value="Registrar Jugador">
												</div>
											</div>
										</div>
									</div>
								</form>
                                <p><a href="home.php"><button>Cancelar</button></a></p>
                                <p><a href="logout.php"><button>Cerrar Sesión</button></a></p>

                                        <?php
                                        if(isset($_POST['enviar'])) 
                                        { 
                                            if($_POST['nombre'] == '' or $_POST['email'] == '' or $_POST['password'] == '' or $_POST['repeat_password'] == '') 
                                            { 
                                                echo "<script type=\"text/javascript\">alert('Por favor llene todos los campos.'); window.location='add.php';</script>";
                                            } 
                                            else 
                                            { 
                                                $sql = 'SELECT * FROM pmkt_jugador'; 
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
                                                    
                                                    /*$target_path = "jugadores/";
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
	$SUBIRADIRECCION = $_SERVER['DOCUMENT_ROOT']."/torneo/jugadores/";
	$SUBIRADIRECCION .= "$archivo";
	$SUBIRADIRECCIONXYZ = $_SERVER['DOCUMENT_ROOT']."/torneo/jugadores/";
	$SUBIRADIRECCIONXYZ .= "$nambre";
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $SUBIRADIRECCION)) { // se coloca en su lugar final
		if($_FILES['uploadedfile']['size'] == "0") {
			echo "No Se Pudo Transferir El Contenido Adecuadamente<br>";
			echo "Intentelo Nuevamente<br>";
			echo "GRACIAS<br>";
			exit();
			}
		$rutaarchivosxxx = $_SERVER['DOCUMENT_ROOT']."/torneo/jugadores/$nambre";
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
	/*echo "Hubo Error En La Subida Del Archivo!<br>";
	echo "Probar Nuevamente.<br>";
	exit();*/
	}
                                                        $nombre = $_POST['nombre'];
														$empresa = $_POST['empresa'];
														$equipo = $_POST['equipo'];
														//$foto=basename( $_FILES['uploadedfile']['name']);
														$foto = $nambre;
														$camiseta = $_POST['camiseta'];
                                                        $email = $_POST['email']; 
                                                        $password = $_POST['password']; 
                                                        
                                                        $sql = "INSERT INTO pmkt_jugador (nombre, empresa, equipo, foto, camiseta, email, password) VALUES ('$nombre', '$empresa', '$equipo', '$foto', '$camiseta', '$email', '$password')"; 
                                                        mysql_query($sql); 
                                                        //Iniciar Sesion
                                                        /*$_SESSION["nombre"]=$nombre;
                                                        $_SESSION['foto']=$foto;
														$_SESSION['camiseta']=$camiseta;*/
                                        
                                                        //echo $_SESSION["nombre_apellido"].'  usted se ha registrado correctamente.';
                                        
                                                        echo "<script type=\"text/javascript\">alert('¡".$nombre." Registrado!'); window.location='home.php';</script>";
                                                    }
                                                    else 
                                                    { 
                                                        echo "<script type=\"text/javascript\">alert('Las claves no son iguales, intente nuevamente.'); window.location='add.php';</script>";
                                                    } 
                                                } 
                                                else 
                                                { 				
                                                    echo "<script type=\"text/javascript\">alert('Este jugador ya se encuentra en la lista del equipo.'); window.location='add.php';</script>";
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
</html>
<?php	
}else{
	echo '<script> window.location="home.php"; </script>';
}
?>
