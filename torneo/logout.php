<?php
session_start();
		$_SESSION["id"] = null;
		$_SESSION["equipo"] = null;
		$_SESSION["escudo"] = null;
		$_SESSION["empresa"] = null;
		$_SESSION["entrenador"] = null;
		$_SESSION["delegado"] = null;
		$_SESSION["capitan"] = null;
		$_SESSION["foto_equipo"] = null;
		$_SESSION["email"] = null;
		$_SESSION["password"] = null; 
session_destroy();
header("Location:index.php");