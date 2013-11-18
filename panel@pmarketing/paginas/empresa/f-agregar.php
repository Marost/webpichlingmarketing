<?php 
session_start();
require_once("../../conexion/conexion.php");
require_once("../../conexion/funciones.php");
require_once("../../conexion/verificar_sesion.php");

//VARIABLES
$pub_fecha=date("Y-m-d");
$pub_hora=date("H:i:s");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>Administrador</title>

<?php require_once("../../w-scripts.php"); ?>

</head>

<body>

<!-- Top line begins -->
<?php require_once("../../w-topline.php"); ?>
<!-- Top line ends -->


<!-- Sidebar begins -->
<div id="sidebar">
    
    <?php require_once("../../w-sidebarmenu.php"); ?>
    
</div><!-- Sidebar ends -->      
	
    
<!-- Content begins -->
<div id="content">
    <div class="contentTop">
        <span class="pageTitle"><span class="icon-screen"></span>Empresa</span>
    </div>
    
    <!-- Breadcrumbs line -->
    <div class="breadLine">
        <div class="bc">
        </div>
    </div>
    
    <!-- Main content -->
    <div class="wrapper">

        <form id="validate" class="main" method="POST" action="s-guardar.php">

            <fieldset>
                <div class="widget fluid">
                    
                    <div class="whead"><h6>Agregar</h6></div>
                    
                    <div class="formRow">
                        <div class="grid3"><label>Nombre Empresa:</label></div>
                        <div class="grid9"><input type="text" name="nombre"/></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>URL Página:</label></div>
                        <div class="grid9"><input type="text" name="url-pagina"/></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Email de contacto:</label></div>
                        <div class="grid9"><input type="text" name="email-contacto"/></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>URL Facebook:</label></div>
                        <div class="grid9"><input type="text" name="url-facebook"/></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>URL Twitter:</label></div>
                        <div class="grid9"><input type="text" name="url-twitter"/></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>URL Youtube:</label></div>
                        <div class="grid9"><input type="text" name="url-youtube"/></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Palabras clave (separar por comas):</label></div>
                        <div class="grid9"><input type="text" name="palabras-clave"/></div>
                    </div>
                    
                    <div class="formRow">
                        <div class="body" align="center">
                            <a href="lista.php" class="buttonL bBlack">Cancelar</a>
                            <input type="submit" class="buttonL bGreen" name="btn-guardar" value="Guardar datos">
                        </div>
                    </div>
                    
                </div>
            </fieldset>

        </form>

    </div>
  <!-- Main content ends -->
    
</div>
<!-- Content ends -->    
   
        
</body>
</html>
