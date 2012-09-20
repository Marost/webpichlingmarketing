var jefform = jQuery.noConflict();
jefform(document).ready(function(){
	jefform(".fc_enviar").click(function() {
		
		var nombre = jefform("#fc_nombre").val();
			amigo_nombre = jefform("#fc_amigo_nombre").val();
			amigo_email = jefform("#fc_amigo_email").val();
			noticia = jefform("#fc_noticia").val();			
			validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
			
		if (nombre == "") {
		    jefform("#fc_nombre").focus();
			jefform("#fc_nombre").addClass("error-iptx");
		    return false;
		}else if (amigo_nombre == "") {
		    jefform("#fc_amigo_nombre").focus();
			jefform("#fc_amigo_nombre").addClass("error-iptx");
		    return false;
		}else if(amigo_email == "" || !validacion_email.test(amigo_email)){
		    jefform("#fc_amigo_email").focus();
			jefform("#fc_amigo_email").addClass("error-iptx");
		    return false;
		}else {
			jefform('.imagen').removeClass('ocultar');
			var datos = 'nombre='+ nombre + 
						'&amigo_nombre='+ amigo_nombre + 
						'&amigo_email='+ amigo_email + 
						'&noticia='+ noticia;
			jefform.ajax({
	    		type: "POST",
	    		url: "procesos/proc-noticia-enviar-correo.php",
	    		data: datos,
	    		success: function() {
					jefform('.imagen').hide();
					jefform('.contac_msj').slideUp(1500).show();
					jefform('form').slideUp(1500).show;
					jefform('#msj_enviado').slideDown(2000).show();
	    		},
				error: function() {
					jefform('.imagen').hide();
					jefform('#msj_enviado').slideDown(1000).show();				
				}
	   		});
	 		return false;	
		}
	});
});