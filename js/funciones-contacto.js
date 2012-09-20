var jefform = jQuery.noConflict();
jefform(document).ready(function(){
	jefform(".fc_enviar").click(function() {
		
		var nombre_apellidos = jefform("#fc_nombre_apellidos").val();
			empresa= jefform("#fc_empresa").val();
			direccion= jefform("#fc_direccion").val();
			telefono= jefform("#fc_telefono").val();
			email= jefform("#fc_email").val();
			comentario= jefform("#fc_comentario").val();
			validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
			
		if (nombre_apellidos == "") {
		    jefform("#fc_nombre_apellidos").focus();
			jefform("#fc_nombre_apellidos").addClass("error-iptx1");
		    return false;
		}else if (empresa == "") {
		    jefform("#fc_empresa").focus();
			jefform("#fc_empresa").addClass("error-iptx2");
		    return false;
		}else if (direccion == "") {
		    jefform("#fc_direccion").focus();
			jefform("#fc_direccion").addClass("error-iptx1");
		    return false;
		}else if (telefono == "") {
		    jefform("#fc_telefono").focus();
			jefform("#fc_telefono").addClass("error-iptx2");
		    return false;
		}else if(email == "" || !validacion_email.test(email)){
		    jefform("#fc_email").focus();
			jefform("#fc_email").addClass("error-iptx2");
		    return false;
		}else if(comentario== ""){
		    jefform("#fc_comentario").focus();
			jefform("#fc_comentario").addClass("error");
		    return false;
		}else {
			jefform('.imagen').removeClass('ocultar');
			var datos = 'nombre_apellidos='+ nombre_apellidos + 
						'&empresa='+ empresa + 
						'&direccion='+ direccion + 
						'&telefono='+ telefono+ 
						'&email='+ email + 
						'&comentario='+ comentario;
			jefform.ajax({
	    		type: "POST",
	    		url: "procesos/proc-contacto-envio.php",
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