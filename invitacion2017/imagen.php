<?php
	session_start();
    require_once 'lib/dompdf/dompdf_config.inc.php';
	
	$html =
		'<html>'.
		'<link rel="stylesheet" type="text/css" href="css/style.css" />'.
		'<body>'.
		'<div class="rm-content">'.
		//'<div class="rm-logo" style="text-align:center"></div>'.
		'<h3 style="text-align:center">Julio &amp; Luis Felipe<br/> Pichling Villegas</h3>'.
		//'<p><img src="uploads/' . $_SESSION["equipo"] . '" width="100px"></p>'.
		'<h4 style="text-align:center">' . $_SESSION["nombre_apellido"] . '</h4>'.
		'<p style="text-align:center">' . $_SESSION["email"] . '</p>'.
		'<h1 style="text-align:center">' . $_SESSION["DNI"] . '</h1>'.
		'<p style="text-align:center">Por favor presentar el registro PDF en su celular al ingresar.</p>'.
		'</div>'.
		'</body>'.
		'</html>';
    
    $dompdf = new DOMPDF();
    //$dompdf->load_html(file_get_contents($html));
	$dompdf->load_html($html);
    $dompdf->render();
    $dompdf->stream("invitacion.pdf");

?>

