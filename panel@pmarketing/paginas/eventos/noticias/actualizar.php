<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");

//DECLARACION DE VARIABLES
$idnoticia=$_REQUEST["id"];
$titulo=$_POST["titulo"];
$contenido=$_POST["contenido"];
$tipo_multimedia=$_POST["tipo_multimedia"];
$tags=$_POST["tags"];
if($tags==""){ $union_tags=0; }
elseif($tags<>""){ $union_tags=implode(",", $tags);}

//FECHA PUBLICACION
$fecha_publicacion=$_POST["fecha"];
$hora_publicacion=$_POST["hora"];
$fecha_pub=$fecha_publicacion." ".$hora_publicacion.":00";

//SELECCIONAR REGISTRO PARA VERIFICAR IMAGEN
$rst_query=mysql_query("SELECT * FROM ".$tabla_suf."_evento WHERE id=$idnoticia LIMIT 1;", $conexion);
$fila_query=mysql_fetch_array($rst_query);

if($tipo_multimedia==""){
	$imagen="";
	$carpeta_imagen="";
	$video="";
	$carpeta_video="";
	$tipo_video="";
	$mostrar_imagen=2; $mostrar_video=2;
}else{
	//IMAGEN Y VIDEO
	if($tipo_multimedia=="imagen"){
		if($_POST['flash_uploader_0_tmpname']==""){
			$imagen=$_POST["imagen_actual"];
			$carpeta_imagen=$_POST["carpeta_imagen"];
			$video=$fila_query["video"];
			$carpeta_video=$fila_query["carpeta_video"];
			$tipo_video=$fila_query["tipo_video"];
		}elseif($_POST['flash_uploader_0_tmpname']<>""){
			$imagen=$_POST['flash_uploader_0_tmpname'];
			$carpeta_imagen=fechaCarpeta()."/";
			$video=$fila_query["video"];
			$carpeta_video=$fila_query["carpeta_video"];
			$tipo_video=$fila_query["tipo_video"];
		}
		$mostrar_imagen=1; $mostrar_video=2;
	}elseif($tipo_multimedia=="video"){
		if($_POST["video"]=="youtube"){
			$video=$_POST["video-youtube"];
			$tipo_video=$_POST["video"];
		}elseif($_POST["video"]=="vimeo"){
			$video=$_POST["video-vimeo"];
			$tipo_video=$_POST["video"];
		}elseif($_POST["video"]=="dailymotion"){
			$video=$_POST["video-dailymotion"];
			$tipo_video=$_POST["video"];
		}if($_POST["video"]=="flv"){
			$carpeta_video=fechaCarpeta()."/";
			if($_POST['video_uploader_0_tmpname']<>""){
				$video=$_POST['video_uploader_0_tmpname'];
			}
			$tipo_video=$_POST["video"];
		}
		$carpeta_imagen=$_POST["carpeta_imagen"]; 
		$imagen=$_POST["imagen_actual"]; $mostrar_imagen=2; $mostrar_video=1;
	}

}

//GUARDAR DATOS
mysql_query("UPDATE ".$tabla_suf."_evento SET titulo='".addslashes($titulo)."', 
contenido='$contenido', 
imagen='$imagen', 
mostrar_imagen=$mostrar_imagen, 
tipo_video='$tipo_video',
video='$video',
mostrar_video=$mostrar_video, 
dato_usuario='$usuario_user', 
carpeta_imagen='$carpeta_imagen',
carpeta_video='$carpeta_video',
fecha_publicacion='$fecha_pub' WHERE id=$idnoticia;", $conexion);
	
if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=5");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=2");
}

?>