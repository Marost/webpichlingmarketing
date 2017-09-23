<?php
session_start();
  require_once("src/facebook.php");
  require_once("src/config.php");
  
    $facebook = new Facebook($config);
	$facebook_id = $facebook->getUser();
	//Verificar el usuario
	
	if ($facebook_id!=0){
	//Conectar con la base de datos
$mysqli= new mysqli($server, $user, $pass, $bd);

	//Comprobar si el Usuario existe
	$query = $mysqli->query("SELECT * FROM jrcp_registro WHERE facebook_id='$facebook_id'");
	
if ($query->num_row<>0){
	//el usuario ya existe
	//obtenemos los datos del usuario de MySql
	$datos=$query->fetch_array(MYSQLI_ASSOC);
	var_dump($datos);
	//Iniciar Sesion
	$_SESSION["facebook_id"]=$facebook_id;
	$_SESSION["name"]=$datos["nombre_apellido"];
	$_SESSION["username"]=$datos["username"];
	$_SESSION["email"]=$datos["email"];
	$_SESSION["asistencia"]=$datos["asistencia"];
	}else{
		//El usuario no existe
		//Obtenemos los datos del Usuario
		$datos= $facebook->api("/me");
		$nombre= $datos["name"];
		$username=$datos["username"];
		$genero=$datos["gender"];
		$email=$datos["email"];
		$insert_user = $mysqli->query("INSERT INTO jrcp_registro(facebook_id, nombre_apellido, username, email, genero) VALUES ('$facebook_id','$nombre','$username','$email','$genero')");
		
	//Iniciar Sesion
	$_SESSION["facebook_id"]=$facebook_id;
	$_SESSION["name"]=$nombre;
	$_SESSION["username"]=$username;
	$_SESSION["email"]=$email;
		}
	}
header("Location:social.php");
?>