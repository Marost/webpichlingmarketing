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

									<div class="post">
										<header>
											<h2>Actualizar datos de <?php echo $_SESSION["equipo"];?></h2>
											<span class="byline">Completa los datos faltantes de tu equipo</span>
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
                                                    	<input type="text" name="equipo" id="equipo" size="30" value="<?php echo $_SESSION["equipo"];?>" autocomplete="off" required/>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
                                            <input type="hidden" name="id" value="<?php echo $_SESSION["id"];?>">
											<?php
												if($_SESSION["escudo"]=="")
												  {
													  echo '<p><img src="uploads/'.$_SESSION["escudo"].'" title="No ingreso foto"></p>';
												  }else{
														  echo '<p><img src="uploads/'.$_SESSION["escudo"].'" height="200px" title="'.$_SESSION["equipo"].'"></p>';
													  } 
                                            ?>
                                            <a href="shield.php" class="button">Actualizar Foto de Escudo</a>
                                            <div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="empresa">Empresa: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                    	<input type="text" name="empresa" id="empresa" size="30" value="<?php echo $_SESSION["empresa"];?>" autocomplete="off"/>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
                                            <div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="entrenador">Entrenador: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                    	<input type="text" name="entrenador" id="entrenador" size="30" value="<?php echo $_SESSION["entrenador"];?>" autocomplete="off"/>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
                                            <div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="delegado">Delegado: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                        <select id="delegado" name="delegado" style="width: 300px;">
                                                            <option value="<?php echo $_SESSION["delegado"];?>"><?php echo $_SESSION["delegado"];?></option>
                                                            <?php 
																$consulta = mysql_query("SELECT * FROM pmkt_jugador WHERE equipo='".$_SESSION['equipo']."' order by camiseta");
																while($filas=mysql_fetch_array($consulta)){
																	$nombre=$filas['nombre'];
																	echo '<option value="'.$nombre.'">'.$nombre.'</option>';
															  	}
															?>
                                                        </select>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
                                            <div class="g-form-row">
												<div class="g-form-row-label">
                                                	<label class="g-form-row-label-h" for="capitan">Capitán: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                        <select id="capitan" name="capitan" style="width: 300px;">
                                                            <option value="<?php echo $_SESSION["capitan"];?>"><?php echo $_SESSION["capitan"];?></option>
                                                            <?php 
																$consulta = mysql_query("SELECT * FROM pmkt_jugador WHERE equipo='".$_SESSION['equipo']."' order by camiseta");
																while($filas=mysql_fetch_array($consulta)){
																	$nombre=$filas['nombre'];
																	echo '<option value="'.$nombre.'">'.$nombre.'</option>';
															  	}
															?>
                                                        </select>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
											<?php
                                                if($_SESSION["foto_equipo"]=="")
                                                  {
                                                      echo '<p><img src="equipos/'.$_SESSION["foto_equipo"].'" title="No ingreso foto"></p>';
                                                  }else{
                                                          echo '<p><img src="equipos/'.$_SESSION["foto_equipo"].'" height="200px" title="'.$_SESSION["equipo"].'"></p>';
                                                      } 
                                            ?>
                                            <a href="team.php" class="button">Actualizar Foto de Equipo</a>
											<div class="g-form-row">
												<div class="g-form-row-label">
													<label class="g-form-row-label-h" for="email">Email*: </label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
                                                    	<input type="email" name="email" id="email" size="30"value="<?php echo $_SESSION["email"];?>" autocomplete="off" required/>
													</div>
												</div>
												<div class="g-form-row-state"></div>
											</div>
                                            <input type="hidden" name="password" value="<?php echo $_SESSION["password"];?>">
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
											if($_POST['equipo'] == '' or $_POST['email'] == '') 
											{ 
												echo "<script type=\"text/javascript\">alert('Por favor llene todos los campos obligatorios.'); window.location='update.php';</script>";
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
												} 
												else 
												{
														$id = $_POST['id'];	
														$equipo = $_POST['equipo'];
														$empresa = $_POST['empresa']; 
														$entrenador = $_POST['entrenador'];
														$delegado = $_POST['delegado']; 
														$capitan = $_POST['capitan'];
														$email = $_POST['email'];
														$password = $_POST['password'];
														$sql = "UPDATE pmkt_equipo SET equipo='$equipo', empresa='$empresa', entrenador='$entrenador', delegado='$delegado', capitan='$capitan', email='$email' WHERE id='$id'"; 
														mysql_query($sql);
														$_SESSION["id"] = $id;
														$_SESSION["equipo"] = $equipo;
														$_SESSION["empresa"] = $empresa;
														$_SESSION["entrenador"] = $entrenador;
														$_SESSION["delegado"] = $delegado;
														$_SESSION["capitan"] = $capitan;
														$_SESSION["email"] = $email;
														$_SESSION["password"] = $password;
														echo "<script type=\"text/javascript\">alert('Datos actualizados correctamente.'); window.location='home.php';</script>";
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