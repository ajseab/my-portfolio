<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];

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
    $mail->Body = 'Another test email...';
    $mail->addAddress('averyjseabolt@gmail.com');
    $mail->send();
    header('Location: index.php?mailsent');
  }
?>
