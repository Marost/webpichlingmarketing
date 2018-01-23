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
												$empresa=$filas['empresa'];
												$equipo=$filas['equipo'];
												$foto=$filas['foto'];
												$camiseta=$filas['camiseta'];
												$posicion=$filas['posicion'];
												$telefono=$filas['telefono'];
												$dni=$filas['dni'];
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
											<span class="byline">Completa los datos de <?php echo $nombre;?></span>
										</header>
                                        	<form enctype='multipart/form-data' class="g-form" action="" method="post" id="subscribe-form">
									<div class="g-form-group">
										<div class="g-form-group-rows">
                                        	<?php
                                                if($foto=="")
                                                  {
                                                      echo '<p><img src="jugadores/'.$foto.'" title="No ingreso foto"></p>';
                                                  }else{
                                                          echo '<p><img src="jugadores/'.$foto.'" height="200px" title="'.$nombre.'"></p>';
                                                      } 
                                            ?>
                                            <a href="photo.php?player=<?php echo $id;?>.php" class="button">Actualizar Foto del Jugador</a>
											<div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="nombre">Nombre del Jugador*: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                    	<input type="text" name="nombre" id="nombre" size="30" value="<?php echo $nombre;?>" autocomplete="off" required/>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
                                            <input type="hidden" name="id" value="<?php echo $id;?>">
                                            <div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="empresa">Empresa: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                    	<input type="text" name="empresa" id="empresa" size="30" value="<?php echo $empresa;?>" disabled autocomplete="off"/>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
                                            <div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="equipo">Equipo: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                    	<input type="text" name="equipo" id="equipo" size="30" value="<?php echo $equipo;?>" disabled autocomplete="off"/>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
                                            <div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="camiseta">Número de Camiseta*: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                    	<input type="text" name="camiseta" id="camiseta" size="30" onkeyUp="return ValNumero(this);" maxlength="3" value="<?php echo $camiseta;?>" autocomplete="off"/>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
                                            <div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="posicion">Posición en cancha: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                        <select id="posicion" name="posicion" style="width: 300px;">
                                                            <option value="<?php echo $posicion;?>"><?php echo $posicion;?></option>
                                                            <?php 
																$pregunta = mysql_query("SELECT * FROM pmkt_posicion");
																while($fil=mysql_fetch_array($pregunta)){
																	$lugar=$fil['posicion'];
																	echo '<option value="'.$lugar.'">'.$lugar.'</option>';
															  	}
															?>
                                                        </select>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
                                            <div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="telefono">Número de Celular: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                    	<input type="text" name="telefono" id="telefono" size="30" onkeyUp="return ValNumero(this);" maxlength="9" value="<?php echo $telefono;?>" autocomplete="off"/>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
                                            <div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="dni">Número de DNI: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                    	<input type="text" name="dni" id="dni" size="30" onkeyUp="return ValNumero(this);" maxlength="8" value="<?php echo $dni;?>" autocomplete="off"/>
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
                                                    	<input type="email" name="email" id="email" size="30"value="<?php echo $email;?>" autocomplete="off" required/>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
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
											if($_POST['nombre'] == '' or $_POST['camiseta'] == '' or $_POST['email'] == '') 
											{ 
												echo "<script type=\"text/javascript\">alert('Por favor llene todos los campos obligatorios.'); window.location='edit.php';</script>";
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
														$id = $_POST['id'];	
														$nombre = $_POST['nombre'];
														$camiseta = $_POST['camiseta'];
														$posicion = $_POST['posicion'];
														$telefono = $_POST['telefono'];
														$dni = $_POST['dni'];
														$email = $_POST['email'];
														$password = $_POST['password'];
														$sql = "UPDATE pmkt_jugador SET nombre='$nombre', camiseta='$camiseta', posicion='$posicion', telefono='$telefono', dni='$dni', email='$email' WHERE id='$id'"; 
														mysql_query($sql);
														/*$_SESSION["id"] = $id;
														$_SESSION["equipo"] = $equipo;
														$_SESSION["empresa"] = $empresa;
														$_SESSION["entrenador"] = $entrenador;
														$_SESSION["delegado"] = $delegado;
														$_SESSION["capitan"] = $capitan;
														$_SESSION["email"] = $email;
														$_SESSION["password"] = $password;*/
														echo "<script type=\"text/javascript\">alert('Datos de ".$nombre." actualizados correctamente.'); window.location='home.php';</script>";
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
	echo '<script> window.location="login.php"; </script>';
}
?>