<?php

    include_once 'db_connect.php';

    echo "<script>console.log('Data records here is submitted in the database');</script>";

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(isset($_POST['submit'])){
        $sql = "INSERT INTO tbl_user (user_id, firstname, middlename, lastname, email, password) VALUES (null, '$firstname', '$middlename', '$lastname', '$email', '$password')";

        if(!mysqli_query($connect, $sql)) {
            echo "There's a problem inserting data! ".mysqli_error($connect);
        } else {
            echo "Account is successfully created!";
        }
    }

    mysqli_close($connect);
?>