<?php
session_start();
$_SESSION["nombre_apellido"]=null;
$_SESSION['email']=null;
$_SESSION["DNI"]=null;
$_SESSION["equipo"]=null;
//$_SESSION["username"]=null;
//$_SESSION["password"]=null;
session_destroy();
header("Location:index.php");