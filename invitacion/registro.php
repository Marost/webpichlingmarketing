<?php
	session_start();
	include("../panel@jurecpi/conexion/conexion.php");
	include("../panel@jurecpi/conexion/funciones.php");
?>
 <!DOCTYPE html>
<html lang="es">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Invitación 20 años</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Image Accordion with CSS3" />
        <meta name="keywords" content="accordion, images, slideshow, css3, css-only, web development, component, tutorial" />
        <meta name="author" content="Ring Wing for Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
        <div class="container">
			
			<header>
			
				<h1><span>Michele y William</span></h1>
				<h2>Por favor confirma tu asistencia llenanddo los siguientes datos</h2>
				
				<div class="support-note"><!-- let's check browser support with modernizr -->
					<!--span class="no-cssanimations">CSS animations are not supported in your browser</span-->
					<!--span class="no-csstransforms">CSS transforms are not supported in your browser</span-->
					<!--span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span-->
					<span class="no-csstransitions">Este navegador no permite visualizar esta animación</span>
					<span class="note-ie">Lo siento, usa navegadores modernos o actualizados.</span>
				</div>
				
			</header>
			<section class="main">
            <div class="ia-container4">
            <a id="relleno">xxx</a>	
				<div class="ia-container3">
                    <dl>
                        <form action="registro.php" method="post" id="subscribe-form" style="display:block">
                            <span>
                                <fieldset class="sin_borde">
                                Nombre y Apellido: <input name="nombre_apellido" id="nombre_apellido" size="40" />
                                </fieldset>
                            </span>
                            <span>
                                <fieldset class="sin_borde">
                                <input type="radio" name="asistencia" value="solo"/> Asistiré solo(a)</br></br>
                                <input type="radio" name="asistencia" value="acompanado" /> Asistiré ccon pareja</br></br>
                                <input type="radio" name="asistencia" value="no" /> No podré asistir</br></br>
                                </fieldset>
                            </span>
                            
                                <fieldset class="sin_borde boton">
                                	<button class="fc_enviar" name="enviar">&nbsp;</button>&nbsp;
                                </fieldset>
                            </form>
                    </dl>
            </div>
                    <a href="images/plano-hacienda-gentileza.pdf" class="transicion" id="button-plano">Button</a>
                </div><!-- ia-container -->			
			</section>
				
        </div>
    </body>

</html>

<?php
if(isset($_POST['enviar'])) 
{ 
    if($_POST['nombre_apellido'] == '' or $_POST['asistencia'] == '') 
    { 
        echo '<div class="ia-container5">Por favor llene todos los campos.</div>'; 
    } 
    else 
    { 
        $sql = 'SELECT * FROM jrcp_registro'; 
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
            if($_POST['nombre_apellido'] == $_POST['nombre_apellido']) 
            { 
                $nombre = $_POST['nombre_apellido']; 
                $asistencia = $_POST['asistencia'];
                $sql = "INSERT INTO jrcp_registro (nombre_apellido, asistencia) VALUES ('$nombre', '$asistencia')"; 
                mysql_query($sql); 
				
				//$sel=mysql_query("SELECT email, password FROM cdsm_registro WHERE email = '$_POST[email]'");
			 	//$datos=mysql_fetch_array($sel);
				//Iniciar Sesion
				$_SESSION["nombre_apellido"]=$nombre;
				$_SESSION["asistencia"]=$asistencia;
                
				echo '<div class="ia-container5">'.$_SESSION["nombre_apellido"].' gracias por confirmar.</div>';
            }
            else 
            { 
                echo 'Las claves no son iguales, intente nuevamente.'; 
            } 
        } 
        else 
        { 
		$nombre=$_POST['nombre_apellido'];
		$asistencia=$_POST['asistencia'];
		$sql = "UPDATE jrcp_registro SET nombre_apellido='$nombre', asistencia='$asistencia' WHERE nombre_apellido='$nombre'"; 
                mysql_query($sql); 
						$_SESSION["nombre_apellido"]=$nombre;
				$_SESSION["asistencia"]=$asistencia;
		echo '<div class="ia-container5">'.$_SESSION["nombre_apellido"].' se actualizo tu confirmación.</div>';
        } 
    } 
} 
?>