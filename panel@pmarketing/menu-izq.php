<script type="text/javascript" src="<?php echo $fila_empresa["web"] ?>js/jquery-1.2.6.js"></script>
<script type="text/javascript" src="<?php echo $fila_empresa["web"] ?>js/jscript_jquery.dimensions.js"></script>
<script type="text/javascript" src="<?php echo $fila_empresa["web"] ?>js/jscript_jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="<?php echo $fila_empresa["web"] ?>js/jscript_jzScrollHorizontalPane.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		if($("#nav")) {
			$("#nav dd").hide();
			$("#nav dt b").click(function() {
				if(this.className.indexOf("clicked") != -1) {
					$(this).parent().next().slideUp(200);
					$(this).removeClass("clicked");
				}
				else {
					$("#nav dt b").removeClass();
					$(this).addClass("clicked");
					$("#nav dd:visible").slideUp(200);
					$(this).parent().next().slideDown(500);
				}
				return false;
			});
		}
	});
</script>

<dl id="nav">
	
  <dt class="items"><b>Empresa</b></dt>
  <dd>
    <ul>
      <li>
      	<a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/empresa/datos/empresa.php">
        	Datos</a></li>
    </ul>
  </dd>
    <div class="espacio"></div>
    
  <dt class="items"><b>Opciones</b></dt>
  <dd>
    <ul class="items">
    
      <li>
      	<a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/noticias/listar.php">
        	Noticia</a></li>
      <li>
      	<a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/noticias/servicios/listar.php">
        	Servicios</a></li>
      
    </ul>
  </dd>

  
  <div class="espacio"></div>
  <dt class="items"><b>Usuario</b></dt>
  <dd>
    <ul>
      <li>
      	<a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/usuarios/administracion/form-agregar.php">
        	Agregar</a></li>
      <li>
      	<a href="<?php echo $fila_empresa["web"]."".$carpeta_admin; ?>/paginas/usuarios/administracion/listar.php">
        	Listar</a></li>
    </ul>
  </dd>
</dl>
<!--FIN MENU NAV-->