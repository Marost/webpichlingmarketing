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
                            <li><a href="register.php">Registro de Equipos</a></li>
                            <li class="active"><a href="login.php">Iniciar Sesión</a></li>
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
											<h2>Iniciar Sesión</h2>
											<span class="byline">Administra contenido: Lista de jugadores y datos del equipo</span>
										</header>
                                    <form class="g-form" action="validar.php" method="post">
									<div class="g-form-group">
										<div class="g-form-group-rows">
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
												<div class="g-form-row-label"></div>
												<div class="g-form-row-field">
                                                	<input type="submit" name="enviar" value="Iniciar Sesión de Equipo">
												</div>
											</div>
										</div>
									</div>
								</form>

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
