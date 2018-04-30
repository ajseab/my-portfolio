<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $body = $_POST['message'];
    if (!empty($name) && !empty($email) && !empty($body)) {
      $message = "<h1>Name:</h1> $name<br><br>";
      $message .= "<h1>Email:</h1> $email<br><br>";
      $message .= "<h1>Message:</h1><br><br>$body";
      $mail = new PHPMailer();
      $mail->isSMTP();
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = 'ssl';
      $mail->Host = 'smtp.gmail.com';
      $mail->Port = '465';
      $mail->isHTML();
      $mail->Username = 'averyjseaboltcontact@gmail.com';
      $mail->Password = '6SBXxYarLdGJEoLB';
      $mail->setFrom('no-reply@example.com');
      $mail->isHTML(true);
      $mail->Body = $message;
      $mail->addAddress('averyjseabolt@gmail.com');
      $mail->send();
      header('Location: index.php?mailsent');
    } else {
      header('Location: index.php#contact?mailerror');
    }
  }
?>
