<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require '../vendor/autoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
try {
  // Create a new PHPMailer instance
  $mail = new PHPMailer(true);

  // Set the mailer to use the 'mail' function
  $mail->isMail();

  // Recipient and sender details

  // Set email content
  $mail->setFrom($email, $name);
  $mail->addAddress('hardik.tankariya@gmail.com');
  $mail->Subject = $subject;
  $mail->Body = $message;

  // Send the email
  if ($mail->send()) {
    echo "OK";
  } else {
    throw new Exception("Email sending failed: " . $mail->ErrorInfo);
  }
} catch (Exception $e) {
  http_response_code(500); // Internal Server Error
  echo $e->getMessage();
}

?>
