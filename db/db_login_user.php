<?php

    include_once 'db_connect.php';

    $email = $_POST['getEmail'];
    $password = $_POST['getPassword'];

    $sql = "SELECT * FROM tbl_user WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {

            session_start();
            $_SESSION['id'] = $row["user_id"];
            header("Location: ../index.php?login=true");
            exit();
            
        }

    } else {
        header("Location: ../login.php?error=true");
    }

    mysqli_close($connect);
?>