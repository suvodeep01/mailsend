<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['submit']))
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'suvodeep443@gmai.com';
    $mail->Password = 'plhuparlleqxluep';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('suvodeep443@gmail.com');

    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);
    $mail->Subject = $_POST['name'];
    $mail->Body = $_POST['message'];

    $mail->send();

    echo "
        <script>
            alert('Sent Successfully');
        </script>
    ";

}

?>