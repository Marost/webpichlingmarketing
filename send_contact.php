<?php
include("panel@pmarketing/conexion/conexion.php");

/**
 * Your Email. All Contact messages will be sent there
 */

$your_email = $social_email;


/* Do not change any code below this line. */
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$errors = array();

if ($name == '')
{
	$errors['name'] = 'Por favor, ingresa tu Nombre!';
}

if ( ! filter_var($email, FILTER_VALIDATE_EMAIL))
{
	$errors['email'] = 'Por favor, ingresa un Email valido!';
}
if ($message == '')
{
	$errors['message'] = 'Por favor, ingresa tu Message!';
}

if (count($errors) == 0)
{
	require 'inc/class.phpmailer.php';
	$mail = new PHPMailer;

	$mail->AddAddress($your_email);

	$mail->From = $email;
	$mail->FromName = '';
	$mail->Subject = 'Contacto enviado desde http://'.$_SERVER['HTTP_HOST'].'/';
	$mail->Body = "Nombre: ".$name."\n"."Email: ".$email."\n"."Mensaje:\n".$message;

	if($mail->Send()) {
		$response = array ('success' => 1);
		echo json_encode($response);
		exit;

	} else {
		$errors['sending'] = 'An error occurred while sending your message! Please try again later.';

	}

}

$response = array ('success' => 0, 'errors' => $errors);
echo json_encode($response);
exit;
