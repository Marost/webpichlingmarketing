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
						<div class="row">
							<div id="content" class="8u">
								<section>
									<div class="post">
										<header>
											<h2><?php echo $_SESSION["equipo"];?></h2>
											<span class="byline">Lista de Jugadores</span>
										</header>
                                        <p>
                                        	<table style="width:100%">
                                            	<tr>
                                                    <th><strong>Camiseta</strong></th>
                                                    <th><strong>Nombre del Jugador</strong></th> 
                                                    <th><strong>Foto</strong></th>
                                                    <th><strong>Editar</strong></th>
                                              	</tr>
													<?php $consulta = mysql_query("SELECT * FROM pmkt_jugador WHERE equipo='".$_SESSION['equipo']."' order by camiseta");
                                                        while($filas=mysql_fetch_array($consulta)){
															$id=$filas['id'];
                                                            $camiseta=$filas['camiseta'];
                                                            $nombre=$filas['nombre'];
                                                            $foto=$filas['foto'];
                                                            
                                                            echo '<tr>
															<td style="text-align: center">'.$camiseta.'</td>
                                                            <td>'.$nombre.'</td>
                                                            <td style="text-align: center"><img src="jugadores/'.$foto.'" height="20" title="'.$nombre.'"></td>
															<td style="text-align: center"><a href="edit.php?player='.$id.'.php"><button>Editar</button></a></td>
															</tr>';
                                                        }
                                                    ?>
                                            </table>
                                        </p>
										<div class="image-style"><a href="#" class="image featured"><img src="equipos/<?php echo $_SESSION["foto_equipo"];?>" alt=""></a></div>
										<p><a href="add.php" class="button">Agregar jugadores</a></p>
										<div class="separator">&nbsp;</div>
									</div>
								</section>
								<!--<section>
									<header>
										<h2>Blandit Veroeros Consequat</h2>
										<span class="byline">Erat diam dui quis neque suspendisse potenti lorem</span>
									</header>
									<p>Mauris posuere eros vel metus laoreet auctor. In sodales tincidunt volutpat. Nunc pulvinar massa id risus porta hendrerit. Nunc nec nibh velit, sit amet consectetur neque. Ut et erat non eros imperdiet bibendum. Donec sit amet diam dui. Ut quis neque diam, sit amet sollicitudin magna. Aenean eu suscipit tellus. Suspendisse potenti. Nullam gravida nisl auctor tortor viverra adipiscing aenean et velit vel felis iaculis semper vitae quis erat.</p>
									<div class="image-style"><a href="#" class="image featured"><img src="images/img19.jpg" alt=""></a></div>
									<p><a href="#" class="button">Continue Reading</a></p>
								</section>-->
							</div>
							<div id="sidebar" class="4u">
							
										<section>
											<section>
											<?php
												if($_SESSION["escudo"]=="")
												  {
													  echo '<p><img src="uploads/'.$_SESSION["escudo"].'" title="No ingreso foto"></p>';
												  }else{
														  echo '<p><img src="uploads/'.$_SESSION["escudo"].'" height="200px" title="'.$_SESSION["equipo"].'"></p>';
													  } 
											?>
												<h2>Datos del Equipo</h2>
												<p><strong>Nombre del Equipo: </strong><?php echo $_SESSION["equipo"];?></p>
                                                <p><strong>Empresa: </strong><?php echo $_SESSION["empresa"];?></p>
                                                <p><strong>Entrenador: </strong><?php echo $_SESSION["entrenador"];?></p>
                                                <p><strong>Delegado: </strong><?php echo $_SESSION["delegado"];?></p>
                                                <p><strong>Capitán: </strong><?php echo $_SESSION["capitan"];?></p>
                                                <p><strong>Email Registrado: </strong><?php echo $_SESSION["email"];?></p>
                                                <p><?php
                                                	if($_SESSION["email"] == 'daniel_ronald17@hotmail.com') 
														{ 
														echo '<p><a href="update.php"><button>Actualizar Datos de Equipo</button></a></p>
														<p><a href="registered_teams.php"><button>Lista de Equipos Inscritos</button></a></p>
														<p><a href="registered_players.php"><button>Lista de Jugadores Regitrados</button></a></p>
														<p><a href="logout.php"><button>Cerrar Sesión</button></a></p>';
														}else{
														echo '<p><a href="update.php"><button>Actualizar Datos de Equipo</button></a></p>
														<p><a href="logout.php"><button>Cerrar Sesión</button></a></p>';
														}
												?></p>
											</section>
											<!--<section>
												<p><a href="#" class="image full"><img src="images/img14.jpg" alt=""></a></p>
												<h2>Sed Amet Phasellus</h2>
												<p>Mauris et posuere vel metus auctor. In sodales et tincidunt id risus porta hendrerit. Nunc nec nibh velit, amet consectetur neque. Ut sed non eros imperdiet bibendum.</p>
											</section>
											<section>
												<p><a href="#" class="image full"><img src="images/img21.jpg" alt=""></a></p>
												<h2>Sed Amet Phasellus</h2>
												<p>Mauris et posuere vel metus auctor. In sodales et tincidunt id risus porta hendrerit. Nunc nec nibh velit, amet consectetur neque. Ut sed non eros imperdiet bibendum.</p>
											</section>-->
										</section>
							</div>
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