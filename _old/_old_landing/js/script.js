$(function()
{
	var jqxhr = false;

	function validateEmail(email) {
		var re = /^(([^<>()[\]\.,;:\s@"]+(\.[^<>()[\]\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}

	/**
	 * Muestra un popup con un estado
	 * @param  {string} msgTitle Título del mensaje
	 * @param  {string} msgBody  Cuerpo del mensaje
	 * @param  {string} msgType  Clase CSS del contenedor del mensaje
	 */
	 function showStatus(msgTitle,msgBody,msgType)
	 {
	 	if (typeof msgTitle == 'undefined') msgTitle = '';
	 	if (typeof msgBody == 'undefined') msgBody = '';
	 	if (typeof msgType == 'undefined') msgType = '';

	 	$('#formStatus').removeClass().addClass('modal fade').addClass(msgType);

	 	$('#formStatus .modal-title').text(msgTitle);
	 	if (msgBody) $('#formStatus .modal-body').text(msgBody).show(); else $('#formStatus .modal-body').hide();

	 	$('#formStatus').modal('show');
	 }
	 function clearForm($form)
	 {
	 	$form.find('input[type!=hidden],textarea,select').val('');
	 }

	/**
	 * Valida que el formulario "$form" tenga un nombre, email, telefono y mensaje completos y correctos.	
	 * @param  {jQuery Object Instance} $form 
	 * @return {boolean}       ['true' si es valido, o 'false' en caso contrario]
	 */
	 function validateForm($form)
	 {

	 	var $email = $form.find('input[name="email"]');

	 	$email.removeClass('error');

	 	$('#nameError').removeClass('show');

	 	if (!$email.val()) {
	 		$email.addClass('error');
	 		$('#emailError').addClass('show');
	 	}

	 	if ($form.find('.error').length > 0) return false;

	 	else return true;
	 }

	 $('#form-newsletter, #form-newsletter-top').submit(function()
	 {
	 	var $form = $(this);
	 	if (!jqxhr && validateForm($form))
	 	{
	 		jqxhr = $.ajax({
	 			url: 'send.php',
	 			data:$form.serialize(),
	 			type:'POST',
	 			complete: function(){
	 				jqxhr = false;
	 			},
	 			success: function(msg){
	 				if (msg == 1)
	 				{
	 					showStatus('Suscripción aceptada','¡Te has suscrito con éxito!','success');
	 				}
	 				else
	 				{
	 					if (msg == -1)
	 					{
	 						showStatus('No pudimos procesar tu suscripción', 'Por favor corrobora los datos o ingresa un email correcto');
	 						clearForm($form);
	 					}
	 					else {
	 						if (msg == -2) {
	 							showStatus('No se pudo agregar el email ingresado','El mail ingresado ya pertenece a la lista de newsletter','error');	 							
	 						}
	 						else
	 						{
	 							showStatus('No se pudo procesar tu solicitud','Por favor, intenta en unos minutos','error');
	 						}
	 					}
	 				}

	 				$('#formStatus').modal('show');
	 			}
	 		});
	 	}

		return false; //Previene la ejecucion normal del formulario
	});
	});