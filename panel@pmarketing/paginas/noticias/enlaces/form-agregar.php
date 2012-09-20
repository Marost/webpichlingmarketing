<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/verificar_sesion.php");

//CATEGORIA
$rst_categoria=mysql_query("SELECT * FROM ".$tabla_suf."_empresa_enlaces_categoria WHERE id>0 ORDER BY categoria ASC;", $conexion);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administración | </title>
<link rel="stylesheet" type="text/css" href="../../../css/estilo-panel.css"/>
<link rel="stylesheet" type="text/css" href="../../../css/style-listas.css" />

<!-- PLUPLOAD -->
<link rel="stylesheet" type="text/css" href="../../../css/plupload.queue.css"/>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script src="../../../../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script type="text/javascript">
	google.load("jquery", "1.3");
</script>
<script type="text/javascript" src="../../../js/plupload/gears_init.js"></script>
<script type="text/javascript" src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script>
<script type="text/javascript" src="../../../js/plupload/plupload.full.min.js"></script>
<script type="text/javascript" src="../../../js/plupload/jquery.plupload.queue.min.js"></script>
<script>
var jq = jQuery.noConflict();
jq(function() {
	jq("#flash_uploader").pluploadQueue({
		runtimes : 'flash', url : 'upload.php', max_file_size : '100mb',
		chunk_size : '1mb', unique_names : true,
		filters : [ {title : ".jpg | .png | .bmp | .gif", extensions : "jpg,png,bmp,gif"}],
		flash_swf_url : '../../../js/plupload/plupload.flash.swf'
	});
});
</script>

<link href="../../../../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="contenedor" class="limpiar">
	<?php include("../../../cabecera.php") ?>
    <div id="cuerpo" class="limpiar">
    	<div class="interior">
        	<div id="panel-izq">
				<?php include("../../../menu-izq.php"); ?>
            </div><!--FIN PANEL IZQ-->
            <div id="panel-der">
            	<h2>Agregar - Enlace</h2>
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form action="guardar.php" method="post" enctype="multipart/form-data" id="form1" >
            	  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
            	    <tr>
            	      <td colspan="2" align="center">&nbsp;</td>
          	      </tr>
            	    <tr>
            	      <td width="20%" height="30" align="right" ><p><strong>Titulo:</strong></p></td>
            	      <td width="80%" height="30" align="left"><input name="titulo" type="text" id="titulo" size="50" /></td>
          	      </tr>
            	    <tr>
            	      <td height="30" align="right" ><p><strong>Enlace:</strong></p></td>
            	      <td height="30" align="left"><input name="enlace" type="text" id="enlace" size="50" /></td>
          	      </tr>
           	      <tr>
            	      <td colspan="2">
                      <p align="left"><strong>Selecciona una imagen para la noticia:</strong></p>
                        <div>
                        <div id="flash_uploader" style="width: 450px; height: 330px;">You browser doesn't have Flash installed.</div>
                        </div>
                      </td>
           	        </tr>
                  <tr>
                    <td align="right" ><p><strong>Categoria:</strong></p></td>
                    <td><span id="spryselect">
                      <select name="categoria" id="categoria">
                        <option value="0">[ Seleccionar opcion ]</option>
                        <?php while ($fila_categoria=mysql_fetch_array($rst_categoria)){
	echo "<option value='". $fila_categoria["id"] ."'>". $fila_categoria["categoria"] ."</option>";
}?>
                      </select>
                      <span class="selectInvalidMsg">Selecciona una categoria.</span><span class="selectRequiredMsg">Seleccione una categoria.</span></span></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"><input type="submit" name="guardar" id="guardar" value="Guardar" />                    <label>
                      <input type="reset" name="button2" id="button2" value="Limpiar Datos" />
                      </label></td>
                  </tr>
              </table>
                </form>
              </td>
            </tr>
        </table>
    </div><!-- FIN CONTENIDO TOTAL -->
          </div><!--FIN PANEL DER-->
        </div><!--FIN INTERIOR-->
    </div><!--FIN CUERPO-->
</div>
<script type="text/javascript">
var spryselect = new Spry.Widget.ValidationSelect("spryselect", {invalidValue:"0"});
</script>
</body>
</html>