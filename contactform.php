<?php  

	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];
	
	$mailTo = "admin@pmillanp.com";
	
	$headers = "From: $mailFrom \r\n";
	$txt = "You have received an e-mail from \n $name. 
			\n\n $message";
	
	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.html");

?>