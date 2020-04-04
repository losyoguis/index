
<!-- Submitting the Form With PHP -->
<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Formulario sitio web WWW.LOSYOGUIS.COM'; 
		$to = 'yoguis2000@gmail.com'; 
		$subject = 'Yoguis. Alguien se está poniendo en contacto contigo';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Por favor ingresa tu nombre';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Por favor ingresa una dirección de correo válido';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Por favor ingresa tu mensaje';
		}
		
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'La suma anti-spam es incorrecto';
		}
		
		
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>