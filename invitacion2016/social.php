<?php
session_start();
include("../panel@jurecpi/conexion/conexion.php");
include("../panel@jurecpi/conexion/funciones.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Torneo Amistad 2016</title>
<style type="text/css">
body {
margin:50px auto;
width:500px;
text-align:center;
background:url(images/estadio.jpeg) 50% 25%  no-repeat;
}
/* FORMULARIO */
form{ padding:0 0 0 0;}
form.form_contacto{ width:100%; float:right;}
form fieldset.sin_borde{ border:none; float:right;}
form fieldset.boton{ text-align:center; background:url(images/fondo_blanco.png);}
form fieldset{ width:500px; float:right; background:url(images/fondo_blanco.png);}
form fieldset label{ width:120px; float:right; text-align:right; font-family: 'Actor', sans-serif; padding:0 3px 0 0; font-weight:bold; background:url(images/fondo_blanco.png);}
form fieldset button.fc_enviar{ width:200px !important; height:40px !important; background:url(../imagenes/fondo_inputboton.jpg) no-repeat #eee; border:none; cursor:pointer; }
.ocultar{ display:none;}
#msj_enviado{ width:680px; height:500px; position:relative; background:#dbdbdb; }

ul#smedia_contatenos{ list-style:none; margin:0; padding:0 0 0 160px; clear: both; float: left;}
ul#smedia_contatenos li{ margin: 0; padding: 0; overflow: hidden; float: left; text-indent:-1000em; width:90px; height:80px;}
ul#smedia_contatenos li a{ clear:both; float:left; width:80px; height:80px; background-image:url(../imagenes/sp_social-contactenos.png); margin:0 5px;}
ul#smedia_contatenos li a.wgsmdcon_facebook{ background-position:0 0;}
ul#smedia_contatenos li a.wgsmdcon_twitter{ background-position:-89px 0;}
ul#smedia_contatenos li a.wgsmdcon_youtube{ background-position:-179px 0;}
ul#smedia_contatenos li a.wgsmdcon_blog{ background-position:-269px 0;}
</style>
</head>
<body>
<?php
if(empty($_SESSION["facebook_id"])){
	
  require_once("src/facebook.php");
  require_once("src/config.php");
  
$facebook = new Facebook($config);
$params = array(
	'scope' => 'email',
	'redirect_uri' => 'http://www.jurecpiexport.com/invitacion2016/insertar.php'
);
$loginUrl = $facebook->getLoginUrl($params);
?>
<div style="background:url(images/fondo_blanco.png); padding:50px 50px">
	<p><a href="<?php echo $loginUrl;?>"><img src="images/conectate-con-facebook.png" width="307"></a></p>
	<p><a href="../invitacion2016"><img src="images/regresar.png" width="50%"></a></p>
</div>
<?php
}else{
	?>
    <a href="salir.php"><img src="images/salir.png" width="212" height="71"></a>
    <dl>
        <form action="social.php" method="post" id="subscribe-form" style="display:block">
            <fieldset class="sin_borde">
            	<input type="hidden" name="facebook_id" id="facebook_id" value="<?php echo $_SESSION["facebook_id"];?>" size="40" />
            </fieldset>
            <span>
                <fieldset class="sin_borde">
                	Nombres y Apellidos: <input name="nombre_apellido" readonly="readonly" id="nombre_apellido" value="<?php echo $_SESSION["name"];?>" size="40" />
                </fieldset>
            </span>
            <span>
                <fieldset class="sin_borde">
                	Seleccionar su Talla de Camiseta: <select name="asistencia" id="asistencia" />
                    	<option selected><?php echo $_SESSION["asistencia"]; ?></option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                    </select>
                </fieldset>
            </span>
            <fieldset class="sin_borde boton">
            	<button class="fc_enviar" name="enviar">&nbsp;</button>&nbsp;
            </fieldset>
        </form>
    </dl>
    <?php
	if($_SESSION["facebook_id"] == '10207795671554619' or $_SESSION["facebook_id"] == '1057021707649109' or $_SESSION["facebook_id"] == '1028990327165452') 
    { 
        echo '<div style="background:url(images/fondo_blanco.png);"><p><a href="registro.php"><img src="images/registro.png" width="50%"></a></p></div>'; 
    }
	?>
    <dl>
		<?php
        $sql = 'SELECT * FROM jrcp_registro where facebook_id="'.$_SESSION['facebook_id'].'"'; 
        $rec = mysql_query($sql);
        
        while($filas=mysql_fetch_array($rec)){
			$id=$filas['id'];
			$camiseta=$filas['camiseta'];
			
			/*echo '<a href="social2.php?camiseta='.$camiseta.'"><img src="images/ver.png" width="200" height="62"/></a>';*/
        }
        ?>
    </dl>
<?php
	}
?>
</body>
</html>
<?php
if(isset($_POST['enviar'])) 
{ 
    if($_POST['nombre_apellido'] == '' or $_POST['asistencia'] == '') 
    { 
        echo '<div style="background:url(images/fondo_blanco.png);">Por favor llene todos los campos.</div>'; 
    } 
    else 
    { 
        $sql = 'SELECT * FROM jrcp_registro where facebook_id="'.$_POST['facebook_id'].'"'; 
        $rec = mysql_query($sql); 
        $verificar_usuario = 0; 
  
        while($result = mysql_fetch_object($rec)) 
        { 
            if($result->facebook_id == $_POST['facebook_id']) 
            { 
                $verificar_usuario = 1; 
            } 
        } 
  
        if($verificar_usuario == 0) 
        { 
            if($_POST['facebook_id'] == $_POST['facebook_id']) 
            { 
                $facebook_id = $_POST['facebook_id']; 
				$nombre = $_POST['nombre_apellido'];
                $asistencia = $_POST['asistencia'];
                $sql = "INSERT INTO jrcp_registro (nombre_apellido, asistencia) VALUES ('$nombre', '$asistencia')"; 
                mysql_query($sql); 
				
				//$sel=mysql_query("SELECT email, password FROM cdsm_registro WHERE email = '$_POST[email]'");
			 	//$datos=mysql_fetch_array($sel);
				//Iniciar Sesion
				$_SESSION["nombre_apellido"]=$nombre;
				$_SESSION["asistencia"]=$asistencia;
				echo '<div style="background:url(images/fondo_blanco.png);">'.$_SESSION["nombre_apellido"].' gracias por confirmar.</div>';
            }
            else 
            { 
                echo '<div style="background:url(images/fondo_blanco.png);">Las claves no son iguales, intente nuevamente.</div>'; 
            } 
        } 
        else 
        { 
					
		$facebook_id = $_POST['facebook_id']; 
		$nombre=$_POST['nombre_apellido'];
		$asistencia=$_POST['asistencia'];
		$sql = "UPDATE jrcp_registro SET nombre_apellido='$nombre', asistencia='$asistencia' WHERE facebook_id='$facebook_id'"; 
                mysql_query($sql); 
				$_SESSION["facebook_id"]=$facebook_id;
				$_SESSION["nombre_apellido"]=$nombre;
				$_SESSION["asistencia"]=$asistencia;
		echo '<div style="background:url(images/fondo_blanco.png);">'.$_SESSION["nombre_apellido"].' se actualizo tu confirmación.</div>';
		
        } 
    } 
} 
?>