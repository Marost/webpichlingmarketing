<?php
//VARIABLES
$sc_home=false;
$sc_slider=false;
?>
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Contáctenos | Pichling Sports Marketing</title>

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
											<dd class="w-contacts-list-value">Av. Primavera 1796 Of. 701 - Surco</dd>
											<dt class="w-contacts-list-key for_phone">Teléfono:</dt>
											<dd class="w-contacts-list-value">(511) 344-2459</dd>
											<dt class="w-contacts-list-key for_email">Email:</dt>
											<dd class="w-contacts-list-value"><a href="mailto:contacto@pichlingmarketing.com">contacto@pichlingmarketing.com</a></dd>
										</dl>
									</div>
								</div>
								
								<hr>
								
								<h3>Redes Sociales</h3>
								
								<div class="w-socials size_normal">
									<div class="w-socials-h">
										<div class="w-socials-list">

											<div class="w-socials-item facebook">
												<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
													<i class="iconsocial-facebook"></i>
												</a>
												<div class="w-socials-item-popup">
													<div class="w-socials-item-popup-h">
														<span class="w-socials-item-popup-text">Facebook</span>
													</div>
												</div>
											</div>
											<div class="w-socials-item twitter">
												<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
													<i class="iconsocial-twitter"></i>
												</a>
												<div class="w-socials-item-popup">
													<div class="w-socials-item-popup-h">
														<span class="w-socials-item-popup-text">Twitter</span>
													</div>
												</div>
											</div>
											
											<div class="w-socials-item youtube">
												<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
													<i class="iconsocial-youtube-1"></i>
												</a>
												<div class="w-socials-item-popup">
													<div class="w-socials-item-popup-h">
														<span class="w-socials-item-popup-text">YouTube</span>
													</div>
												</div>
											</div>
											
											<div class="w-socials-item pinterest">
												<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
													<i class="iconsocial-pinterest"></i>
												</a>
												<div class="w-socials-item-popup">
													<div class="w-socials-item-popup-h">
														<span class="w-socials-item-popup-text">Pinterest</span>
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
								<script type="text/javascript">
									jQuery(document).ready(function(){
										jQuery("#contacts_send").click(function(){
											var name = jQuery('#name').val(),
												email = jQuery('#email').val(),
												phone = jQuery('#phone').val(),
												message = jQuery('#message').val(),
												errors = 0;

											jQuery(".g-form .g-alert").css({'opacity': '0', 'display': 'none', 'height': '', 'margin': ''});

											if (name === '') {
												if ( ! jQuery('#name_row').hasClass('check_wrong')) {
													jQuery('#name_row').addClass('check_wrong');
												}
												jQuery('#name_state').html('Please, enter your Name!');
												errors++;
											} else {
												if (jQuery('#name_row').hasClass('check_wrong')) {
													jQuery('#name_row').removeClass('check_wrong');
												}
												jQuery('#name_state').html('');
											}
											if (email === '') {
												if ( ! jQuery('#email_row').hasClass('check_wrong')) {
													jQuery('#email_row').addClass('check_wrong');
												}
												jQuery('#email_state').html('Please, enter your Email!');
												errors++;
											} else {
												if (jQuery('#email_row').hasClass('check_wrong')) {
													jQuery('#email_row').removeClass('check_wrong');
												}
												jQuery('#email_state').html('');
											}
											if (phone === '') {
												if ( ! jQuery('#phone_row').hasClass('check_wrong')) {
													jQuery('#phone_row').addClass('check_wrong');
												}
												jQuery('#phone_state').html('Please, enter your Phone!');
												errors++;
											} else {
												if (jQuery('#phone_row').hasClass('check_wrong')) {
													jQuery('#phone_row').removeClass('check_wrong');
												}
												jQuery('#phone_state').html('');
											}
											if (message === '') {
												if ( ! jQuery('#message_row').hasClass('check_wrong')) {
													jQuery('#message_row').addClass('check_wrong');
												}
												jQuery('#message_state').html('Please, enter your Message!');
												errors++;
											} else {
												if (jQuery('#message_row').hasClass('check_wrong')) {
													jQuery('#message_row').removeClass('check_wrong');
												}
												jQuery('#message_state').html('');
											}

											if (errors == 0) {
												jQuery.post("send_contact.php", {name: name, email: email, phone: phone, message: message}, function(data) {
													if (data.success) {

														jQuery('#name').val('');
														jQuery('#email').val('');
														jQuery('#phone').val('');
														jQuery('#message').val('');

														jQuery('#contact_form_success_message').css('display', 'block').animate({opacity:1}, 300);


													} else {
														if (data.errors.name !== '' && data.errors.name !== undefined) {
															if ( ! jQuery('#name_row').hasClass('check_wrong')) {
																jQuery('#name_row').addClass('check_wrong');
															}
															jQuery('#name_state').html(data.errors.name);
														}
														if (data.errors.email !== '' && data.errors.email !== undefined) {
															if ( ! jQuery('#email_row').hasClass('check_wrong')) {
																jQuery('#email_row').addClass('check_wrong');
															}
															jQuery('#email_state').html(data.errors.email);
														}
														if (data.errors.phone !== '' && data.errors.phone !== undefined) {
															if ( ! jQuery('#phone_row').hasClass('check_wrong')) {
																jQuery('#phone_row').addClass('check_wrong');
															}
															jQuery('#phone_state').html(data.errors.phone);
														}
														if (data.errors.message !== '' && data.errors.message !== undefined) {
															if ( ! jQuery('#message_row').hasClass('check_wrong')) {
																jQuery('#message_row').addClass('check_wrong');
															}
															jQuery('#message_state').html(data.errors.message);
														}

														if (data.errors.sending !== '' && data.errors.sending !== undefined) {
															jQuery('#contact_form_error_message .g-alert-body p').html(data.errors.sending);
															jQuery('#contact_form_error_message').css('display', 'block').animate({opacity:1}, 300);
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

<!-- GMap-->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/jquery.gmap.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('.w-map-h').gMap({
				zoom: 17,
				markers:[
					{
						latitude: -12.108236566532314,
            			longitude: -76.9694588672508,
						html: "Av. Primavera 1796 Of. 701 - Surco",
						popup: true
					}
				]
			});
		});
	</script>
	
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "ur-b6bcdd5b-dde-cce8-a00c-478890414ff", doNotHash: true, doNotCopy: false, hashAddressBar: true});</script>

</body>
</html>
