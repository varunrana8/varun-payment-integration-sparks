<?php
  
  require 'PHPMailerAutoload.php';
  
  // Create object of PHPMailer class
  $mail = new PHPMailer(true);

  $output = '';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'officialpurposeforproject@gmail.com';
      // Gmail Password
      $mail->Password = '8800583044';
      $mail->SMTPSecure = 'tls';
      $mail->Port = 587;

      // Email ID from which you want to send the email
      $mail->setFrom($email);
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('varunrana8@gmail.com');

      $mail->isHTML(true);
      $mail->Subject = 'Form Submission';
      $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";

      $mail->send();
      echo "<script type='text/javascript'>alert('Message sent Successfully')
          </script>";
    } catch (Exception $e) {
      echo "Sorry something went wrong!";
    }
  }

?>
