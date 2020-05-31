<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES
$sc_home=false;
$sc_slider=false;
?>
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Contáctenos | <?php echo $web_nombre ?></title>

	<meta name="keywords" content="<?php echo $social_palabrasclave; ?>">
	<meta name="description" content="<?php echo $social_nosotros; ?>">

	<!-- TWITTER CARD -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@pichlingmkt">
	<meta name="twitter:creator" content="@pichlingmkt">
	<meta name="twitter:title" content="<?php echo $web_nombre." | ".$social_palabrasclave; ?>">
	<meta name="twitter:description" content="<?php echo $social_nosotros; ?>">
	<meta name="twitter:image" content="<?php echo $web."imagenes/logo.png" ?>">
	<meta name="twitter:domain" content="psportsm.com">
	<!-- FIN TWITTER CARD -->

	<!-- OPEN GRAPH -->
	<meta property="og:type" content='website' /> 
	<meta property="og:site_name" content='<?php echo $web_nombre; ?>' /> 
	<meta property="og:title" content='<?php echo $web_nombre." | ".$social_palabrasclave; ?>'/> 
	<meta property="og:description" content='<?php echo $social_nosotros; ?>'/>
	<meta property="og:url" content='<?php echo $web; ?>' /> 
	<meta property="og:image" content='<?php echo $web."imagenes/logo.png" ?>' />
	<!-- FIN OPEN GRAPH -->

	<?php require_once("wg-script-header.php"); ?>
	
</head>
<body class="l-body">

<div class="l-background"></div>

