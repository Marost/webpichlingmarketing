<?php

	if (isset($_POST['enviar'])){
		if (!empty($_POST['nombre_apellido']) && !empty($_POST['email']) && !empty($_POST['DNI']) && !empty($_POST['asistencia'])){
			$nombre_apellido = $_POST['nombre_apellido'];
			$email = $_POST['email'];
			$DNI = $_POST['DNI'];
			$asistencia = $_POST['asistencia'];
			$cabecera_asunto = $evento." | Confirmacion de asistencia";

			if ($asistencia == "Solo"){
				$mensaje_completo = "Su registro fue realizado correctamente, lo esperamos este Viernes 14 de Enero  a las 14:00 horas (hora exacta) en Calle San Patricio 370 - Villa Marina - Chorrillos\nAtentamente: Alison";
			} else {
				$mensaje_completo = "Es una lastima no poder contar con su participacion, esperamos que pueda asistir en otra ocasion\nAtentamente: Alison";
			}

			$header = "From: noreply@alison.pe" . "\r\n";
			$header.= "Reply-To: noreply@alison.pe" . "\r\n";
			$header.= "X-Mailer: PHP/" . phpversion();
			$header.= $cabecera_asunto;
			$mail = mail($email, $cabecera_asunto, $mensaje_completo, $header);

		}
	}

 ?>