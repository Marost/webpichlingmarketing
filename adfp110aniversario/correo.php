<?php

	if (isset($_POST['enviar'])){
		if (!empty($_POST['nombre_apellido']) && !empty($_POST['email']) && !empty($_POST['DNI']) && !empty($_POST['asistencia'])){
			$nombre_apellido = $_POST['nombre_apellido'];
			$email = $_POST['email'];
			$DNI = $_POST['DNI'];
			$asistencia = $_POST['asistencia'];
			$cabecera_asunto = $evento." | Confirmacion de asistencia";

			if ($asistencia == "Solo"){
				$mensaje_completo = "Su registro fue realizado correctamente, lo esperamos este Jueves 12 de Mayo  a las 10:30 horas (hora exacta) en la Parroquia Santa Maria Reina, Ovalo Gutierrez 1293 - San Isidro\nAtentamente: ADFP";
			} else {
				$mensaje_completo = "Es una lastima no poder contar con su participacion, esperamos que pueda asistir en otra ocasion\nAtentamente: ADFP";
			}

			$header = "From: noreply@adfp.org.pe" . "\r\n";
			$header.= "Reply-To: noreply@adfp.org.pe" . "\r\n";
			$header.= "X-Mailer: PHP/" . phpversion();
			$header.= $cabecera_asunto;
			$mail = mail($email, $cabecera_asunto, $mensaje_completo, $header);

		}
	}

 ?>