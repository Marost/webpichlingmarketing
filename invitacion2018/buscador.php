<?php
session_start();
	include("../panel@pmarketing/conexion/conexion.php");
	include("../panel@pmarketing/conexion/funciones.php");

//Variable que contendrá el resultado de la búsqueda
$texto = '';
//Variable que contendrá el número de resgistros encontrados
$registros = '';

if($_POST){
	
  $busqueda = trim($_POST['buscar']);

  $entero = 0;
  
  if (empty($busqueda)){
	  $texto = 'Búsqueda sin resultados';
  }else{
	  // Si hay información para buscar, abrimos la conexión

      mysql_set_charset('utf8');  // mostramos la información en utf-8
	  
	  //Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar
	  $sql = "SELECT * FROM pmkt_registro WHERE dni LIKE '%" .$busqueda. "%' ORDER BY dni";
	  
	  $resultado = mysql_query($sql); //Ejecución de la consulta
      //Si hay resultados...
	  if (mysql_num_rows($resultado) > 0){ 
	     // Se recoge el número de resultados
		 $registros = '<p>HEMOS ENCONTRADO ' . mysql_num_rows($resultado) . ' registros </p>';
	     // Se almacenan las cadenas de resultado
		 while($fila = mysql_fetch_assoc($resultado)){ 
			$imagen .= $fila['foto'] ;
			$texto  .= '<img src="uploads/'.$imagen.'" height="400"><br />';
			$texto  .= $fila['nombre_apellido'] . '<br />';
			$texto  .= $fila['dni'] . '<br />';
			$texto  .= $fila['email'] . '<br />';
			$texto  .= $fila['asistencia'];			  
			}
	  
	  }else{
			   $texto = "NO HAY RESULTADOS EN LA BBDD";	
	  }
	  // Cerramos la conexión (por seguridad, no dejar conexiones abiertas)
	  mysql_close($conexion);
  }
}
?>
<!DOCTYPE html>
<html lang="es-ES">
<head> 
<meta charset='utf-8'>
<title>Michele & William 50 Años</title>
<head> 
<body>
<p><a href="salir.php"><button>Cerrar Sesión</button></a> | <a href="panel.php"><button>Volver</button></a></p>

<form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
    <input id="buscar" name="buscar" type="search" placeholder="Buscar aquí..." autofocus size="50" maxlength="8">
    <input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
</form>
<?php 
// Resultado, número de registros y contenido.
echo $registros;
echo $texto; 
?>
</body>
</html>