<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
if (isset($_POST['submit'])) {
    $email = new PHPMailer(true);
    $email->isSMTP();
    $email->Host = 'smtp.gmail.com';
    $email->SMTPAuth = true;
    $email->Username = 'omarmohammedelsayed00@gmail.com';
    $email->Password = 'onve nohg ybma yvaf ';
    $email->SMTPSecure = 'ssl';
    $email->Port = 465;
    $email->setFrom('omarmohammedelsayed00@gmail.com');
    $email->addAddress($_POST['email']);
    $email -> isHTML(true);
    $email->Subject = $_POST['subject'];
    $email-> Body = $_POST['message'];
    $email->send();
    echo"
    <script>
    alert('Sent Successfully');
    document.location.herf='index.php'
    </script>
    ";

}
?>