<?php

    include_once 'db_connect.php';

    $username = $_POST['getUsername'];
    $password = $_POST['getPassword'];

    $sql = "SELECT * FROM tbl_admin_user WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {

            session_start();
            $_SESSION['admin_id'] = $row["admin_id"];
            header("Location: ../admin/index.php");
            exit();

        }

    } else {
        header("Location: ../admin/login.php?error=true");
    }

    mysqli_close($connect);
    
?>