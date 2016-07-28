<?php
$configSite = simplexml_load_file('app/config.xml');
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'thibault.d@ascoconsulting.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contact depuis votre site internet:  $name";
$email_body = "Vous avez reçu un nouveau message depuis le formulaire de contact de votre site.\n\n"."Détails :\n\nNom: $name\n\nEmail: $email_address\n\nTéléphone: $phone\n\nMessage:\n$message";
$headers = "De: noreply@$configSite->weblink\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Répondre à : $email_address";
mail($to,$email_subject,utf8_decode($email_body),$headers);
return true;
?>
