<?php 

class Gmail{

	public function email_send($to, $cc, $subject, $message, $from){
		
		 // echo $to.' '.$cc.' '.$cc2.' '.$subject.' '.$message.' '.$from;
		 require_once('PHPMailer/PHPMailerAutoload.php');
 
	     $mail = new PHPMailer;
	try {     
	     $mail->SMTPDebug = 0;                                       // Enable verbose debug output

	    $mail->isSMTP();                                            // Set mailer to use SMTP

	    // $mail->Host       = 'relay.excellent.co.id';  // Specify main and backup SMTP servers
	    $mail->Host       = 'mail.lenrekaprima.co.id';  // Specify main and backup SMTP servers

	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication

	    // $mail->Username   = 'relay.lenrekaprima@excellent.co.id';                     // SMTP username

	    // $mail->Password   = 'StdPwdRelayLENREKAPRIMA2018!';                               // SMTP password

	    $mail->Username   = 'no-reply@lenrekaprima.co.id';                     // SMTP username

	    $mail->Password   = 'Rekaprima2019';                               // SMTP password

	    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted

	    $mail->Port       = 587;
	     
	     $mail->setFrom('no-reply@lenrekaprima.co.id', $from); //email pengirim
	     $mail->addAddress($to); //email penerima
	     // $mail->addReplyTo('apa@gmail.com', 'apa');
	     $mail->addCC($cc);
	     // $mail->addCC($cc2);
	     $mail->isHTML(true);
	     
	            ///atur pesan email disini
	     $mail->Subject = $subject;
	     $mail->Body    = $message;
	     $mail->AltBody = $message;
	     
	     if(!$mail->send()) {
	      echo 'Message could not be sent.';
	      echo 'Mailer Error: ' . $mail->ErrorInfo;
	     } else {
	      // echo 'Message has been sent';
	     }
	        //echo 'Message has been sent';

	} catch (Exception $e) {

	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

	}
    }
}