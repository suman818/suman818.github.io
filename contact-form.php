<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'sales@ramolacards.com';
	$email_subject = "Enquiry from TechAswal.com";
	$email_body = "Name: $name. \n".
					"Email: $visitor_email.\n".
					"Message: $message. \n";

	$to = "suman818@gmail.com";
	$headers = "From: $email_from \r\n";
	$headers = "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);
	header("Location: sent.html");
 
?>