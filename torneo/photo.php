<?php
	session_start();
	include("../panel@pmarketing/conexion/conexion.php");
	include("../panel@pmarketing/conexion/funciones.php");
	
if(isset($_SESSION['email'])) {?>
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
									<?php
										if(isset($_GET["player"])){
											$consulta=mysql_query("SELECT * FROM pmkt_jugador WHERE (pmkt_jugador.id = '$_GET[player]')");
											$total_registros=mysql_num_rows($consulta);
											if ($total_registros >0){
												while($filas=mysql_fetch_array($consulta)){
													$id=$filas['id'];
													$nombre=$filas['nombre'];
													$foto=$filas['foto'];
													$email=$filas['email'];
													$password=$filas['password'];
												}
											}else{/*cerrando el if*/
												echo 'No se encontro al jugador...';
											}/*fin if*/
										}/*fin if de inicio de consulta*/
                                    ?>
									<div class="post">
										<header>
											<h2>Actualizar datos de <?php echo $_SESSION["equipo"];?></h2>
											<span class="byline">Cambiar Foto de <?php echo $nombre;?></span>
										</header>
                                        	<form enctype='multipart/form-data' class="g-form" action="" method="post" id="subscribe-form">
									<div class="g-form-group">
										<div class="g-form-group-rows">
                                        	<input type="hidden" name="nombre" value="<?php echo $nombre;?>">
                                            <input type="hidden" name="id" value="<?php echo $id;?>">
                                            <div class="g-form-row">
												<?php
                                                    if($foto=="")
                                                      {
                                                          echo '<p><img src="jugadores/'.$foto.'" title="No ingreso foto"></p>';
                                                      }else{
                                                              echo '<p><img src="jugadores/'.$foto.'" height="200px" title="'.$nombre.'"></p>';
                                                          } 
                                                ?>
                                            </div>
                                            <div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="foto">Subir Nueva Foto: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                    	<input name='uploadedfile' type='file' accept="image/*">
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
											<input type="hidden" name="email" value="<?php echo $email;?>">
                                            <input type="hidden" name="password" value="<?php echo $password;?>">
											<div class="g-form-row">
												<div class="g-form-row-label"></div>
												<div class="g-form-row-field">
                                                	<input type="submit" name="enviar" value="Actualizar Datos">
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
											if($_POST['email'] == '') 
											{ 
												echo "<script type=\"text/javascript\">alert('Por favor llene todos los campos obligatorios.'); window.location='update.php';</script>";
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
												} 
												else 
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
	echo "Hubo Error En La Subida Del Archivo!<br>";
	echo "Probar Nuevamente.<br>";
	exit();
	}
													
														$id = $_POST['id'];
														$nombre = $_POST['nombre'];
														//*$foto = basename( $_FILES['uploadedfile']['name']);
														$foto = $nambre;
														$sql = "UPDATE pmkt_jugador SET nombre='$nombre', foto='$foto' WHERE id='$id'"; 
														mysql_query($sql);
														/*$_SESSION["id"] = $id;
														$_SESSION["foto"] = $foto;*/
														echo "<script type=\"text/javascript\">alert('Foto de ".$nombre." actualizada correctamente.'); window.location='home.php';</script>";
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
}else{
	echo '<script> window.location="login.php"; </script>';
}
?>