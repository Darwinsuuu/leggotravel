<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


    if(isset($_POST['submit_contact'])){

        $emailAddress = $_POST['getEmail'];
        $name = $_POST['name'];
        $subjectTitle = $_POST['getSubject'];
        $concern = $_POST['getConcern'];

        $mailTo = "official.leggotravelph@gmail.com";
        $body = "Email Address: ".$emailAddress."<br>Fullname: ".$name."<br><br>".$concern;

        $mail = new PHPMailer();
        
        $mail->SMTPDebug  = 3;  
        $mail->IsSMTP();

        $mail->SMTPSecure = "tls";
        $mail->Port       = 2525;
        $mail->Host = "mail.smtp2go.com";
        $mail->SMTPAuth   = TRUE;
        $mail->Username   = "LeggoTravel";
        $mail->Password   = "lolalolay0810";


        $mail->From = $emailAddress;
        $mail->FromName = $name;

        $mail->addAddress($mailTo, "LeggoTravelPH");

        $mail->isHTML(true);
       
        $mail->Subject = "Concern: ".$subjectTitle;
        $mail->Body = $body;
        $mail->AltBody = $concern;


        if(!$mail->send()) {
            // echo "Mailer Error: ".$mail->ErrorInfo;
        } else {
            echo "Message has been send";
            echo "<script>window.location.href='../contact.php';</script>";
        }

    }

?>