<!-- CANVAS -->
<div class="l-canvas type_boxed col_contside">
	<div class="l-canvas-h">

		<!-- HEADER -->
		<?php require_once("wg-header.php"); ?>
		<!-- /HEADER -->

		<!-- MAIN -->
		<div class="l-main">
			<div class="l-main-h">

				<div class="l-submain for_pagehead">
					<div class="l-submain-h g-html i-cf">
						<div class="w-pagehead">
							<h1>Contáctenos</h1>
							<p></p>
							<!-- breadcrums -->
							<div class="g-breadcrumbs">
								<a href="/" class="g-breadcrumbs-item">Inicio</a>
								<span class="g-breadcrumbs-separator">&raquo;</span>
								<span class="g-breadcrumbs-item">Contacto</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="l-submain for_map">
					<div class="l-submain-h g-html i-cf">
					
						<div class="w-map animate_hfc">
							<div class="w-map-h">

								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.0555504225513!2d-76.97161308518676!3d-12.108349691426369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xac31901f45198937!2sPSM%20Sports%20Marketing!5e0!3m2!1ses-419!2spe!4v1589930355451!5m2!1ses-419!2spe" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

							</div>
						</div>
						
					</div>
				</div>
				
				<div class="l-submain">
					<div class="l-submain-h g-html i-cf">
					
						<div class="g-cols">
							<div class="one-third">
							
								<div class="w-contacts">
									<div class="w-contacts-h">
										<h3 class="w-contacts-title">Información de contacto</h3>
										<dl class="w-contacts-list">
											<dt class="w-contacts-list-key for_address">Dirección:</dt>
											<dd class="w-contacts-list-value">Av. Primavera 1796 Of. 701 - Surco - Lima - Perú</dd>
											<dt class="w-contacts-list-key for_phone">Teléfono:</dt>
											<dd class="w-contacts-list-value">(511) 344-2459</dd>
											<dt class="w-contacts-list-key for_email">Email:</dt>
											<dd class="w-contacts-list-value"><a href="mailto:contacto@psportsm.com">contacto@psportsm.com</a></dd>
										</dl>
									</div>
								</div>
								
								<hr>
								
								<h3>Redes Sociales</h3>
								
								<div class="w-socials size_normal">
									<div class="w-socials-h">
										<div class="w-socials-list">

											<div class="w-socials-item facebook">
												<a class="w-socials-item-link" target="_blank" href="<?php echo $social_facebook; ?>">
													<i class="iconsocial-facebook"></i>
												</a>
												<div class="w-socials-item-popup">
													<div class="w-socials-item-popup-h">
														<span class="w-socials-item-popup-text">Facebook</span>
													</div>
												</div>
											</div>
											<div class="w-socials-item twitter">
												<a class="w-socials-item-link" target="_blank" href="<?php echo $social_twitter; ?>">
													<i class="iconsocial-twitter"></i>
												</a>
												<div class="w-socials-item-popup">
													<div class="w-socials-item-popup-h">
														<span class="w-socials-item-popup-text">Twitter</span>
													</div>
												</div>
											</div>
											
											<div class="w-socials-item youtube">
												<a class="w-socials-item-link" target="_blank" href="<?php echo $social_youtube; ?>">
													<i class="iconsocial-youtube-1"></i>
												</a>
												<div class="w-socials-item-popup">
													<div class="w-socials-item-popup-h">
														<span class="w-socials-item-popup-text">YouTube</span>
													</div>
												</div>
											</div>
																						
										</div>
									</div>
								</div>
								
							</div>
							<div class="two-thirds">
							
								<h3>Póngase en contacto con nosotros</h3>
								<p></p>
								<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
								<script type="text/javascript">
									var jContact = jQuery.noConflict();
									jContact(document).ready(function(){
										jContact("#contacts_send").click(function(){
											var name = jContact('#name').val(),
												email = jContact('#email').val(),
												message = jContact('#message').val(),
												errors = 0;

											jContact(".g-form .g-alert").css({'opacity': '0', 'display': 'none', 'height': '', 'margin': ''});

											if (name === '') {
												if ( ! jContact('#name_row').hasClass('check_wrong')) {
													jContact('#name_row').addClass('check_wrong');
												}
												jContact('#name_state').html('Por favor, ingresa tu Nombre!');
												errors++;
											} else {
												if (jContact('#name_row').hasClass('check_wrong')) {
													jContact('#name_row').removeClass('check_wrong');
												}
												jContact('#name_state').html('');
											}
											if (email === '') {
												if ( ! jContact('#email_row').hasClass('check_wrong')) {
													jContact('#email_row').addClass('check_wrong');
												}
												jContact('#email_state').html('Por favor, ingresa tu Email!');
												errors++;
											} else {
												if (jContact('#email_row').hasClass('check_wrong')) {
													jContact('#email_row').removeClass('check_wrong');
												}
												jContact('#email_state').html('');
											}
											if (message === '') {
												if ( ! jContact('#message_row').hasClass('check_wrong')) {
													jContact('#message_row').addClass('check_wrong');
												}
												jContact('#message_state').html('Por favor, ingresa tu Mensaje!');
												errors++;
											} else {
												if (jContact('#message_row').hasClass('check_wrong')) {
													jContact('#message_row').removeClass('check_wrong');
												}
												jContact('#message_state').html('');
											}

											if (errors == 0) {
												jContact.post("send_contact.php", {name: name, email: email, message: message}, function(data) {
													if (data.success) {

														jContact('#name').val('');
														jContact('#email').val('');
														jContact('#message').val('');

														jContact('#contact_form_success_message').css('display', 'block').animate({opacity:1}, 300);


													} else {
														if (data.errors.name !== '' && data.errors.name !== undefined) {
															if ( ! jContact('#name_row').hasClass('check_wrong')) {
																jContact('#name_row').addClass('check_wrong');
															}
															jContact('#name_state').html(data.errors.name);
														}
														if (data.errors.email !== '' && data.errors.email !== undefined) {
															if ( ! jContact('#email_row').hasClass('check_wrong')) {
																jContact('#email_row').addClass('check_wrong');
															}
															jContact('#email_state').html(data.errors.email);
														}
														if (data.errors.message !== '' && data.errors.message !== undefined) {
															if ( ! jContact('#message_row').hasClass('check_wrong')) {
																jContact('#message_row').addClass('check_wrong');
															}
															jContact('#message_state').html(data.errors.message);
														}

														if (data.errors.sending !== '' && data.errors.sending !== undefined) {
															jContact('#contact_form_error_message .g-alert-body p').html(data.errors.sending);
															jContact('#contact_form_error_message').css('display', 'block').animate({opacity:1}, 300);
														}
													}
												}, "json");
											}
											return false;
										});

										$("#contact_form").submit(function(){
											$("#contacts_send").click();
											return false;
										});
									});
								</script>
								<form class="g-form" action="" method="post" id="contact_form">
									<div class="g-alert type_success with_close" id="contact_form_success_message" style="opacity: 0; display: none;">
										<div class="g-alert-close">×</div>
										<div class="g-alert-body">
											<p><b>Gracias!</b> Tú mensaje ha sido enviado.</p>
										</div>
									</div>
									<div class="g-alert type_error with_close" id="contact_form_error_message" style="opacity: 0; display: none;">
										<div class="g-alert-close">×</div>
										<div class="g-alert-body">
											<p></p>
										</div>
									</div>
									<div class="g-form-group">
										<div class="g-form-group-rows">
											<div class="g-form-row" id="name_row">
												<div class="g-form-row-label">
													<label class="g-form-row-label-h" for="name">Nombre *</label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
														<input type="text" name="name" id="name">
													</div>
												</div>
												<div class="g-form-row-state" id="name_state"></div>
											</div>
											<div class="g-form-row" id="email_row">
												<div class="g-form-row-label">
													<label class="g-form-row-label-h" for="email">Email *</label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
														<input type="email" name="email" id="email">
													</div>
												</div>
												<div class="g-form-row-state" id="email_state"></div>
											</div>
											<div class="g-form-row" id="message_row">
												<div class="g-form-row-label">
													<label class="g-form-row-label-h" for="message">Mensaje *</label>
												</div>
												<div class="g-form-row-field">
													<div class="g-input">
														<textarea name="message" id="message" cols="30" rows="10"></textarea>
													</div>
												</div>
												<div class="g-form-row-state" id="message_state"></div>
											</div>
											<div class="g-form-row">
												<div class="g-form-row-label"></div>
												<div class="g-form-row-field">
													<button class="g-btn type_color" id="contacts_send">Enviar mensaje</button>
												</div>
											</div>
											<div class="g-form-row" id="message_row">
												<div class="g-form-row-label">
													<label class="g-form-row-label-h" style="font-size:12px;">Al presionar <strong>Enviar mensaje</strong> acepta los <a href="terminos-condiciones">Términos y condiciones</a> y <a href="privacidad">Políticas de privacidad</a></label>
												</div>
												<div class="g-form-row-state" id="message_state"></div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
		<!-- /MAIN -->

	</div>
</div>
<!-- /CANVAS -->

<!-- FOOTER -->
<?php require_once("wg-footer.php"); ?>
<!-- /FOOTER -->

<?php require_once("wg-script-footer.php"); ?>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-b6bcdd5b-dde-cce8-a00c-478890414ff", doNotHash: true, doNotCopy: false, hashAddressBar: true});</script>

</body>
</html>
