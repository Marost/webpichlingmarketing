<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/verificar_sesion.php");

$id=$_REQUEST["id"];

//PUBLICAR
$rst_imagen=mysql_query("SELECT * FROM ".$tabla_suf."_publicar WHERE id>0 ORDER BY id ASC;", $conexion);

//CATEGORIA
$rst_query=mysql_query("SELECT * FROM ".$tabla_suf."_empresa_enlaces_categoria WHERE id=$id", $conexion);
$fila_query=mysql_fetch_array($rst_query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Administración | </title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../../../css/estilo-panel.css"/>
<!-- InstanceBeginEditable name="head" -->
<script src="../../../../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="../../../../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<!-- InstanceEndEditable -->
</head>

<body>
<div id="contenedor" class="limpiar">
	<?php include("../../../cabecera.php") ?>
    <div id="cuerpo" class="limpiar">
    	<div class="interior">
        	<div id="panel-izq">
				<?php include("../../../menu-izq.php"); ?>
            </div><!--FIN PANEL IZQ--><!-- InstanceBeginEditable name="Contenido" -->
            <div id="panel-der">
            	<h2>Modificar - Categoria de Enlaces</h2>
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form action="actualizar.php?id=<?php echo $_REQUEST["id"]; ?>" method="post" name="form1" id="form1">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
            	    <tr>
            	      <td colspan="2" align="center">&nbsp;</td>
          	      </tr>
            	    <tr>
            	      <td width="20%" height="30" align="right" class="texto_izq"><p><strong>Categoria:</strong></p></td>
            	      <td width="80%" height="30" align="left" class="texto_der">
                      <input name="categoria" type="text" id="categoria" value="<?php echo $fila_query["categoria"] ?>" size="50" /></td>
          	      </tr>
            	    <tr>
            	      <td height="30" align="right"><p><strong>Imagen:</strong></p></td>
            	      <td height="30"><p><span id="spryselect2">
            	        <select name="imagen" id="imagen">
            	          <option value="0">[ Seleccionar opcion ]</option>
            	          <?php while ($fila_imagen=mysql_fetch_array($rst_imagen)){
                                if ($fila_imagen["id"]==$fila_query["imagen"]){
                                    echo "<option selected='' value=".$fila_imagen["id"].">".$fila_imagen["publicar"] ."</option>";
								}else{
                                    echo "<option value=".$fila_imagen["id"].">".$fila_imagen["publicar"]."</option>";
                            }} ?>
          	          </select>
            	        <span class="selectInvalidMsg">Selecciona una opci&oacute;n.</span><span class="selectRequiredMsg">Seleccione una categoria</span></span></p></td>
          	      </tr>
                <tr>
                  <td height="40" colspan="2" align="center"><label>
                    <input type="submit" name="guardar" id="guardar" value="Guardar" />
                  </label></td>
                </tr>
              </table>
                </form>
              </td>
            </tr>
        </table>
    </div><!-- FIN CONTENIDO TOTAL -->
            </div>
            <script type="text/javascript">
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {invalidValue:"0"});
            </script>
            <!-- InstanceEndEditable --><!--FIN PANEL DER-->
        </div><!--FIN INTERIOR-->
    </div><!--FIN CUERPO-->
</div>
</body>
<!-- InstanceEnd --></html>