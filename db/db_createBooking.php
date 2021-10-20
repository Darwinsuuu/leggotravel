<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


    if(isset($_POST['btnBooking'])){

        include_once 'db_connect.php';

        session_start();
        $uid = $_SESSION['id'];
        $aid = $_GET['aid'];


        $sql_selectAll = "SELECT * FROM tbl_user WHERE user_id = $uid";
        $result = mysqli_query($connect, $sql_selectAll);
        $row = mysqli_fetch_assoc($result);

        $firstname = $row["firstname"];
        $email = $row["email"];


        $customer_name = $_POST['fullname'];
        $location = $_POST['location'];
        $total = $_POST['total'];
        $price = $_POST['price'];
        $person = $_POST['person'];

        $nameCaps = ucwords($_POST['fullname']);

        $sql = "INSERT INTO tbl_booking (id, user_id, customer_name, location, persons, price, total_price) VALUES (null, '$uid', '$customer_name', '$location', '$person', '$price','$total')";
        if(!mysqli_query($connect, $sql)) {

            echo "There a problem creating bookings<br>".$sql."<br>".mysqli_error($connect);
        
        } else {

            $emailAddress = $email;
            $name = $nameCaps;
            $subjectTitle = "[LeggoTravel] Booking Notification - ".strtoupper($location);

            $mailTo = $email;
            $body = "Hi there, ".$firstname."!".
                    "<br><br>You have successfully booked the ticket/s for ".strtoupper($location)."!".
                    "<br>If you have any inquiries please do chat us in <a href='#'>official.leggotravelph@gmail.com</a>".
                    "<br>Thank you for trusting LeggoTravel! Enjoy!";

            $mail = new PHPMailer();
            
            $mail->SMTPDebug  = 3;  
            $mail->IsSMTP();

            $mail->SMTPSecure = "tls";
            $mail->Port       = 2525;
            $mail->Host = "mail.smtp2go.com";
            $mail->SMTPAuth   = TRUE;
            $mail->Username   = "LeggoTravel";
            $mail->Password   = "lolalolay0810";


            $mail->From = "official.leggotravelph@gmail.com";
            $mail->FromName = "LeggoTravel Ph";

            $mail->addAddress($mailTo, $name);

            $mail->isHTML(true);
        
            $mail->Subject = $subjectTitle;
            $mail->Body = $body;
            $mail->AltBody = "Hi there, ".$firstname."! You have successfully booked the ticket/s for".strtoupper($location)."! If you have any inquiries please do chat to us in official.leggotravelph@gmail.com. Thank you for trusting LeggoTravel! Enjoy!";


            if(!$mail->send()) {
                // echo "Mailer Error: ".$mail->ErrorInfo;
            } else {
                // echo "Message has been send";
                echo "<script>window.location.href='../adventures.php';</script>";
            }

        }





        

    }

?>