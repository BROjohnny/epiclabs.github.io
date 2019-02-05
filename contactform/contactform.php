<?php

require_once 'mailer/class.phpmailer.php';
$mail = new PHPMailer(true);

if (isset($_POST["submit_btn"])) {
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject1 = $_POST["subject"];
	$message = $_POST["message"];

	if (($name!="")&&($email!="")&&($subject!="")&&($message!="")) {
		    
        $headers = "From: $email \r\n";
        $headers .= "Reply-To: $email \r\n";
        $headers .= "To: labs.epic@gmail.com \r\n";
        $headers .= "X-Mailer: PHP/" . PHP_VERSION;

        $to = "labs.epic@gmail.com";
        $subject = $subject1;
        $body =  "Hi, I'm $name, \n\n" . $message;
            
        mail($to, $subject, $body, $headers);
	}
}


?>