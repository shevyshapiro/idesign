<?php 
switch($_REQUEST['action']){
      case 'contact_us_form':
		  include_once '../libs/phpmailer/PHPMailerAutoload.php';
           $message = 'Name: '.$_POST['name'].'<br>';
           $message .= 'Phone: '.$_POST['phone'].'<br>';
           $message .= 'Email: '.$_POST['email'].'<br>';
           $message .= 'Comments/Questions: '.$_POST['message'].'<br>';

		   $mail = getMailer();

           $mail->addAddress("hello@weareidesign.com");     // Add a recipient

           $mail->Subject = 'Contact Form Submission From '.$_POST['name'];
           $mail->Body    = $message;

           if(!$mail->send()) {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
           } else {
              echo 'Message has been sent';
            }
            break;
      case 'job_with_us_form':
			include_once '../libs/phpmailer/PHPMailerAutoload.php';

           $message = 'Name: '.$_POST['name'].'<br>';
           $message .= 'Phone: '.$_POST['phone'].'<br>';
           $message .= 'Email: '.$_POST['email'].'<br>';
           $message .= 'Comments/Questions: '.$_POST['message'].'<br>';
		   
		   $mail = getMailer();
           $mail->addAddress("hello@weareidesign.com");     // Add a recipient

           $mail->Subject = 'Employment Form Submission From '.$_POST['name'];
           $mail->Body    = $message;
			if (isset($_FILES['file']) &&
				$_FILES['file']['error'] == UPLOAD_ERR_OK) {
				$mail->AddAttachment($_FILES['file']['tmp_name'],
									 $_FILES['file']['name']);
			}
           if(!$mail->send()) {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
           } else {
              echo 'Message has been sent';
            }
            break;

}


function getMailer(){
		  include_once '../libs/phpmailer/PHPMailerAutoload.php';
	
           $mail = new PHPMailer;
           $mail->isHTML(true); 
		$mail->isSMTP();
		$mail->Username = 'AKIAJCQTCNEBFTPKPDIA';
		$mail->Password = 'Amqhhl4KyGt7MguThRGNC1PyAeAhk0EjhiuW9jEjfO6d';
		$mail->Host = 'email-smtp.us-east-1.amazonaws.com';
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->setFrom("yk@weareidesign.com");
		return $mail;
}

?>