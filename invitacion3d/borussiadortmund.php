<?php
	session_start();
	include("../panel@pmarketing/conexion/conexion.php");
	include("../panel@pmarketing/conexion/funciones.php");
?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 


        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:300,500|Arvo:700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]><style>.support-note .note-ie{display:block;}</style><![endif]-->

		
			<!-- Codrops top bar --><!--/ Codrops top bar -->

			<section class="main">

				<div id="rm-container" class="rm-container">

					<div class="rm-wrapper">

						<div class="rm-cover">

							<div class="rm-front">
								<div class="rm-content">

									<div class="rm-logo"></div>
									<h2>Torneo Amistad 2014</h2>
									<h3>Copa Pichling U-15</h3>
<div class="rm-info">
										<p></p>
									</div>
									<a href="#" class="rm-button-open">Clic para ver Invitación</a>
									<div class="rm-info">
										<p></p>
									</div>

								</div><!-- /rm-content -->
							</div><!-- /rm-front -->

							<div class="rm-back">
								<div class="rm-content">
									<dl>
										<dd><img src="images/reus.jpg"/></dd>
									</dl>
								</div><!-- /rm-content -->
								<div class="rm-overlay"></div>

							</div><!-- /rm-back -->

						</div><!-- /rm-cover -->

						<div class="rm-middle">
							<div class="rm-inner">
								<div class="rm-content">
									<h4>Invitación</h4>
									<dl>
										<dd><img src="images/invitacion2.jpg"/></dd>
                                        <dt>Completa tus datos y confirma tu participación</dt>
                                        <form action="borussiadortmund.php" method="post" id="subscribe-form" style="display:block">
                                            <span>
                                                <fieldset class="sin_borde">
                                                <label for="nombre_apellido">Nombres y Apellidos: </label>
                                                <input name="nombre_apellido" id="nombre_apellido" size="30" />
                                                </fieldset>
                                            </span>
                                            <span>
                                                <fieldset class="sin_borde">
                                                <label for="talla">Talla de Camiseta: </label>
                                                <input name="talla" id="talla" size="30" />
                                                </fieldset>
                                            </span>
                                            </span>
                                                <input type="hidden" name="equipo" value="Borussia Dortmund">
                                            <span>
                                            <span>
                                                <input type="submit" name="enviar" value="Clic para confirmar">
                                            </span>
  										</form>
									</dl>
								</div><!-- /rm-content -->
								<div class="rm-overlay"></div>
							</div><!-- /rm-inner -->
						</div><!-- /rm-middle -->

						<div class="rm-right">

							<div class="rm-front">
								
							</div>

							<div class="rm-back">
								<span class="rm-close">Close</span>
								<div class="rm-content">
									<dl>
										<dd><img src="images/borusia.jpg"/></dd>
									</dl>
								</div><!-- /rm-content -->
							</div><!-- /rm-back -->

						</div><!-- /rm-right -->
					</div><!-- /rm-wrapper -->

				</div><!-- /rm-container -->

			</section>
			
        </div>
		<!-- jQuery if needed -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
		<script type="text/javascript">
			$(function() {

				Menu.init();
			
			});
		</script>


<?php
if(isset($_POST['enviar'])) 
{ 
    if($_POST['nombre_apellido'] == '' or $_POST['talla'] == '') 
    { 
        echo 'Por favor llene todos los campos.'; 
    } 
    else 
    { 
        $sql = 'SELECT * FROM ysdt_registro'; 
        $rec = mysql_query($sql); 
        $verificar_usuario = 0; 
  
        while($result = mysql_fetch_object($rec)) 
        { 
            if($result->nombre_apellido == $_POST['nombre_apellido']) 
            { 
                $verificar_usuario = 1; 
            } 
        } 
  
        if($verificar_usuario == 0) 
        { 
            if($_POST['equipo'] == $_POST['equipo']) 
            { 
                $nombre = $_POST['nombre_apellido']; 
                $talla = $_POST['talla']; 
				$equipo=$_POST['equipo'];
                $sql = "INSERT INTO ysdt_registro (nombre_apellido, equipo, talla) VALUES ('$nombre', '$equipo', '$talla')"; 
                mysql_query($sql); 
				
				//$sel=mysql_query("SELECT email, password FROM cdsm_registro WHERE email = '$_POST[email]'");
			 	//$datos=mysql_fetch_array($sel);
				//Iniciar Sesion
				$_SESSION["nombre_apellido"]=$nombre;
				$_SESSION["talla"]=$talla;
				$_SESSION["equipo"]=$equipo;

                //echo $_SESSION["email"].' usted se ha registrado correctamente.';
            }
            else 
            { 
                echo 'Las claves no son iguales, intente nuevamente.'; 
            } 
        } 
        else 
        { 
		$nombre=$_POST['nombre_apellido'];
		$talla=$_POST['talla'];
		$equipo=$_POST['equipo'];
		$query = $mysqli->query("SELECT nombre_apellido, equipo, talla FROM ysdt_registro WHERE nombre_apellido='$nombre' and equipo='$equipo'"); 
  
  		if ($query->num_row<>0){
				$datos=$query->fetch_array(MYSQLI_ASSOC);
				var_dump($datos);
				//Iniciar Sesion
				$_SESSION["equipo"]=$equipo;
				$_SESSION["talla"]=$talla;
				$_SESSION["nombre_apellido"]=$nombre;
		}else{
			echo 'Contraseña Incorrecta';
			}
        } 
    } 
} 
?>