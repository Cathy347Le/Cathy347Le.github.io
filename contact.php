<?php
if (isset($_POST["submit"])){
    require "phpmailer/PHPMailerAutoload.php";
    $mail = new PHPMailer;

    $mail -> Host="smtp.gmail.com";
    $mail -> Port=587;
    $mail -> SMTPAuth=true;
    $mail -> SMTPSecure="tls";
    $mail -> Username="cathy347le.cathy347Oconnor@gmail.com";
    $mail -> Password="l@brad00dleDoNUT";

    $mail -> setForm($_POST["email"],$_POST["name"]);
    $mail -> addAddress("cathy347oconnor@gmail.com");
    $mail -> addReplyTo($_POST["email"],$_POST["name"]);

    $mail -> isHTML(true);
    $mail -> Subject="Form Submission from ".$_POST["name"];
    $mail -> Body="You have recieved an e-email from ".$_POST["name"]."\n\n".$_POST["message"];


    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
    echo 'Message has been sent';
    }
}

?>